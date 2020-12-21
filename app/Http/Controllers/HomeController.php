<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ads;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $user_id=auth()->user()->id;
         $users = User::find($user_id);
        // return view('home',compact('user'));
        $displayAds = ads::all();

        return view('home',compact('displayAds','users'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user=User::find($id);
        return view('auth.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $newuser=User::find($id);
        $newuser->first_name=request('first_name');
        $newuser->last_name=request('last_name');
        $newuser->gender=request('gender');
        $newuser->address=request('address');

        $newuser->save();

        return redirect()->action('HomeController@index');
    }

    public function destroy($id)
    {
        $newuser= User::find($id);
        $newuser->delete();

        return redirect()->route('homepage');
    }
}
