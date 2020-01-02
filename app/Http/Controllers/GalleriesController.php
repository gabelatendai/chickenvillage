<?php

namespace App\Http\Controllers;

use App\Galleries;

use App\Banners;
use App\Dishes;
use App\Meals;
use App\News;
use Session;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $pagenate = Galleries::orderBy('created_at','desc')->paginate(6);
        return view ('/admin/gallery/index',['galleries'=>$pagenate]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/gallery/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
            'caption' =>'required',

            'image' =>'required|image:jpg',

            'description' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= public_path('uploads/gallery/');
        $image->move($path, $featured_new_name);
        $gallery = Galleries::create([
            'caption'=> $request->caption,

            'image'=>'uploads/gallery/'.$featured_new_name,
            'description'=> $request->description,
        ]);

        Session::flash('success',' Successfully Added!');
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery =  Galleries::find($id);

        return view('/admin/gallery/edit')->with('galleries',$gallery);

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
        $this->validate($request, [
            'caption' =>'required',
            'description' =>'required',
        ]);
        $gallery =  Galleries::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= public_path('uploads/gallery/');
            $image->move($path, $featured_new_name);
            $gallery-> image= 'uploads/gallery/'.$featured_new_name;
        }
        $gallery-> caption = $request ->caption;

        $gallery-> description = $request ->description;

        $gallery->save();
        //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery =  Galleries::find($id);
        $gallery ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
