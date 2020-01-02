<?php

namespace App\Http\Controllers;
use App\Banners;
use Session;
use App\Dishes;
use App\Meals;
use App\News;

use Illuminate\Http\Request;

class BannersController extends Controller
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
        $pagenate = Banners::orderBy('created_at','desc')->paginate(6);
        return view ('/admin/banners/index',['banners'=>$pagenate])
            ->with('meals',Meals::all())
            ->with('news',News::all())
            ->with('dishes',Dishes::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/banners/create');
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
            'headline' =>'required',
            'sub_headline' =>'required',
            'image' =>'required|image:jpg',

            'description' =>'required',
                   ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= public_path('uploads/banners/');
        $image->move($path, $featured_new_name);
        $banners = Banners::create([
            'headline'=> $request->headline,
            'sub_headline'=> $request->sub_headline,
            'image'=>'uploads/banners/'.$featured_new_name,
            'description'=> $request->description,



        ]);

        Session::flash('success',' Successfully Added!');
        return redirect()->route('banners.index');
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
        $banners =  Banners::find($id);

        return view('/admin/banners/edit')->with('banners',$banners);
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
            'headline' =>'required',
            'sub_headline' =>'required',


            'description' =>'required',
        ]);
        $banners =  Banners::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= public_path('uploads/banners/');
            $image->move($path, $featured_new_name);
            $banners-> image= 'uploads/banners/'.$featured_new_name;
        }
        $banners-> headline = $request ->headline;
        $banners-> sub_headline = $request ->sub_headline;
        $banners-> description = $request ->description;

        $banners->save();
        //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banners =  Banners::find($id);
        $banners ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
