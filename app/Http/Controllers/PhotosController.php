<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index', 'show']);
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $photos = Photo::all();
		return view('photos.index', compact('photos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('photos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
//        $file = Input::file('photo');
//        $extension = $file->getClientOriginalExtension();
//        $filename = time().'.'.$extension;
//
//        $upload_success = $file->move('images', $filename);
//
//        Photo::create(array('imageName' => 'images/'.$filename ));

          $input = Input::all();
        $path = public_path() .'/images/';
        $fileName = $input['fileName']->getClientOriginalName();
        Photo::create(array('imageName' => 'images/'.$fileName, 'thumbnailName' => 'images/'. '300x300-' .$fileName, 'title' => $input['title'] ));
        $image = Image::make($input['fileName']->getRealPath());
        File::exists($path) or File::makeDirectory($path);
//        $image->save(public_path().'/images/' . Auth::user()->name . '/' . $input['filename']->getClientOriginalName();
        $image->save($path . $fileName)
            ->crop(300, 300)
            ->save($path . '300x300-' . $fileName);

        return Redirect('photos');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Photo $photo)
	{
        return view('photos.show', compact('photo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
