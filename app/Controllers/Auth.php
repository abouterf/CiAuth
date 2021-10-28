<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function save()
    {
        /*$validation = $this->validate([
            'name' => 'required', 
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]|max_length[12]',
            'passwordConfirmation' => 'required|min_length[6]|max_length[12]|matches[password]',
        ]); */
        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your full name is required.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Your Email is required.',
                    'valid_email' => 'Your Email is not valid.',
                    'is_unique' => 'the Email you entered already exists.'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]|max_length[12]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have at least 6 characters.',
                    'max_length' => 'Password must not have more than 12 characters.'
                ]
            ],
            'passwordConfirmation' => [
                'rules' => 'required|min_length[6]|max_length[12]|matches[password]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have at least 6 characters.',
                    'max_length' => 'Password must not have more than 12 characters.',
                    'matches' => 'Passwords not match together.'
                ]
            ]
        ]);
        if (!$validation) {
            return view('auth/register', ['validation' => $this->validator]);
        } else {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');


            $values = [
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password) ,
            ];

            $usersModel = new UserModel();
            $query = $usersModel->insert($values);

            if (!$query) {
                return redirect()->back()->with('fail', 'Something went wrong');
            } else {
                return redirect()->to('auth/register')->with('success', 'You are now registered.');
            }
        }
    }
}
