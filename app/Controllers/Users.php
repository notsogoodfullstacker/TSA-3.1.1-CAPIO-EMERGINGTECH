<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'User Accounts';
        $data['users'] = [
            ['username' => 'admin_main', 'fullname' => 'Alex Mercer', 'role' => 'Administrator'],
            ['username' => 'cashier_1', 'fullname' => 'Sarah Connor', 'role' => 'Cashier'],
            ['username' => 'cashier_2', 'fullname' => 'Kyle Reese', 'role' => 'Cashier'],
            ['username' => 'mgr_retail', 'fullname' => 'Ellen Ripley', 'role' => 'Manager'],
            ['username' => 'inv_staff', 'fullname' => 'Arthur Dent', 'role' => 'Inventory Staff'],
        ];

        return view('templates/header', $data)
             . view('users/index', $data)
             . view('templates/footer');
    }
}