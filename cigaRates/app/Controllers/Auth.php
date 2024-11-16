<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserAuth as UserModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);
        
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[32]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or password don\'t match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                
                $user = $model->where('email', $this->request->getVar('email'))->first();
                
                if ($user && password_verify($this->request->getVar('password'), $user['password'])) {
                    $this->setUserSession($user);
                    session()->setFlashData('success', 'Login Success!');
                    return redirect()->to('dashboard');
                } else {
                    session()->setFlashData('error', 'Invalid credentials');
                    return redirect()->to('/');
                }
            }
        }    
        return view('signup', $data);
    }

    private function setUserSession($user)
    {
        $data = [
            'user_id' => $user['user_id'],
            'email' => $user['email'],
            'username' => $user['username'], 
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            
            $rules = [
                'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',  
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]', 
                'password' => 'required|min_length[8]|max_length[32]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $userData = [
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT), 
                ];
                
                $model->save($userData);

                session()->setFlashData('success', 'Register Success!');
                return redirect()->to('/');
            }
        }
        return view('signin', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
