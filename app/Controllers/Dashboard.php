<?php

namespace App\Controllers;

use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $loggedUserId = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserId);

        $data = [
            'title' => 'Dashboard',
            'userInfo' => $userInfo
        ];

        return view('dashboard/index', $data);
    }


    public function profile(){
        $userModel = new UserModel();
        $loggedUserId = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserId);

        $data = [
            'title' => 'Profile',
            'userInfo' => $userInfo
        ];

        return view('dashboard/profile', $data); 
    }
}
