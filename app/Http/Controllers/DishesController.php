<?php

namespace App\Http\Controllers;
use App\Banners;
use App\Dishes;
use App\Meals;
use App\News;
use Session;
use Illuminate\Http\Request;

class DishesController extends Controller
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
        $pagenate = Dishes::orderBy('created_at','desc')->paginate(4);
        return view ('/admin/dishes/index',['dishes'=>$pagenate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/dishes/create');
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
            'image' =>'required|image:jpg',
            'category' =>'required',
            'description' =>'required',
            'price' =>'required',

        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= public_path('uploads/dishes/');
        $image->move($path, $featured_new_name);
        $dishes = Dishes::create([
            'name'=> $request->name,
            'image'=>'uploads/dishes/'.$featured_new_name,
            'description'=> $request->description,
            'price'=> $request->price,
            'category'=> $request->category,
  ]);

        Session::flash('success','Post Successfully created!');
        return redirect()->route('dishes.index');
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
        $dishes =  Dishes::find($id);

        return view('/admin/dishes/edit')->with('dishes',$dishes);
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
            'description' =>'required',
            'category' =>'required',
            'price' =>'required',
        ]);
        $dishes =  Dishes::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= public_path('uploads/dishes/');
            $image->move($path, $featured_new_name);
            $dishes-> image= 'uploads/dishes/'.$featured_new_name;
        }
        $dishes-> name = $request ->name;
        $dishes-> description = $request ->description;
        $dishes-> price = $request ->price;
        $dishes->category= $request->category;
        $dishes->save();
        //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('dishes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dishes =  Dishes::find($id);
        $dishes ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
