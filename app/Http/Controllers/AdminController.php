<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    //
    public function index()
    {
//        dd(Auth::user()?'ok':'no');
        if(Auth::user() and Auth::user()->hasRole('admin'))
        {

            return view('admin.admin');

        }
        else{
            return  redirect()->route('user.login');
    }

    }
}
