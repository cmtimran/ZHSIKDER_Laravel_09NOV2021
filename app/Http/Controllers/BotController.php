<?php

namespace App\Http\Controllers;

use App\botModel;
use App\WebsiteManagementModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use Session;
use File;
use Mail;
use DB;

class BotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['bot'] = botModel::all();
        return view('website.backend.bot_add', $data);
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

        $data = new botModel;
        $validate = Validator::make($request->all(), $data->validation());
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        } else {

            $requested_data = $request->all();

            if ($request->hasfile('image')) {
                $file_path = "img/backend/bot/";
                $file_name = time() . ".jpg";
                $request->file('image')->move($file_path, $file_name);

                $requested_data['image'] = $file_path . $file_name;
            }

            $data->fill($requested_data)->save();
            Session::flash('success', "Added Successfully");
            return Redirect::back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bot  $bot
     * @return \Illuminate\Http\Response
     */
    public function show(bot $bot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bot  $bot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['bot'] = botModel::findOrFail($id);

        return view('website.backend.bot_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bot  $bot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = botModel::findOrFail($id);
        $validate = Validator::make($request->all(), $data->validation());
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        } else {
            $requested_data = $request->all();

            if ($request->hasfile('image')) {
                if (File::exists($data->image)) {
                    File::delete($data->image);
                }
                $file_path = "img//backend/bot/";
                $file_name = time() . ".jpg";
                $request->file('image')->move($file_path, $file_name);

                $requested_data['image'] = $file_path . $file_name;
            }

            $data->fill($requested_data)->save();
            Session::flash('success', "Added Successfully");
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bot  $bot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = botModel::findOrFail($id);
        if (File::exists($data->image)) {
            File::delete($data->image);
        }
        $data->delete();
        Session::flash('success', "Deleted Successfully");
        return Redirect::back();
    }
}
