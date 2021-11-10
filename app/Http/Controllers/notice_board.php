<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use Session;
use Validator;
use App\notice_board_model;
use App\stuent_notice_child_model;
use App\teacher_notice_child_model;
use App\class_notice_child_model;
use App\parent_notice_child_model;
use App\teacher_model;
use App\manage_class_model;
use App\parents_info_model;
use App\manage_department_model;
use App\students;
use SoapClient;
use Redirect;
use App\sms_value;
use App\message_settings_model;

class notice_board extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       $this->middleware('permission:NOTICEBOARD');
     }
    public function index()
    {
        return view('admin.notice_board.notice_board',["notice_board_data"=>notice_board_model::all(),"manage_department"=>manage_department_model::all(),'student_notice'=>notice_board_model::where('to','student')->get(),'teacher_notice'=>notice_board_model::where('to','Teacher')->get(),'class_notice'=>notice_board_model::where('to','Class')->get(),'parents_notice'=>notice_board_model::where('to','Parents')->get(),'teacher_data'=>teacher_model::all(),'class_data'=>manage_class_model::all(),'parents_data'=>parents_info_model::all()]);
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

           

      $model_obj=new notice_board_model;
      $validation=Validator::make($request->all(),$model_obj->validation());
            if($validation->fails())
            {
                return back()->withInput()->withErrors($validation);
            }
            else
            {
                  $Data=$request->all();
        $notice_board_model_obj=new notice_board_model;
        $message_settings=message_settings_model::first();
        $sms_data=json_decode($message_settings->info);

        $notice_board_model_obj->fill($Data)->save();


        if($request->to=="Student"):
            if($request->sw_student_roll):
            
                $stuent_notice_child_model_obj=new stuent_notice_child_model();

                $student_roll=$request->sw_student_roll;
                $student_info=students::where('roll',$student_roll)->first();
                $parent_id=$student_info->parent_name;
                $parent_data=parents_info_model::where('parent_id',$parent_id)->first();
                $parent_mobile=$parent_data->phone;
                $count=count($parent_mobile);
    
                
                if($sms_data->option=='active'):
                    $smsobj=new sms_value;
                    $smsobj->sms($count,$parent_mobile,$request);
                endif;
                $stuent_notice_child_model_obj->fill($Data)->save();
            endif;
        elseif($request->to=="Teacher"):
            if($request->tw_teacher_name == "ALL"):
                $stuent_notice_child_model_obj=new teacher_notice_child_model();
                $stuent_notice_child_model_obj->fill($Data)->save();    
            endif;
        elseif($request->to=="Class"):
            $stuent_notice_child_model_obj=new class_notice_child_model();

            $student_parent_info=students::select('parent_name')->where('class',$request->cw_class)->get();
            $parent_mobile=null;
            $count=0;
            foreach ($student_parent_info as $student_parent_list)
            {
                if($student_parent_list->parent_name)
                {
                    $parent_mobile_data=parents_info_model::where('parent_id',$student_parent_list->parent_name)->first();
                    $parent_mobile_no=$parent_mobile_data->phone;
                    $parent_mobile=$parent_mobile.($parent_mobile? "," :"")."$parent_mobile_no";
                }
                $count++;
            }
                if($sms_data->option=='active'):
                    $smsobj=new sms_value;
                    $smsobj->sms($count,$parent_mobile,$request);
                endif;
            
            $stuent_notice_child_model_obj->fill($Data)->save();

        elseif($request->to=="Parents"):
            $stuent_notice_child_model_obj=new parent_notice_child_model();
            $stuent_notice_child_model_obj->fill($Data)->save();

        endif;
         if($request->files)
            {
                  $file_path="img/backend/noticeboard";
                  $file_name=$request->notice_title.'.pdf';
                  $request->file('files')->move($file_path,$file_name);
                
            }
            Session::flash('success',"Successfully Added A New Notice");
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
         if(file_exists("img/backend/noticeboard/$id.pdf"))
        {
          return response()->download("img/backend/noticeboard/$id.pdf");
        }
        else
        {
           Session::flash('Error','File Not Exist');
           return back();
        }
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

          //return view('admin.notice_board.notice_board_edit',['teacher_data'=>teacher_model::all(),'class_data'=>manage_class_model::all(),'parents_data'=>parents_info_model::all(),'notice_data'=>notice_board_model::where('notice_id',$id)->first()]);//,['templet_article_data'=>templet_article_model::where('templet_id',$id)->first()]
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
        //
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        notice_board_model::where('notice_id',$id)->delete();
        parent_notice_child_model::where('notice_id',$id)->delete();
        stuent_notice_child_model::where('notice_id',$id)->delete();
        teacher_notice_child_model::where('notice_id',$id)->delete();
        class_notice_child_model::where('notice_id',$id)->delete();

       Session::flash('success','Notice Deleted Successfully');
       return Redirect::back();
    }
}
