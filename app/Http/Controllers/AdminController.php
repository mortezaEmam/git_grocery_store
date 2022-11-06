<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
    if( Auth::check() )
    {
        if( Auth::user()->hasRole('super_admin')){
            return view('admin.admin');
        }
        else{


            return  redirect()->route('home.account');
        }
      }
      else  {


          return redirect()->route('user.login');

        }


    }
}
