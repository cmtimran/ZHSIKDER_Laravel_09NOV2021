<?php

namespace App\Http\Controllers;

use App\manage_department_model;
use Illuminate\Http\Request;
use Session;
use Crypt;
use Validator;
use App\teacher_model;
use App\teacher_address_child;
use App\teacher_qualification_child;
use App\ov_setup_model;
class Staff_info extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       $this->middleware('permission:STAFF_INFORMATION'); 
     }
    public function index()
    {
//        dd(ov_setup_model::where('type','Job Type')->get());
        $medium=ov_setup_model::where('type','Medium')->get();
        $job_type_data=ov_setup_model::where('type','Job Type')->get();
        $work_department_data=ov_setup_model::where('type','Work Department')->get();

        return view('admin.Teacher_Staff.staff_info',['medium'=>$medium,'job_type_data'=>$job_type_data,'work_department_data'=>$work_department_data,'department'=>manage_department_model::groupby('department_name')->get()]);
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
     *        $file_path='img/backend/teacher';
        $file_name=time().'.jpg';
        $request->file('image')->move($file_path,$file_name);
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
        $teacher_model = teacher_model::join('manage_department','teacher.department_id','=','manage_department.id')
            ->where('teacher_id',$id)->first();

       return view ('admin.Teacher_Staff.staff_info_edit',['staff_information'=>$teacher_model,'staff_address_child'=>teacher_address_child::where('parent',$id)->first(),'staff_qualification_child'=>teacher_qualification_child::where('parent',$id)->first(),'job_type_data'=>ov_setup_model::where('type','Job Type')->get(),'work_department_data'=>ov_setup_model::where('type','Work Department')->get(),'medium'=>ov_setup_model::where('type','Medium')->get(),'department'=>manage_department_model::groupby('department_name')->get()]);
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
        ///
    }
}
