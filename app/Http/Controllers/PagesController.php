<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
	{
		$name = 'Одхүү';
		$people = ['Одхүү','Uugaa','Naraa','Boloroo'];

		return view('pages.about', compact('name'),compact('people'));
	}

    public function contact()
    {
        return view('pages.contact');
    }
}
