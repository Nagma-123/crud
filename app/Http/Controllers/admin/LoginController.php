<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
}
