<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('login');
    }

    Public function show_dashboard(){
        return view('admin.layout_admin');
    }

}
