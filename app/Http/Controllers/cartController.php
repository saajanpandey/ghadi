<?php

namespace App\Http\Controllers;

use App\Model\History;
use Illuminate\Http\Request;
use App\ads;
use App\User;

class cartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $user = User::find($user_id);
        return view('cart.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id=auth()->user()->id;
        $product_id=$id;

        $get_user = User::find($user_id);
        $exists = $get_user->ads->contains($product_id);

        if($exists=='true')
        {
            return redirect()->route('cart.index');
        }
        $relation = ads::find($product_id);
        $relation->users()->attach($user_id);
        return redirect()->route('cart.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id=auth()->user()->id;
        $product_id=$id;

        $relation = ads::find($product_id);



        try {


            $history = new History();

            $history->user_id=$user_id;

            $history->save();



            $relation->history()->attach($history->id);

            $relation->users()->detach($user_id);


            return redirect()->route('cart.index');


        } catch (\Throwable $th) {

            $user = User::find($user_id);
            $history=History::find($user->history->id);

            $history->ads()->attach($product_id);

            $relation->users()->detach($user_id);

            return redirect()->route('cart.index');
        }
    }
}
