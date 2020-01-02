<?php

namespace App\Http\Controllers;
use Session;
use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
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
    public function index_testimonial()
    {
        return view('/admin/testimonial/index')->with('testimonials', Testimonial::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_tstimonial()
    {
        return view('/admin/testimonial/create');

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
        return redirect()->route('testimonial.index');
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
    public function edit_testmonial($id)
    {
        $testimonials =  Testimonial::find($id);

        return view('/admin/testimonial/edit')->with('testimonials',$testimonials);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_testimonial(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required',
            'position' =>'required',
            'description' =>'required',
            'price' =>'required',
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
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_testimonial($id)
    {
        $testimonials =  Testimonial::find($id);
        $testimonials ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
