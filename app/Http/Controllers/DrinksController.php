<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drinks;
use Session;
class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('/admin/drinks/index')->with('drinks', Drinks::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/drinks/create');
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
            'price' =>'required',
            'image' =>'required|image:jpg',

            'description' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= public_path('uploads/drinks/');
        $image->move($path, $featured_new_name);
        $drinks = Drinks::create([
            'name'=> $request->name,
            'price'=> $request->price,
            'image'=>'uploads/drinks/'.$featured_new_name,
            'description'=> $request->description,
        ]);

        Session::flash('success',' Successfully Added!');
        return redirect()->route('drinks.index');
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
        $drinks =  Drinks::find($id);

        return view('/admin/drinks/edit')->with('drinks',$drinks);
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
            'price' =>'required',
             'description' =>'required',
        ]);
        $drinks =  Drinks::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= public_path('uploads/drinks/');
            $image->move($path, $featured_new_name);
            $drinks-> image= 'uploads/drinks/'.$featured_new_name;
        }
        $drinks-> name = $request ->name;
        $drinks-> price = $request ->price;
        $drinks-> description = $request ->description;

        $drinks->save();
        //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('drinks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drinks =  Drinks::find($id);
        $drinks ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}

