<?php

namespace App\Http\Controllers;

use App\manage_department_model;
use Illuminate\Http\Request;
use App\WebsiteEventModel;
use Validator;
use Redirect;
use Session;
use File;


class WebsiteEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['event'] = WebsiteEventModel::leftjoin('manage_department','website_event.department','=','manage_department.id')->select('website_event.*','manage_department.id','manage_department.department_name')->get();
//        dd($data['event']);
        $data['department'] = manage_department_model::all()->toArray();
//        dd($data['department']);
        return view('website.backend.add_event',$data);
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
        $data = new WebsiteEventModel;
        $validate = Validator::make($request->all(),$data->validation());
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }else{
            $requested_data = $request->all();

            if ($request->hasfile('image')){
                $file_path = "img/event/";
                $file_name = time() . ".jpg";
                $request->file('image')->move($file_path, $file_name);

                $requested_data['image'] = $file_path.$file_name;
            }

            $data->fill($requested_data)->save();
            Session::flash('success', "Added Successfully");
            return Redirect::back();
        }
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
        $data['event'] = WebsiteEventModel::findOrFail($id);
        return view('website.backend.edit_event',$data);
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
        $data = WebsiteEventModel::findOrFail($id);
        $validate = Validator::make($request->all(),$data->validation());
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }else{
            $requested_data = $request->all();

            if ($request->hasfile('image')){
                if(File::exists($data->image)) {
                    File::delete($data->image);
                }
                $file_path = "img/event/";
                $file_name = time() . ".jpg";
                $request->file('image')->move($file_path, $file_name);

                $requested_data['image'] = $file_path.$file_name;
            }

            $data->fill($requested_data)->save();
            Session::flash('success', "Updated Successfully");
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = WebsiteEventModel::findOrFail($id);
        if(File::exists($data->image)) {
            File::delete($data->image);
        }
        $data->delete();
        Session::flash('success', "Deleted Successfully");
        return Redirect::back();
    }
}
