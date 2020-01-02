<?php

namespace App\Http\Controllers;

use App\Abouts;
use App\Banners;
use App\Dishes;
use App\Meals;
use App\News;
use App\Teams;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('/admin/dashboard')
            ->with('meals',Meals::all())
            ->with('news',News::all())
            ->with('dishes',Dishes::all())
            ->with('banners',Banners::all())
            ->with('testimonials',Testimonial::all())
            ->with('teams',Teams::orderBy('created_at','desc')->paginate(5))
            ->with('abouts',Abouts::all());;
    }
    public function dashboard()
    {


        return view('/admin/dashboard')
            ->with('meals',Meals::all())
            ->with('news',News::all())
            ->with('dishes',Dishes::all())
            ->with('banners',Banners::all())
            ->with('testimonials',Testimonial::all())
            ->with('teams',Teams::orderBy('created_at','desc')->paginate(5))
            ->with('abouts',Abouts::all());

    }
    public function about()
    {
        return view('/admin/about/index')->with('abouts', Abouts::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit_about($id)
    {
        $abouts =  Abouts::find($id);

        return view('/admin/about/edit')->with('abouts',$abouts);
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
            'email' =>'required',
            'pnumber' =>'required',
            'about' =>'required',
            'description' =>'required',
            'address' =>'required',
            ]);
        $abouts =  Abouts::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= public_path('uploads/logo/');
            $image->move($path, $featured_new_name);
            $abouts-> image= 'uploads/logo/'.$featured_new_name;
        }

        $abouts-> name = $request ->name;
        $abouts-> email = $request ->email;
        $abouts-> pnumber = $request ->pnumber;
        $abouts-> about = $request ->about;
        $abouts-> address = $request ->address;
        $abouts-> description = $request ->description;
        $abouts->save();
        //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users =  User::find($id);
        $users ->delete();
        Session::flash('info','Successfully deleted!');
        return redirect()->back();
    }
}
