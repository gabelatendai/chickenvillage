<?php

namespace App\Http\Controllers;
use App\Abouts;
use App\Banners;
use App\Dishes;
use App\Meals;
use App\News;
use Session;
use App\Teams;
use Illuminate\Http\Request;
use App\Testimonial;

class MealsController extends Controller
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
        $pagenate = Meals::orderBy('created_at','desc')->paginate(5);
        return view ('/admin/meals/index',['meals'=>$pagenate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/meals/create');

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
            'meal' =>'required',
            'food_name' =>'required',
            'image' =>'required|image:jpg',

            'description' =>'required',
            'price' =>'required',

        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= public_path('uploads/');
        $image->move($path, $featured_new_name);
        $meal = Meals::create([
            'food_name'=> $request->food_name,
            'meal'=> $request->meal,
            'image'=>'uploads/'.$featured_new_name,
            'description'=> $request->description,
            'price'=> $request->price,


        ]);

        Session::flash('success','Post Successfully created!');
        return redirect()->route('meals.index');
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
        $meals =  Meals::find($id);

        return view('/admin/meals/edit')->with('meals',$meals);
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
            'food_name' =>'required',
            'meal' =>'required',
            'description' =>'required',
            'price' =>'required',
        ]);
        $meals =  Meals::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= public_path('uploads/');
            $image->move($path, $featured_new_name);
            $meals-> image= 'uploads/'.$featured_new_name;
        }
        $meals-> food_name = $request ->food_name;
        $meals-> meal = $request ->meal;
        $meals-> description = $request ->description;
        $meals-> price = $request ->price;

        $meals->save();
      //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('meals.index');
    }
    public function test_store(Request $request)
    {
        $this->validate( $request, [
            'name' =>'required',
            'position' =>'required',
            'image' =>'required|image:jpg',
            'description' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= public_path('uploads/testimonials/');
        $image->move($path, $featured_new_name);
        $testimonials = Testimonial::create([
            'name'=> $request->name,
            'position'=> $request->position,
            'image'=>'uploads/testimonials/'.$featured_new_name,
            'description'=> $request->description,
        ]);

        Session::flash('success',' Successfully created!');
        return redirect()->route('/testimonial.index');
    }
    public function edit_testmonial($id)
    {
        $testimonials =  Testimonial::find($id);

        return view('/admin/testimonial/edit')->with('testimonials',$testimonials);
    }
    public function update_testimonial(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required',
            'position' =>'required',
            'description' =>'required',

        ]);
        $testimonials =  Testimonial::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= public_path('uploads/testimonials/');
            $image->move($path, $featured_new_name);
            $testimonials-> image= 'uploads/testimonials/'.$featured_new_name;
        }
        $testimonials-> name = $request ->name;
        $testimonials-> position = $request ->position;
        $testimonials-> description = $request ->description;
        $testimonials->save();
        Session::flash('success',' Updated successfully!');
        return redirect()->route('/testimonial.index');
    }
    public function destroy_testimonial($id)
    {
        $testimonials =  Testimonial::find($id);
        $testimonials ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
    public function create_testimonial()
    {
        return view('/admin/testimonial/create');

    }
    public function index_testimonial()
    {
        return view('/admin/testimonial/index')->with('testimonials', Testimonial::all());

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meal =  Meals::find($id);
        $meal ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
