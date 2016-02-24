<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function login_admin_panel(Request $request)
    {
    	$admin = auth()->guard('admins');
    	if($admin->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
    	{
    		return redirect()->intended('admin');
    	}else{
    		return 'information access denied';
    	}
    }
}
