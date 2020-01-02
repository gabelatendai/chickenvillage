<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespondController extends Controller
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
        $pagenate = Faqs::orderBy('created_at','desc')->paginate(5);
        return view ('/admin/faqs/index',['faqs'=>$pagenate]);

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
    public function store(Request $request)
    {
        $this->validate( $request, [


            'faq' =>'required',
        ]);


        $faq = Faqs::create([
            'faq'=> $request->faq,
        ]);

        Session::flash('success',' Successfully Added!');
        return redirect()->route('faqs.index');
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


    public function destroy($id)
    {
        $faq =  Faqs::find($id);
        $faq ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
