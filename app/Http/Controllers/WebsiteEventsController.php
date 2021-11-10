<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteEventModel;
use App\WebsiteEventsModel;
use App\manage_department_model;
use Validator;
use Redirect;
use Session;
use File;


class WebsiteEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['events'] = WebsiteEventsModel::join('manage_department','website_events.department','=','manage_department.id')->get();
        $data['departments'] = manage_department_model::all();
        return view('website.backend.add_events',$data);
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

        $data = new WebsiteEventsModel;
        $validate = Validator::make($request->all(),$data->validation());
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }else{
            $requested_data = $request->all();
//            dd($requested_data);
            if ($request->hasfile('image')){
                $file_path = "img/events/";
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
//        dd($id);
        $data['event'] = WebsiteEventsModel::join('manage_department','website_events.department','=','manage_department.id')->where('website_events.website_events_id',$id)->get();
//        dd($data['event']);
        $data['department'] = manage_department_model::all()->toArray();

        return view('website.backend.edit_events',$data);
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
