<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAuth extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';  
    protected $protectedFields  = true;
    protected $allowedFields    = [
        'username', 'email', 'password', 'join_date'  
    ];

    protected $allowCallbacks   = true;
    protected $beforeInsert     = ['hashPassword'];
    protected $beforeUpdate     = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {  
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}
