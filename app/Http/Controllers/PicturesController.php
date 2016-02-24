<?php

namespace App\Http\Controllers;

use Gate;
use App\User;
use App\Picture;
use App\Category;
use Intervention\Image\Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\PictureRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class PicturesController extends Controller
{
    
    public function index()
    {
        $pictures = Picture::latest('created_at')->paginate(15);
        
        return view('pictures.index',  compact('pictures'));
    }
    
    public function artworks()
    {
        $pictures = Picture::latest('created_at')->paginate(15);
        
        return view('pictures.index',  compact('pictures'));
    }
    
    public function show(Picture $picture)
    {        
        return view('pictures.show',  compact('picture'));
    }
    
    public function artworkShow($id)
    {
        $user = Auth::user()->id;
        $currentUser = Auth::user()->id;
        $picture = Picture::findOrFail($id);

        return view('pictures.show',  compact('user','picture','currentUser'));
    }
    
    public function create()
    {
        
        $categories = Category::all(); //lists('name', 'id');
        
        return view('pictures.create', compact('categories'));
    }
    
    public function store(Request $request)
    {
        $file = $request->file('file');

        $ImageUrl = public_path('images'.DIRECTORY_SEPARATOR);
        $str = str_random(5).'_'.date('Y-m-d');
        
        if ($file->isValid()) {
            
            $filename = $str.'.'.$file->getClientOriginalExtension();
            $thumb = $str.'_thumb.'.$file->getClientOriginalExtension();
            
            $file->move($ImageUrl, $filename);
            
            { //bhgu zugeer iim
                $cropData = json_decode($_POST['cropData']);
                
                $manager = new \Intervention\Image\ImageManager();
                //$img = \Intervention\Image\Image::make($ImageUrl.$filename);
                
                $img = $manager->make($ImageUrl.$filename);
                $img->crop(floor($cropData->width), floor($cropData->height), floor($cropData->x), floor($cropData->y));
                $img->save($ImageUrl.$str.'_thumb.'.$file->getClientOriginalExtension());
            }
            
            Auth::user()->pictures()->create(array('category_id' => $request->input('category-list'), 'name' => $request->input('name'), 'path' => $filename, 'path_thumb' => $thumb,'published' => 0 ));
            
        }
        
        $currentUser = Auth::getUser();
        // dd($currentUser);
        // flash()->success('Шинээр нийтлэл үүсгэгдлээ');
        
        return Redirect( Auth::getUser()->name);
    }
    public function destroy($id)
    {
        $imageName = Photo::findOrFail($id)->path;
        $thumbName = Photo::findOrFail($id)->path_thumb;
        $path = public_path('images'.DIRECTORY_SEPARATOR);
        File::delete($path.''.$imageName);
        File::delete($path.''.$thumbName);
        Photo::findOrFail($id)->delete();

        return redirect('photos');
    }
}
