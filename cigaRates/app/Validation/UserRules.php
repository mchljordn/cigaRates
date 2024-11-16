<?php

namespace App\Validation;
use App\Models\UserAuth;

class UserRules
{
    public function validateUser(string $str, string $fields, array $data)
    {
        $model = new UserAuth();

        $user = $model->where('email', $data['email'])->first();

        if (!$user) {
            return false;
        }

        return password_verify($data['password'], $user['password']);
    }
}
