<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Customer Accounts';
        $data['customers'] = [
            ['fullname' => 'John Doe', 'email' => 'john@example.com', 'phone' => '09171234567'],
            ['fullname' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '09182345678'],
            ['fullname' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '09193456789'],
            ['fullname' => 'Bob Brown', 'email' => 'bob@example.com', 'phone' => '09204567890'],
            ['fullname' => 'Charlie Davis', 'email' => 'charlie@example.com', 'phone' => '09215678901'],
        ];

        return view('templates/header', $data)
             . view('customers/index', $data)
             . view('templates/footer');
    }
}