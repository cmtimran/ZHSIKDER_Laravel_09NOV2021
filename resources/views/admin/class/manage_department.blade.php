@extends('admin.index')
@section('Title','Manage Department')
@section('breadcrumbs','Manage Department')
@section('breadcrumbs_link','/manage_department')
@section('breadcrumbs_title','Manage Department')

@section('content')


@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade in">
                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ Session::get('success') }}
    </div>
   
@endif


@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade in">
                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error!</strong> {{ Session::get('error') }}
    </div>
   
@endif


@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade in">
        <ul  style='list-style:none'>
            @foreach ($errors->all() as $error)
                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif






<div class="container">
    <h2><i class="fa fa-plus-circle" aria-hidden="true"></i> Manage Department</h2> <!-- Tab Heading  -->
  <p title="Transport Details">{{Session::get('school.system_name')}}( {{Session::get('school.school_eiin')}} ) Department Details</p><br/><!-- Transport Details -->

   
    <div class='row'>
     <div class="panel panel-default" >
      <div class="panel-body text-left">
         <ul class='dropdown_test'>
            <li><a href='/manage_class'><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Manage Program</a></li>
            <li><a href='/manage_section'><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;Manage Section</a></li>
            <li><a href='/academic_syllabus'><i class="fa fa-window-restore" aria-hidden="true"></i>&nbsp;Academic Syllabus</a></li>
         </ul>
      </div>
    </div>



  <div class="controls text-right">
            <div data-toggle="buttons-checkbox" class="btn-group">
              <button  class="btn btn-default" title='Export PDF' type="button"><a target="_blank" href="/manage_department_pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></button>
              <button class="btn btn-default" title='Export Excel' type="button"><a  href="/manage_department_excle"><i class="fa fa-file-excel-o" aria-hidden="true"></i></a></button>
              <button class="btn btn-default" title='Preview' ttype="button"><a target="_blank" href="/manage_department_pdf"><i class="fa fa-street-view" aria-hidden="true"></i></a></button>
             
              <button id='print' class="btn btn-default" title='Print' type="button"><i class="fa fa-print" aria-hidden="true"></i></button>
            </div>
    </div>
</div>

      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-bars" aria-hidden="true"></i> Department</a></li>
        @permission('INSERT')
        <li><a data-toggle="tab" href="#menu1"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Department</a></li>
        @endpermission
      </ul>



  <div class="tab-content"> <!-- Transport List Report  -->

        <div id="home" class="tab-pane fade in active">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                  <h5>Department Data table</h5>
                </div>

            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">

                  <thead>
                    <tr>
{{--                    <th>Class Name</th>--}}
                      <th>Deparmtent Name </th>
                      <th>Deparmtent Code </th>
                      <th>Faculty</th>
                      <th>medium</th>

                      <th>Description</th>
                      <th>Created At</th>
                      <th>Update At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach($department as $department_list)
                  <tr class="gradeX">
{{--                       <td>{{$department_list->class_name}}</td>--}}
                       <td>{{$department_list->department_name}}</td>
                       <td>{{$department_list->department_code}}</td>
                       <td>{{$department_list->faculty_name}}</td>
                       <td>{{$department_list->medium}}</td>
                       <td>{{$department_list->description}}</td>
                       <td>{{$department_list->created_at}}</td>
                       <td>{{$department_list->updated_at}}</td>
                       <td id="my_align" class="display_status">
                        @permission('EDIT')
                        {{Form::open(['url'=>"/manage_department/$department_list->id/edit" ,'method'=>'GET'])}}
                          {{Form::submit('Edit',['class'=>'btn btn-primary'])}} 
                        {{Form::close()}}
                      @endpermission

                        @permission('DELETE')
                           {{Form::open(['url'=>"/manage_department/$department_list->id/destroy" ,'method'=>'GET'])}}
                         {{Form::submit('Delete',['class'=>'btn btn-danger class_delete'])}}
                           {{Form::close()}}
                        @endpermission
                        

                      </td>
                  </tr>
                  @endforeach

                </table>
              </div>
          </div>
      </div>



      <div id="menu1" class="tab-pane fade">
        <div>
          <div class="widget-box">
            <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Department</h5>
            </div>
        
          <div class="widget-content nopadding">
           {{Form::open(['url'=>'/manage_department','class'=>'form-horizontal','method'=>'post','files'=>true,'name'=>'basic_validate','id'=>'basic_validate','novalidate'=>'novalidate'])}}
            
            <div class="control-group">
              {{Form::label('Department Name','',['class'=>'control-label'])}}
              <div class="controls">
              {{Form::text('department_name','',['title'=>'department_name'])}}
              </div>
            </div>

            <div class="control-group">
              {{Form::label('Department Code','',['class'=>'control-label'])}}
              <div class="controls">
              {{Form::text('department_code','',['title'=>'department_code'])}}
              </div>
            </div>

              <div class="control-group">
                  {{Form::label('faculty_name','Faculty',['class'=>'control-label'])}}
                  <div class="controls">
                      @php
                          $faculty_array=[''=>'--select--']
                      @endphp
                      @foreach($faculty as $faculty_data)
                          @php
                              $faculty_array[$faculty_data->faculty_id]=$faculty_data->faculty_name
                          @endphp
                      @endforeach
                      {{Form::select('faculty_name',$faculty_array,null,['class'=>'faculty','id'=>'faculty'])}}
                  </div>
              </div>


            {{--<div class="control-group">
              {{Form::label('Class Name','',['class'=>'control-label','title'=>'class_name'])}}
              <div class="controls">
              @foreach($class_list as $class_list_data)
                @php $class_list_array[$class_list_data->class_name]=$class_list_data->class_name @endphp
              @endforeach
              {{Form::select('class_name',$class_list_array)}}
              </div>
            </div>--}}

            <div class="control-group">
          {{Form::label('medium','medium',['class'=>'control-label'])}}
          <div class="controls">
            @php 
              $medium_array=[''=>'--select--']
            @endphp
            @foreach($medium as $medium_data)
              @php
                $medium_array[$medium_data->id]=$medium_data->type_name
              @endphp
            @endforeach
            {{Form::select('medium',$medium_array,null,['class'=>'medium','id'=>'medium'])}}
          </div>
        </div>



            <div class="control-group">
              {{Form::label('Description','',['class'=>'control-label','title'=>'description'])}}
              <div class="controls">
              {{ Form::textarea('description', null,['style'=>'width:60%']) }}
              </div>
            </div>


              <div class="control-group">
                  {{Form::label('image','',['class'=>'control-label','title'=>'image'])}}

                  <div class="controls">
                      {{Form::image('img/blankavatar.png','Profile_image',['alt'=>'Your Image','class'=>'img-responsive img-circle blank_applicant_student_image','id'=>'blah','style'=>'width:19%'])}}
                      <br>
                      {{Form::file('image',['onchange'=>'readURL(this)'])}}
                  </div>
              </div>

           
            
            
            
            <div class="form-actions">
             @permission('INSERT')
                {{Form::submit('submit',['value'=>'Submit','class'=>'btn btn-success'])}}
             @endpermission
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>
      </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@push('custom-scripts')
    <script type="text/javascript" src="{{asset('extra_js/manage_department.js')}}"></script>
@endpush
@stop