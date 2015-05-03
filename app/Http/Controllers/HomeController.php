<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class HomeController extends Controller {

    public function index()
    {
//        $articles = Article::with('user')->orderBy('position', 'DESC')->orderBy('created_at', 'DESC')->limit(4)->get();
        $tag = Tag::find('3');
//
        $articles = $tag->articles()->latest('published_at')->published()->orderBy('created_at', 'DESC')->limit(3)->get();

        $data['image'] = Session::get('img');

        return view('home', compact('articles','data'));
    }

    public function store()
    {
        $image = Input::file('fileName');
        $name_image = $image->getClientOriginalName();
        $image->move('images', $name_image);

        $image_final = 'images/'.$name_image;

        $int_image = Image::make($image_final);
        $int_image->resize(325, null, function($constraint){
            $constraint->aspectRatio();
        });

        $int_image->save($image_final);

        Session::put('img', $image_final);

        return Redirect::back();
    }

}
