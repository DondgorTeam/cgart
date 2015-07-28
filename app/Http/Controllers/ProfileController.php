<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

     /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    public function updateProfile(Request $request)
    {
        // $user = User::findOrFail($id);

        // return view('albums.edit',compact('album','countries'));

        if ($request->user()) {
            // $request->user() returns an instance of the authenticated user...
        }
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
