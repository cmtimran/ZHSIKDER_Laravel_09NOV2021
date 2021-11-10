@extends('admin.index')
@section('Title','fees structure')
@section('breadcrumbs','fees structure')
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
    <h2><i class="fa fa-plus-circle" aria-hidden="true"></i>fees structure</h2> <!-- Tab Heading  -->
  <p title="Transport Details">{{Session::get('school.system_name')}}( {{Session::get('school.school_eiin')}} ) Department Details</p><br/><!-- Transport Details -->

   
    <div class='row'>
     <div class="panel panel-default" >
      <div class="panel-body text-left">
         <ul class='dropdown_test'>
            <li><a href='/manage_class'><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Manage Class</a></li>
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
        <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-bars" aria-hidden="true"></i> fees structure</a></li>

        <li><a data-toggle="tab" href="#menu1"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New fees structure</a></li>
    
      </ul>



  <div class="tab-content"> <!-- Transport List Report  -->

        <div id="home" class="tab-pane fade in active">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                  <h5>fees structure Data table</h5>
                </div>

            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">

                  <thead>
                    <tr>
                      <th>Department</th>
                      <th>Fees Structure</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach($fees_structure as $fees_structure_list)
                  <tr class="gradeX">
                       <td>{{$fees_structure_list->department}}</td>
                       <td>{ !! $fees_structure_list->fees_structure !! }</td>
                       <td id="my_align" class="display_status">
                      
                        {{Form::open(['url'=>"/frontend/fees_structure/$fees_structure_list->id/edit" ,'method'=>'GET'])}}
                          {{Form::submit('Edit',['class'=>'btn btn-primary'])}} 
                        {{Form::close()}}
                     

                        {{Form::open(['url'=>"/frontend/fees_structure/$fees_structure_list->id" ,'method'=>'DELETE'])}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger','onclick'=>"return confirm('Are you sure you want to delete this fees structure?')"])}}
                        {{Form::close()}}
                    
                        

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
           {{Form::open(['url'=>'/frontend/fees_structure','class'=>'form-horizontal','method'=>'post','files'=>true,'name'=>'basic_validate','id'=>'basic_validate','novalidate'=>'novalidate'])}}

            <div class="control-group">
              {{Form::label('department','Department Name',['class'=>'control-label','title'=>'title'])}}
              <div class="controls">
                @php
                  $department_data_array=[''=>'--select--']
                @endphp
                @foreach($department as $department_data_fetch)
                  @php $department_data_array[$department_data_fetch['department_name']]=$department_data_fetch['department_name'] @endphp
                @endforeach

                {{Form::select('department',$department_data_array,null,['class'=>'department','id'=>'department'])}}
              </div>
            </div>

            <div class="control-group">
              {{Form::label('fees_structure','Fees Structure',['class'=>'control-label','title'=>'description'])}}
                <div class="controls">
                {{Form::textarea('fees_structure','',['id'=>'required','placeholder'=>'Fees Structure','title'=>'Fees Structure','class'=>'description'])}}
                </div>
            </div>
            
            
            <div class="form-actions">
                {{Form::submit('submit',['value'=>'Submit','class'=>'btn btn-success'])}}
           
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>
      </div>
  </div>
</div>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        plugins: "table",
        menubar: "table",
    });
</script>
@stop