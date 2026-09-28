<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'POS - Home';
        return view('templates/header', $data)
             . view('pages/home')
             . view('templates/footer');
    }

    public function about(): string
    {
        $data['title'] = 'POS - About';
        return view('templates/header', $data)
             . view('pages/about')
             . view('templates/footer');
    }
}