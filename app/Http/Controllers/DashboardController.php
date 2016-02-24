<?php

namespace App\Http\Controllers;

use Gate;
use App\User;
use App\Picture;
use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(User $user)
    {
        $currentUser = Auth::user();//Auth::getUser(); // tuhain nevtersen bga hreglegch
        $pictures = $user->pictures()->latest('created_at')->paginate(16);
        
        
        return view('admin.profile',  compact('user', 'currentUser','pictures'));
    }

    /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    public function setting($id)
    {
        $currentUser = Auth::getUser();
        $user = User::findOrFail($id);
        
        if ($currentUser->id == $user->id){
            return view('admin.setting',  compact('user'));
        };
         
        // if ($request->user()) {
        //     $user = User::findOrFail($id);
        //     $user->update($request->all()); // $request->user() returns an instance of the authenticated user...
        //     return redirect('/user/'.$user->id);//->route('DashboardController@index', ['id' => $user->id]);
        // }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createImage($id)
    {
        $user = User::findOrFail($id);
        
        return view('admin.createImage', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.index',  compact('user'));
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
