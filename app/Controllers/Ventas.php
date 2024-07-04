<?php

namespace App\Controllers;

class Ventas extends BaseController
{
    public function index(): string
    {
        session()->set('mainPage', "Ventas");
        return view('Ventas');
    }
}
