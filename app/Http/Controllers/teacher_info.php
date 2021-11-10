<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use File;
use Crypt;
use Validator;
use App\teacher_model;
use App\teacher_address_child;
use App\teacher_qualification_child;
use App\ov_setup_model;
use App\create_admin_model;
use App\manage_department_model;
use App\manage_subject_model;
use App\manage_faculty_model;
use App\User;
class teacher_info extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
     {
       $this->middleware('permission:TEACHER');
     }
    public function index()
    {
       return view ('admin.Teacher_Staff.teacher_info',['job_type_data'=>ov_setup_model::where('type','Job Type')->get(),'work_department_data'=>ov_setup_model::where('type','Work Department')->get(),'medium'=>ov_setup_model::where('type','Medium')->get(),'faculty'=>manage_faculty_model::get(),'department'=>manage_department_model::groupby('department_name')->get(),'subject'=>manage_subject_model::groupby('subject_name')->get()]);
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
      
        $admin=new create_admin_model;
        $duplicate_user_check=$admin::where('email',$request->email)->first();
        if(!$duplicate_user_check)
        {
            $teacher=new teacher_model;
            $prev_emp=$teacher->where('employment_id',$request->employment_id)->first();
            $validation=Validator::make($request->all(),$teacher->validation());
            if($validation->fails())
            {
               return back()->withInput()->withErrors($validation);
            }
            else if(!empty($prev_emp))
            {
                Session::flash('error','Employment Id Already Exists');
                return back()->withInput();
            }
            else
            {
                $data=$request->all();
                $data=array_add($data,'teacher_id',time());
                $data=array_add($data,'parent',time());

                if($request->email and $request->password and $request->status=="Teacher")
                {
                //Create Admin Part with user id Link Start
                    $admin->name=$request->teacher_name;
                    $admin->email=$request->email;
                    $admin->password=bcrypt($request->password);
                    $admin->status='Active';
                    $admin->user_type='Software User';
                    $admin->save();

                    $max_user_id=User::max('id');
                    $data=array_set($data,'user_id',$max_user_id+1);
                //Create Admin Part End
                }
                else
                {


                    $data=array_set($data,'user_id',null);
                }






                //Teacher Image Upload
                if($request->hasfile('image')){
                    $file_path='img/backend/teacher_staff';
                    $file_name=time().'.jpg';
                    $request->file('image')->move($file_path,$file_name);
                }
                //Teacher  Image Upload

                //File Save Code
                $teacher->fill($data)->save();
                //File Save Code


                //Teacher Address Child Add
                    $teacher_address_child=new  teacher_address_child;
                    $teacher_address_child->fill($data)->save();

                //Teacher Address Child Add

                //Teacher Qualification Child Add

                    $teacher_qualification_child=new teacher_qualification_child;
                    $teacher_qualification_child->fill($data)->save();

                //Teacher Qualification Child Add





                Session::flash('success',"($request->teacher_name) Information Add Succesfully");
                return back();
            }
        }
        else
        {
            Session::flash('wrong',"Duplicate Email Are Not Allowed");
            return back()->withInput();
        }
      // dd($request->all());

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
        return view('admin.Teacher_Staff.teacher_info_edit',['teacher'=>teacher_model::where('teacher_id',$id)->first(),'teacher_address_child'=>teacher_address_child::where('parent',$id)->first(),'teacher_qualification_child'=>teacher_qualification_child::where('parent',$id)->first(),'job_type_data'=>ov_setup_model::where('type','Job Type')->get(),'work_department_data'=>ov_setup_model::where('type','Work Department')->get(),'medium'=>ov_setup_model::where('type','Medium')->get(),'department'=>manage_department_model::groupby('department_name')->get(),'subject'=>manage_subject_model::groupby('subject_name')->get()]);
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

        $teacher=new teacher_model;
     
        $validation=Validator::make($request->all(),$teacher->validation_edit());
        if($validation->fails())
        {
           return back()->withInput()->withErrors($validation);
        }
        else
        {
            
            $teacher=$request->all();
            // dd($teacher);
            // $teacher=array_except($teacher,'password');
            // $teacher=array_add($teacher,'password',bcrypt($request->password));

            if($request->file('image'))
            {
                $file_path='img/backend/teacher_staff';
                $file_name=$id.'.jpg';
                $request->file('image')->move($file_path,$file_name);
            }

            teacher_model::where('teacher_id',$id)->first()->fill($teacher)->save();
            teacher_address_child::where('parent',$id)->first()->fill($teacher)->save();
            teacher_qualification_child::where('parent',$id)->first()->fill($teacher)->save();

            session()->flash('success', "($request->teacher_name) Update Operation Are  Succesfully Completed");
            return back()->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *                 $FCI_NEWS_FILE_NAME=FCI_NEWS_NOTICE::where('sk',$request->SK)->first();
					   $FILE_PATH_WITH_NAME_with_cover="image/admin/NEWS_NOTICE/$FCI_NEWS_FILE_NAME->cover_file";
					   File::delete($FILE_PATH_WITH_NAME_with_cover);
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=teacher_model::where('teacher_id',$id)->delete();
        $image_path="img/backend/teacher_staff/$id.jpg";
        file::delete($image_path);
        teacher_address_child::where('parent',$id)->delete();
        teacher_qualification_child::where('parent',$id)->delete();

       session()->flash('success', "Delete Operation Succesfully Completed");
       return back()->with('success',"Delete Operation Succesfully Completed");
    }
    public function type_wise_subject(Request $request)
    {
       $department_data=manage_department_model::groupBy('department_name')->get();
       $subject_data=manage_subject_model::groupBy('subject_name')->get();
        echo "<option value=''>--Select--</option>";

        if($request->type_data=='Tech')
        {
          foreach($department_data as $department_data_fetch)
           {
            echo "<option>$department_data_fetch->department_name</option>";
           }
         }
         else
         {
          foreach($subject_data as $subject_data_fetch)
           {
            echo "<option>$subject_data_fetch->subject_name</option>";
           }
         }
    }
}
