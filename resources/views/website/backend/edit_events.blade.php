@extends('admin.index')
@section('Title','Edit Event Information')
@section('breadcrumbs','Create Event > Edit')
@section('breadcrumbs_link','/create_admin')
@section('breadcrumbs_title','Edit Event Information')

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
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;Edit Event</h2> <!-- Tab Heading  -->
            <p title="Transport Details">{{Session::get('school.system_name')}} Event</p> <!-- Transport Details -->




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
                <h5>{{$event[0]->title}} Information Edit</h5>
            </div>

            <div class="widget-content padding">
                {{Form::open(['url'=>"/frontend/event/$event[0]->website_event_id",'class'=>'form-horizontal','method'=>'PUT','files'=>true,'name'=>'basic_validate','id'=>'basic_validate','novalidate'=>'novalidate'])}}


                <div class="control-group">
                    {{Form::label('title','Title',['class'=>'control-label','title'=>'title'])}}
                    <div class="controls">
                        {{Form::text('title',$event[0]->title,['id'=>'required','placeholder'=>'Title','title'=>'title'])}}
                    </div>
                </div>


                <div class="control-group">
                    {{Form::label('description','Description',['class'=>'control-label','title'=>'description'])}}
                    <div class="controls">
                        {{Form::textarea('description',$event[0]->description,['id'=>'required','placeholder'=>'Designation','title'=>'Designation','class'=>'ckeditor'])}}
                    </div>
                </div>

                <div class="control-group">
                    {{Form::label('start_date','Start Date',['class'=>'control-label','title'=>'description'])}}
                    <div class="controls">
                        {{Form::date('start_date',$event[0]->start_date,['id'=>'required','placeholder'=>'Designation','title'=>'Designation'])}}
                    </div>
                </div>


                <div class="control-group">
                    {{Form::label('department','Department Name',['class'=>'control-label','title'=>'title'])}}
                    <div class="controls">
                        @php

                            $department_data_array[$event[0]->id]=$event[0]->department_name;
                        @endphp
                        @foreach($department as $department_data_fetch)
                            @php $department_data_array[$department_data_fetch['id']]=$department_data_fetch['department_name'] @endphp
                        @endforeach

                        {{Form::select('department',$department_data_array,null,['class'=>'department','id'=>'department'])}}
                    </div>
                </div>

                <div class="control-group">
                    {{Form::label('image','',['class'=>'control-label','title'=>'image'])}}

                    <div class="controls">
                        {{Form::image($event[0]->image,'Profile_image',['alt'=>'Your Image','class'=>'img-responsive img-circle blank_applicant_student_image','id'=>'blah','style'=>'width:19%'])}}
                        <br>
                        {{Form::file('image',['onchange'=>'readURL(this)'])}}
                    </div>
                </div>


                <div class="modal-footer">
                    {{Form::submit('Submit',['class'=>'btn btn-success','id'=>'edit_submit_button','style'=>'float:left'])}}
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @push('custom-scripts')
        <script type="text/javascript" src="{{asset('extra_js/create_admin_edit.js')}}"></script>
    @endpush



@stop
