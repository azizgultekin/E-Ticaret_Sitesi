<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {
        $data=Product::find($product_id);
        //$images=Image::whereColumn('product_id',$product_id);
        $images=DB::table('images')->where('product_id',$product_id)->get();
        return view('admin.image_add',['data'=>$data,'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$product_id)
    {
        $data=new Image;
        $data->title=$request->input('title');
        $data->product_id=$product_id;
        $data->image=Storage::putFile('images',$request->file('image'));
        $a=DB::table('products')->where('id',$product_id)->pluck('category_id');
        $b=explode('"',$a);
        $data->category_id=$b[1];
        

        $data->save();
        return redirect()->route('admin_image_add',['product_id'=>$product_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image,$id,$product_id)
    {
        $data=Image::find($id);   
        $data->delete();    
        return redirect()->route('admin_image_add',['product_id'=>$product_id]);
    }
}
