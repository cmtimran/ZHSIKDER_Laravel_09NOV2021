<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\create_admin_model;
class user_profile extends Controller
{
    public function index()
    {
    	return view('admin.user_profile');
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
           

    
            $request_data=$request->all();
            $request_data=array_except($request_data,'password');
            $request_data=array_add($request_data,'password',bcrypt($request->password));
            create_admin_model::where('id',$id)->first()->fill($request_data)->save();
            return back()->with('success',"This User ( $request->email ) Information Are Updated Successfully");
       


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
    }
}
