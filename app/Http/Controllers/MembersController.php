<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teams;
use App\Banners;
use App\Dishes;
use App\Meals;
use App\News;
use Session;
use App\Testimonial;
class MembersController extends Controller
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
        return view('/admin/team/index')->with('teams', Teams::all())
            ->with('testimonials',Testimonial::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/team/create');
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
            'name' =>'required',
            'role' =>'required',
            'image' =>'required|image',

            'pnumber' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= public_path('uploads/team/');
        $image->move($path, $featured_new_name);
        $drinks = Teams::create([
            'name'=> $request->name,
            'role'=> $request->role,
            'image'=>'uploads/team/'.$featured_new_name,
            'pnumber'=> $request->pnumber,
        ]);

        Session::flash('success',' Successfully Added!');
        return redirect()->route('team.index');
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
        $teams =  Teams::find($id);

        return view('/admin/team/edit')->with('teams',$teams);
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
            'name' =>'required',
            'role' =>'required',
            'pnumber' =>'required',
        ]);
        $teams =  Teams::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= public_path('uploads/team/');
            $image->move($path, $featured_new_name);
            $teams-> image= 'uploads/team/'.$featured_new_name;
        }
        $teams-> name = $request ->name;
        $teams-> role = $request ->role;
        $teams-> pnumber = $request ->pnumber;

        $teams->save();
        //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams =  Teams::find($id);
        $teams ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
