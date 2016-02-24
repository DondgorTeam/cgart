<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Picture;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    
    public function index(User $user)
    {
        $currentUser = Auth::user();//Auth::getUser(); // tuhain nevtersen bga hreglegch
        $pictures = $user->pictures()->latest('created_at')->paginate(16);
        
        
        return view('users.profile',  compact('user', 'currentUser','pictures'));
    }

    public function updateProfile(Request $request)
    {
        // $user = User::findOrFail($id);

        // return view('albums.edit',compact('album','countries'));

        if ($request->user()) {
            // $request->user() returns an instance of the authenticated user...
        }
    }


    public function setting($id)
    {
        $currentUser = Auth::getUser();
        $user = User::findOrFail($id);
        
        if ($currentUser->id == $user->id){
            return view('users.setting',  compact('user'));
        };
         
        // if ($request->user()) {
        //     $user = User::findOrFail($id);
        //     $user->update($request->all()); // $request->user() returns an instance of the authenticated user...
        //     return redirect('/user/'.$user->id);//->route('DashboardController@index', ['id' => $user->id]);
        // }
        
    }

    public function createImage($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.createImage', compact('user'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.index',  compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    // public function update($id, AlbumRequest $request)
    // {
    //     $album = Album::findOrFail($id);

    //     $album->update($request->all());

    //     return redirect('albums');
    // }

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
