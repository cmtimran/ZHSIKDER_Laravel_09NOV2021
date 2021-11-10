@extends('admin.index')
@section('Title','Applicant Student Report')
@section('breadcrumbs','Applicant Student Report')
@section('breadcrumbs_link','/applicant_student_report')
@section('breadcrumbs_title','Applicant Student Report')

@section('content')






    <div class="container">
          <h2><i class="fa fa-list-alt" aria-hidden="true"></i> &nbspApplicant Student Report</h2> <!-- Tab Heading  -->
         <p title="Transport Details">{{ Session::get('school.system_name') }}  Applicant Report</p> <!-- Transport Details -->

     <div class="panel panel-default text-left" style='margin-top: 3%;'>
      <div class="panel-body">
         <ul class='dropdown_test'>
            <li><a href='/aplicant_student'><i class="fa fa-list-alt" aria-hidden="true"></i> &nbsp;Applicant Student</a></li>
            <li><a href='/admit_student'><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Admit Student</a></li>
            <li><a href='/student_promoation'><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Student Promoation </a></li>

        </ul>
      </div>
    </div>

    <div class="controls text-right">
                <div data-toggle="buttons-checkbox" class="btn-group">
                  <button  class="btn btn-default" title='Export PDF' type="button"><a target="_blank" href="/applicant_student_pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></button>
                  <button class="btn btn-default" title='Export Excel' type="button"><a  href="/applicant_student_excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></a></button>
                  <button class="btn btn-default" title='Preview' ttype="button"><a target="_blank" href="/applicant_student_pdf"><i class="fa fa-street-view" aria-hidden="true"></i></a></button>
                  
                  <button id='print' class="btn btn-default" title='Print' type="button"><i class="fa fa-print" aria-hidden="true"></i></button>
                </div>
        </div>


        <div class="tab-content"> <!-- Transport List Report  -->

                <div id="home" class="tab-pane fade in active">
                      <div class="widget-box">
                          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Applicant Student Data table</h5>
                          </div>

                  <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">

                          <thead>
                            <tr>
                            <th>SL NO</th>
                              <th>Applicant ID</th>
                              <th>Student Name</th>
                              <th>Parent Name</th>
                              <th>Session</th>
                              <th>Class</th>
                              <th>Shift</th>
                              <th>Medium</th>
                              <th>Department</th>
                              <th>Gender</th>
                              <th>Phone</th>
                              <th>Status</th>
                             <!--  <th>Email</th> -->
                              <th>Actions</th>
                            </tr>
                          </thead>


                          <tbody>
                          @php $i=1; @endphp
                          @foreach($applicant_student as $applicant_student_data)
                            <tr class="gradeX">
                              <td>@php echo $i; $i++; @endphp</td>
                              <td>{{$applicant_student_data->applicant_id}}</td>
                              <td>{{$applicant_student_data->student_name}}</td>
                              <td>{{$applicant_student_data->parent_name}}</td>
                              <td>{{$applicant_student_data->session}}</td>
                              <td>{{$applicant_student_data->class}}</td>
                              <td>{{$applicant_student_data->shift}}</td>
                              <td>{{$applicant_student_data->medium}}</td>
                              <td>{{$applicant_student_data->department}}</td>

                              <td>{{$applicant_student_data->gender}}</td>
                              <td>{{$applicant_student_data->phone}}</td>
                               <td>{{$applicant_student_data->status}}</td>
                              <td id="my_align" class="display_status">

      {{Form::button("Admit Card",['class'=>'btn btn-default dropdown_test Admin_card','id'=>'Admin_card','data-toggle'=>'modal','data-target'=>'#myModal','value'=>$applicant_student_data->applicant_id,'aplicant_id'=>"$applicant_student_data->applicant_id"])}}

                                {{Form::open(['url'=>"/aplicant_student/$applicant_student_data->applicant_id/edit" ,'method'=>'GET'])}}
                                    {{Form::submit('Edit',['class'=>'btn btn-primary'])}}
                                {{Form::close()}}


                        {{Form::button('Delete',['class'=>'btn btn-danger applicant_student_delete','value'=>$applicant_student_data->applicant_id,])}}

                              </td>
                            </tr>

                            @endforeach

                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>


<style type="text/css">

  @font-face { font-family: Barcode; font-weight: bold; src: url('font-awesome/barcode/BarcodeFont.ttf');}

</style>





      <div class="modal fade" id="myModal" style="width: 50%; height: 70%;
    margin-left: -25%;" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                  <h4 class="modal-title"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;Admit Card</h4>
                </div>

               <div id='print_div'><span id='markshet'></span></div>

              <div class="text-center"><input type="button" value="print" onclick="printDiv()" id="print_admit_card" class="btn btn-primary" name=""></div>
            </div>
          </div>
      </div>
<script>

</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @push('custom-scripts')
        <script type="text/javascript" src="{{asset('extra_js/applicant_student_report.js')}}"></script>
    @endpush
@stop
