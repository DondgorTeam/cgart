<?php

namespace App\Http\Controllers;

use App\Picture;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pictures = Picture::latest('created_at')->take(10)->get();

        return view('home',  compact('pictures'));
    }
}
