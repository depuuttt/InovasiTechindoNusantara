<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function login()
    {
        return view('dashboard/login');
    }

    public function register()
    {
        return view('dashboard/register');
    }
}
