<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        session()->set('mainPage', "Dashboard");
        return view('dashboard');
    }
}
