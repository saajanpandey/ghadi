<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertPostFormRequest;
use App\Model\Brand;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ads;
use App\images;

class adsController extends Controller
{


//    public function __construct()
//    {
//        $this->middleware('auth:admin');
//    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $ads=ads::with('images')->get();
//        $ads=ads::with('categories')->get();
//        $ads=ads::with('brands')->get();
          return view('ads.index',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::all();
        $brands= Brand::all();
        return View('ads.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertPostFormRequest $request)
    {

        $newProduct = new ads();

        $newProduct->product_name=request('product_name');
        $newProduct->product_price=request('product_price');
        $newProduct->product_brand=request('brands');
//      $newProduct->product_description=request('product_description');
        $newProduct->save();

        $newProduct->categories()->attach(request('categories'));





        if($request->hasFile('image')){
            foreach(request('image') as $image)
             {
                // get filename with extension
                $fileNameWithExt=$image->getClientOriginalName();
                // get just filename
                $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                // GET JUST EXT
                $extension=$image->getClientOriginalExtension();
                // filename to store
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                // upload image
                $path=$image->storeAs('public/cover_image',$fileNameToStore);

               $this->StoreMultipleImages($newProduct,$fileNameToStore);
            }

        }
        else {
            $fileNameToStore='noimage.jpg';
            $this->StoreMultipleImages($newProduct,$fileNameToStore);
        }



        return redirect()->action('adsController@index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad=ads::find($id);
        return view('ads.show')->with('ad',$ad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad=ads::find($id);
        $categories =Category::all();
        $brands=Brand::all();
        return view('ads.edit',compact('categories','brands'))->with('ad',$ad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsertPostFormRequest $request, $id)
    {
        $newProduct = ads::find($id);
        $newProduct->product_name=request('product_name');
        $newProduct->product_price=request('product_price');
        $newProduct->product_brand=request('brands');
//        $newProduct->product_description=request('product_description');

        $newProduct->save();

        $newProduct->categories()->detach(request('categories'));

        $newProduct->categories()->attach(request('categories'));



        return redirect()->action('adsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad=ads::find($id);
        foreach($ad->images as $image)
        {
            //delete image
            Storage::delete('public/cover_image/'.$image->imagelocation);

        }
        $ad->delete();
        return redirect()->action('adsController@index');
    }

    // custom function
    private function StoreMultipleImages($newProduct,$fileNameToStore)
    {
                $imagelocation=new images();
                $imagelocation->ads_id=$newProduct->id;
                $imagelocation->imagelocation=$fileNameToStore;
                $imagelocation->save();
    }

}
