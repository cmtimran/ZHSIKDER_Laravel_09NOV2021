@extends('admin.index')
@section('Title','Edit Fees Structure Information')
@section('breadcrumbs','Create Fees Structure > Edit')
@section('breadcrumbs_link','/create_admin')
@section('breadcrumbs_title','Edit Fees Structure Information')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade in">
                <a href="" class="close" slider-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ Session::get('success') }}
    </div>
   
@endif

@if (Session::has('error'))
    <div class="alert alert-success alert-dismissible fade in">
                <a href="" class="close" slider-dismiss="alert" aria-label="close">&times;</a>
                <strong>Wrong!</strong> {{Session::get('error')}}
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

<div class="widget-content nopadding">
  <div class="container">
      <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;Edit Fees Structure</h2> <!-- Tab Heading  -->
      <p title="Transport Details">{{Session::get('school.system_name')}} Fees Structure</p> <!-- Transport Details -->
		  



  <div class="controls text-right">
            <div slider-toggle="buttons-checkbox" class="btn-group">
              <button  class="btn btn-default" title='Export PDF' type="button"><a target="_blank" href="/create_admin_pdf_report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></button>
              <button class="btn btn-default" title='Export Excel' type="button"><a  href="/create_admin_Excel_report"><i class="fa fa-file-excel-o" aria-hidden="true"></i></a></button>
              <button class="btn btn-default" title='Preview' ttype="button"><a target="_blank" href="/create_admin_pdf_report"><i class="fa fa-street-view" aria-hidden="true"></i></a></button>

              <button  class="btn btn-default" title='Print' type="button"><a href="#" id='print'><i class="fa fa-print" aria-hidden="true"></i></a></button>
            </div>
    </div>
</div>








        <div class="widget-box">
            <div class="widget-title">
              <span class="icon"> <i class="icon-info-sign"></i></span>
              <h5>{{$fees_structure->title}} Information Edit</h5>
            </div>

          <div class="widget-content padding">
              {{Form::open(['url'=>"/frontend/fees_structure/$fees_structure->id",'class'=>'form-horizontal','method'=>'PUT','files'=>true,'name'=>'basic_validate','id'=>'basic_validate','novalidate'=>'novalidate'])}}
				          
            <div class="control-group">
              {{Form::label('department','Department Name',['class'=>'control-label','title'=>'title'])}}
              <div class="controls">

                <select name="department">
                  @foreach($department as $department_data_fetch)
                  <option @if($department_data_fetch['department_name'] == $fees_structure->department) selected="selected" @endif value="{{$department_data_fetch['department_name']}}">{{$department_data_fetch['department_name']}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="control-group">
              {{Form::label('fees_structure','Fees Structure',['class'=>'control-label','title'=>'description'])}}
                <div class="controls">
                {{Form::textarea('fees_structure',$fees_structure->fees_structure,['id'=>'required','placeholder'=>'Fees Structure','title'=>'Fees Structure','class'=>'description'])}}
                </div>
            </div>
        
              <div class="modal-footer">
                 {{Form::submit('Submit',['class'=>'btn btn-success','id'=>'edit_submit_button','style'=>'float:left'])}}  
              </div>
      		{{Form::close()}}
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
