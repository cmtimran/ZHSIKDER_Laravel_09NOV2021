<!--sidebar-menu-->
<div id="sidebar" style="margin-top: 6%;">
  <a href="#" class="visible-phone"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>

  <ul>
    <li ><a href="/"><i class="fa fa-tachometer" aria-hidden="true"></i><span> Dashboard</span></a></li>


  @permission('ROLE MANAGE')
     <li class="submenu"><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i><span>&nbsp;RBAC</span><span class="label label-important">5</span></a>
      <ul>
       @permission('CREATE_ADMIN')
        <li><a href="/create_admin"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Create Admin</a></li>
        @endpermission
        @permission('CREATE_PERMISSION')
        <li><a href="/create_permission"><i class="fa fa-unlock" aria-hidden="true"></i>&nbsp;Create Permission</a></li>
        @endpermission
        @permission('CREATE_ROLE')
        <li><a href="/create_role"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Create Role</a></li>
        @endpermission
        @permission('PERMISSION ROLE')
        <li><a href="/permission_role"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Permission Role</a></li>
        @endpermission
        @permission('USER_ACCESS')
        <li><a href="/user_access"><i class="fa fa-sign-in" aria-hidden="true"></i></i>&nbsp; User Access</a></li>
        @endpermission
      </ul>
    </li>
  @endpermission







@permission('STUDENTS')

    <li class="submenu"><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span> Students</span><span class="label label-important">3</span></a>
          <ul>
            @permission('APPLICANT_STUDENTS')
            <li><a href="/aplicant_student"><i class="fa fa-user-plus" aria-hidden="true"></i> Aplicant Students</a></li>
            @endpermission

            @permission('APPLICANT_STUDNETS REPORT')
            <li><a href="/applicant_student_report"><i class="fa fa-user-plus" aria-hidden="true"></i> Aplicant Students Report</a></li>
            @endpermission

            @permission('ADMISSION_TEST')
            <li><a href="/addmission_test"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Addmission Test</a></li>
            @endpermission

            <li><a href="/admit_student"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Admit Students</a></li>
            <li><a href="/admit_bulk_student"><i class="fa fa-address-card-o" aria-hidden="true"></i>Admit Bulk Students</a></li>
            <li><a href="/student_promoation"><i class="fa fa-line-chart" aria-hidden="true"></i> Students Promotion</a></li>

            <li>
                  <a href="/advance_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Student Details Report
                  </a>
            </li>

          <li>
            <a href="/student_admission_register_report">
              <i class="fa fa-circle" aria-hidden="true"></i> Student Admission Register Report
            </a>
          </li>



        </ul>
    </li>
@endpermission




  <li class="submenu"><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span> Students Information</span><span class="label label-important">3</span></a>
      <ul>
         @php $student_class=DB::table('students')->groupby('class')->get();  @endphp
          @foreach($student_class as $student_class_data)



        <li><a href="/student_information/{{$student_class_data->class}}"><i class="fa fa-info" aria-hidden="true"></i> &nbsp;{{$student_class_data->class}}</a></li>
          @endforeach

      </ul>
   </li>

  @permission('APPRISAL')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-smile-o" aria-hidden="true"></i>
        <span> Apprisal</span>
        <span class="label label-important">3</span>
      </a>
      <ul>
      @permission('STUDENT_APPRISAL')
        <li>
          <a href="/student_apprisal">
            <i class="fa fa-user-o" aria-hidden="true"></i> Apprisal
          </a>
        </li>
       @endpermission
       @permission('STUDENTS_APPRISAL TEMPLETE')
        <li>
          <a href="/student_apprisal_component">
            <i class="fa fa-object-ungroup" aria-hidden="true"></i>Apprisal Templete
          </a>
        </li>
        @endpermission
        @permission('APPRISAL_REPORT')
        <li>
          <a href="/student_apprisal_report">
            <i class="fa fa-list" aria-hidden="true"></i> Apprisal Report
          </a>
        </li>
         @endpermission

        <li>
          <a href="/apprisal_template_report">
            <i class="fa fa-list" aria-hidden="true"></i> Apprisal Template Report
          </a>
        </li>


      </ul>
    </li>
  @endpermission


@permission('TEACHER_AND_STAFF')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span> Teacher And Staff</span>
        <span class="label label-important">3</span>
      </a>
      <ul>
          <li>
            <a href="/total_teacher_report">
              <i class="fa fa-circle" aria-hidden="true"></i> Total Teacher Report
            </a>
          </li>
            <li>
            <a href="/class_wise_teacher">
              <i class="fa fa-circle" aria-hidden="true"></i> Class Wise Teacher Report
            </a>
          </li>
            <li>
            <a href="/reponsible_teacher_report">
              <i class="fa fa-circle" aria-hidden="true"></i> Responsible Teacher Report
            </a>
          </li>
      @permission('TEACHER')
        <li>
          <a href="/teacher_info">
            <i class="fa fa-user-plus" aria-hidden="true"></i> Teacher
          </a>
        </li>
        @endpermission
        @permission('TEACHER REPORT')
        <li>
          <a href="/teacher_info_report">
            <i class="fa fa-list-alt" aria-hidden="true"></i> Teacher's Report
          </a>
        </li>
        @endpermission
        @permission('STAFF_INFORMATION')
        <li>
          <a href="/staff_info">
            <i class="fa fa-male" aria-hidden="true"></i>
            <span>Saff Information</span>
            <span class="label label-important"></span>
          </a>
        </li>
        @endpermission
        @permission('STAFF_REPORT')
        <li>
          <a href="/staff_report">
            <i class="fa fa-list-alt" aria-hidden="true"></i> Staff Report
          </a>
        </li>
        @endpermission
      </ul>
    </li>
@endpermission
@permission('PARENT')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-id-badge" aria-hidden="true"></i>
        <span> Parent</span>
        <span class="label label-important">2</span>
      </a>
      <ul>
      @permission('PARENTS')
        <li>
          <a href="/parents_info">
            <i class="fa fa-address-book" aria-hidden="true"></i> Parents
          </a>
        </li>
        @endpermission

    @permission('PARENTS_REPORT')
        <li>
          <a href="/parentreport">
            <i class="fa fa-address-card-o" aria-hidden="true"></i> Parents Report
          </a>
        </li>
        @endpermission
      </ul>
    </li>
    @endpermission
    @permission('CLASS')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-id-card-o" aria-hidden="true"></i>
        <span> Department & Program</span>
        <span class="label label-important">3</span>
      </a>
      <ul>
      @permission('MANAGE_CLASSES')
        <li>
          <a href="/manage_class">
            <i class="fa fa-book" aria-hidden="true"></i> Manage Programs
          </a>
        </li>
        @endpermission
        @permission('MANAGE_SECTIONS')
        <li>
          <a href="/manage_section">
            <i class="fa fa-bandcamp" aria-hidden="true"></i> Manage Sections
          </a>
        </li>
        @endpermission
        @permission('ACADEMIC_SYLLABUS')
        <li>
          <a href="/academic_syllabus">
            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Academic Syllabus
          </a>
        </li>
        @endpermission
        @permission('MANAGE_DEPARTMENT')
        <li>
          <a href="/manage_department">
            <i class="fa fa-table" aria-hidden="true"></i> Manage Department
          </a>
        </li>
        @endpermission
        @permission('MANAGE_DEPARTMENT')
        <li>
          <a href="/manage_faculty">
            <i class="fa fa-table" aria-hidden="true"></i> Manage Faculty
          </a>
        </li>
        @endpermission
        @permission('MANAGE_DEPARTMENT')
        <li>
          <a href="/manage_tution_fees">
            <i class="fa fa-table" aria-hidden="true"></i> Manage Tution Fees
          </a>
        </li>
        @endpermission
      </ul>
    </li>
    @endpermission
    <!--<li><a href="#"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
<li><a href="#"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>-->
    <li class="submenu">
      <a href="#">
        <i class="fa fa-bookmark" aria-hidden="true"></i>
        <span> Subject</span>
        <span class="label label-important">5</span>
      </a>
      <ul>
        @php
        $class_name=DB::table('manage_class')->get();@endphp
        @foreach($class_name as $class_name_list)
        <li>
          <a href="/manage_subject/{{$class_name_list->class_name}}">
            <i class="fa fa-calendar-o" aria-hidden="true"></i> {{$class_name_list->class_name}}
          </a>
        </li>
        @endforeach

       <li>
          <a href="/component">
            <i class="fa fa-plus-square" aria-hidden="true"></i> Component
          </a>
        </li>

      </ul>
    </li>
    <li class="submenu">
      <a href="#">
        <i class="fa fa-calendar" aria-hidden="true"></i>
        <span> Class Routine</span>
        <span class="label label-important">5</span>
      </a>
      <ul>
        @php
        $class_name=DB::table('manage_class')->get();@endphp
        @foreach($class_name as $class_name_list)
        <li>
          <a href="/manage_class_routine/{{$class_name_list->class_name}}">
            <i class="fa fa-calendar-o" aria-hidden="true"></i> {{$class_name_list->class_name}}
          </a>
        </li>
        @endforeach
      </ul>
    </li>
    @permission('DAILY_ATTENDENCE')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-area-chart" aria-hidden="true"></i>
        <span> Daily Attendence</span>
        <span class="label label-important">5</span>
      </a>
      <ul>
       @permission('DAILY_ATTENDENCE')
        <li>
          <a href="/daily_attendance">
            <i class="fa fa-hand-paper-o" aria-hidden="true"></i> Daily Attendence
          </a>
        </li>
        @endpermission
        @permission('ATTENDENCE_REPORT')
        <li>
          <a href="/daily_attendance_report">
            <i class="fa fa-file-text-o" aria-hidden="true"></i> Attendence Report
          </a>
        </li>
        @endpermission

         <li>
                  <a href="/all_student_attendance_report">
                      <i class="fa fa-circle" aria-hidden="true"></i>All Student Attendance Report
                  </a>
          </li>
          <li>
                  <a href="/single_student_attendance_report">
                      <i class="fa fa-circle" aria-hidden="true"></i>Single Student Attendance Report
                  </a>
          </li>

          <li>
            <a href="/daily_attendance/create">
              <i class="fa fa-circle" aria-hidden="true"></i>Overall Attendance Report
            </a>
          </li>


      </ul>
    </li>
    @endpermission

@permission('EXAM')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <span> Exam</span>
        <span class="label label-important">4</span>
      </a>
      <ul>
       @permission('EXAM_LIST')
        <li>
          <a href="/exam_list">
            <i class="fa fa-list" aria-hidden="true"></i> Exam List
          </a>
        </li>
        @endpermission
        @permission('EXAM_GRADE')
        <li>
          <a href="/exam_grade">
            <i class="fa fa-university" aria-hidden="true"></i> Exam Grade
          </a>
        </li>
        @endpermission
        @permission('MANAGE_MARKS')
        <li>
          <a href="/manage_marks">
            <i class="fa fa-building-o" aria-hidden="true"></i> Manage Marks
          </a>
        </li>
        <li>
          <a href="/manage_marks/create">
            <i class="fa fa-building-o" aria-hidden="true"></i> Manage Marks Report
          </a>
        </li>
        @endpermission

        <li>
          <a href="/subject_wise_publish_marks">
            <i class="fa fa-building-o" aria-hidden="true"></i> Subject Wise Publish Marks
          </a>
        </li>
          <li>
          <a href="/pass_fail_report">
            <i class="fa fa-building-o" aria-hidden="true"></i> Pass Fail Report
          </a>
        </li>
        <li>
           <a href="/result_report">
               <i class="fa fa-circle" aria-hidden="true"></i> Mark Sheet Report
            </a>
        </li>
        <li>
          <a href="/check_marks">
            <i class="fa fa-building-o" aria-hidden="true"></i> Check Marks
          </a>
        </li>


        <li>
          <a href="/marks_publish">
            <i class="fa fa-building-o" aria-hidden="true"></i> Publish Marks
          </a>
        </li>


        <!-- <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Send Marks By Sms</a></li> -->
        @permission('TABULATION_SHEET')
        <li>
          <a href="/tabulation_sheet">
            <i class="fa fa-file-o" aria-hidden="true"></i> Tabulation Sheet
          </a>
        </li>
        @endpermission
        @permission('QUESTION_PAPER')
        <li>
          <a href="/question_paper">
            <i class="fa fa-file-text" aria-hidden="true"></i> Question Paper
          </a>
        </li>
        @endpermission

        <li>
                  <a href="/result_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Result Report
                  </a>
        </li>


      </ul>
    </li>
    @endpermission
    @permission('PAYROLL')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-money" aria-hidden="true"></i>
        <span> Payroll</span>
        <span class="label label-important">4</span>
      </a>
      <ul>
      @permission('SALARY_SLIP')
        <li>
          <a href="/salary_slip">
            <i class="fa fa-list" aria-hidden="true"></i>Salary Slip
          </a>
        </li>
      @endpermission
         <li>
          <a href="/salary_slip_report">
            <i class="fa fa-list" aria-hidden="true"></i>Salary Slip Report
          </a>
        </li>

       @permission('SALARY_STRUCTURE')
        <li>
          <a href="/salary_structure">
            <i class="fa fa-university" aria-hidden="true"></i>Salary Structure
          </a>
        </li>
       @endpermission
        <li>
          <a href="/salary_structure_report">
            <i class="fa fa-university" aria-hidden="true"></i>Salary Structure Report
          </a>
        </li>
        @permission('SLARY_COMPONENTS')
        <li>
          <a href="/salary_component">
            <i class="fa fa-university" aria-hidden="true"></i>Salary Components
          </a>
        </li>
        @endpermission

         <li>
          <a href="/total_earning_report">
            <i class="fa fa-university" aria-hidden="true"></i>Total Earning Report
          </a>
        </li>


      </ul>
    </li>
 @endpermission
  @permission('ACCOUNTING')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-briefcase" aria-hidden="true"></i>
        <span> Accounting</span>
        <span class="label label-important">4</span>
      </a>
      <ul>


        <li>
          <a href="/subsidiary_configuration">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span> Subsidiary Configuration</span>
          </a>
        </li>

        <li>
          <a href="/student_payment">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Student Payment</span>
          </a>
        </li>

        <li>
          <a href="/student_transaction_status">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Student Transaction Status</span>
          </a>
        </li>

        <li>
          <a href="/payment_report">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Payment Report</span>
          </a>
        </li>

<!-- 
        <li>
          <a href="/payment_receipt">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Payment Receipt</span>
          </a>
        </li> -->

      @permission('ACCOUNTANT')
        <li>
          <a href="/accountant">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span> Accountant</span>
          </a>
        </li>
        @endpermission
        @permission('CHART_OF_ACCOUNT')
        <li>
          <a href="/chart_of_account">
            <i class="fa fa-pie-chart" aria-hidden="true"></i> &nbsp;Chart Of Account
          </a>
        </li>
        @endpermission

        <li>
          <a href="/create_template">
            <i class="fa fa-pie-chart" aria-hidden="true"></i> &nbsp;Payment Templete
          </a>
        </li>
        @permission('INVOICE')
        <li>
          <a href="/student_payment_entry">
            <i class="fa fa-window-maximize" aria-hidden="true"></i> &nbsp; Invoice
          </a>
        </li>

        <li>
          <a href="/invoice">
            <i class="fa fa-money" aria-hidden="true"></i> &nbsp;Invoice Report
          </a>
        </li>
     @endpermission

        <li>
          <a href="/invoice_component">
            <i class="fa fa-money" aria-hidden="true"></i> &nbsp;Invoice Component
          </a>
        </li>
       @permission('EXPENSE')
{{--        <li>--}}
{{--          <a href="/expense">--}}
{{--            <i class="fa fa-etsy" aria-hidden="true"></i> Journal Entry--}}
{{--          </a>--}}
{{--        </li>--}}
        @endpermission
          <li>
                  <a href="/student_all_payment">
                      <i class="fa fa-circle" aria-hidden="true"></i> Student All Payment Report
                  </a>
          </li>

          <li>
            <a href="/ledger_report">
              <i class="fa fa-circle" aria-hidden="true"></i> Ledger Report
            </a>
          </li>

           <li>
            <a href="/asset_revenue">
              <i class="fa fa-circle" aria-hidden="true"></i> Asset Revenue Report
            </a>
          </li>
          <li>
              <a href="/financial_ledger_repport">
                  <i class="fa fa-circle" aria-hidden="true"></i>Financial Ledger Report
              </a>
          </li>

        <li>
          <a href="/fees_collection_report">
            <i class="fa fa-circle" aria-hidden="true"></i>Fees Collection Report
          </a>
        </li>

           <li>
            <a href="/due_fees">
              <i class="fa fa-circle" aria-hidden="true"></i> Due Fees Report
            </a>
          </li>


      </ul>
    </li>
    @endpermission
    <li class="submenu">
      <a href="#">
        <i class="fa fa-book" aria-hidden="true"></i>
        <span> Libray</span>
        <span class="label label-important">3</span>
      </a>
      <ul>
        <!-- <li><a href="/manage_book"><i class="fa fa-book" aria-hidden="true"></i> Manage Book</a></li> -->
        <li>
          <a href="/templet_article">
            <i class="fa fa-th-large" aria-hidden="true"></i> Book Accession
          </a>
        </li>
        <li>
          <a href="/stock_article">
            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><i class="fa fa-book" aria-hidden="true"></i> Stock Books
          </a>
        </li>
        <li>
          <a href="/article">
            <i class="fa fa-book" aria-hidden="true"></i><i class="fa fa-pencil" aria-hidden="true"></i> Manage Books
          </a>
        </li>
        <li>
          <a href="/membership">
            <i class="fa fa-user-plus" aria-hidden="true"></i> Membership
          </a>
        </li>
        <li>
          <a href="/article_issue">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Book Issue
          </a>
        </li>
        <li>
          <a href="/article_recive">
            <i class="fa fa-recycle" aria-hidden="true"></i> Book Recived
          </a>
        </li>

         <li>
                  <a href="/book_list_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Book List Report
                  </a>
         </li>



        <li>
          <a href="/library_bill_generator">
            <i class="fa fa-recycle" aria-hidden="true"></i>Library Invoice Generate
          </a>
        </li>

          <li>
          <a href="/library_bill_generator/create">
            <i class="fa fa-recycle" aria-hidden="true"></i>Library Invoice Report
          </a>
        </li>

       



      </ul>
    </li>
    @permission('TRANSPORT')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-id-card-o" aria-hidden="true"></i>
        <span> Transport</span>
        <span class="label label-important">3</span>
      </a>
      <ul>
       @permission('ROUTE')
         <li>
          <a href="/route">
           <i class="fa fa-road" aria-hidden="true"></i> Route
          </a>
        </li>
        @endpermission
       @permission('MANAGE_TRANSPORT')
        <li>
          <a href="/manage_transport">
            <i class="fa fa-bus" aria-hidden="true"></i> Manage Transport
          </a>
        </li>
        @endpermission
       @permission('ASSIGN_TRANSPORT')
        <li>
          <a href="/assign_transport">
            <i class="fa fa-bus" aria-hidden="true"></i> Assign Transport
          </a>
        </li>
        @endpermission

          <li>
          <a href="/transport_bill_generator">
            <i class="fa fa-recycle" aria-hidden="true"></i>Transport Invoice Generate
          </a>
        </li>

        <li>
          <a href="/transport_bill_generator/create">
            <i class="fa fa-recycle" aria-hidden="true"></i>Transport Invoice Report
          </a>
        </li>

        

      </ul>
    </li>
    @endpermission


   @permission('DORMITORY')
    <li class="submenu">
      <a href="#">
        <i class="fa fa-id-card-o" aria-hidden="true"></i>
        <span> Dormitory</span>
        <span class="label label-important">3</span>
      </a>
      <ul>
      @permission('MANAGE_DORMITORY')
        <li>
          <a href="/dormitory">
            <i class="fa fa-life-ring" aria-hidden="true"></i> Manage Dormitory
          </a>
        </li>
        @endpermission
       @permission('ASSIGN_DORMITORY')
        <li>
          <a href="/assign_dormitory">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Assign Dormitory
          </a>
        </li>
        @endpermission

        <li>
          <a href="/dormitory_bill_generator">
            <i class="fa fa-recycle" aria-hidden="true"></i>Dormitory Invoice Generate
          </a>
        </li>
         <li>
          <a href="/dormitory_bill_generator/create">
            <i class="fa fa-recycle" aria-hidden="true"></i>Dormitory Invoice Report
          </a>
        </li>

        <li>
                  <a href="/dormitory_student_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Dormitory Student Report
                  </a>
        </li>



      </ul>
    </li>
    @endpermission

    <li class="submenu">
      <a href="#">
        <i class="fa fa-id-card-o" aria-hidden="true"></i>
        <span> Canteen</span>
        <span class="label label-important">3</span>
      </a>
      <ul>
        <li>
          <a href="/canteen_component">
            <i class="fa fa-life-ring" aria-hidden="true"></i> Component
          </a>
        </li>

        <li>
          <a href="/assign_canteen">
            <i class="fa fa-life-ring" aria-hidden="true"></i> Assign To Canteen
          </a>
        </li>

         <li>
          <a href="/roster/create">
            <i class="fa fa-life-ring" aria-hidden="true"></i> Roster Configuration
          </a>
        </li>

        <li>
          <a href="/roster">
            <i class="fa fa-life-ring" aria-hidden="true"></i> Roster
          </a>
        </li>

        <li>
          <a href="/monthly_roster_closing">
            <i class="fa fa-life-ring" aria-hidden="true"></i>Monthly  Roster Closing
          </a>
        </li>
    


      </ul>
    </li>
  @permission('NOTICEBOARD')
    <li>
      <a href="/notice_board">
        <i class="fa fa-window-maximize" aria-hidden="true"></i>
        <span> Noticeboard</span>
      </a>
    </li>
@endpermission
@permission('MESSAGES')
    <li>
      <a href="/message_settings">
        <i class="fa fa-comments" aria-hidden="true"></i>
        <span> Messages Settings </span>
      </a>
    </li>
    @endpermission
 @permission('SETTINGS')
    <li class="submenu">
      <a href="#">
        <i class="icon icon-info-sign"></i>
        <span> Settings</span>
        <span class="label label-important">3</span>
      </a>
      <ul>
        <li>
          <a href="/general_settings">
            <i class="fa fa-circle" aria-hidden="true"></i> General Settings
          </a>
        </li>
          <li>
          <a href="/setup">
            <i class="fa fa-circle" aria-hidden="true"></i> All Setup
          </a>
        </li>

        <li>
          <a href="/report_settings">
            <i class="fa fa-circle" aria-hidden="true"></i> Report Settings
          </a>
        </li>

         <li>
          <a href="/report_settings/create">
            <i class="fa fa-circle" aria-hidden="true"></i> Report Settings View
          </a>
        </li>


      </ul>
    </li>
    @endpermission
      <li>
          <a href="/live_class">
              <i class="fa fa-comments" aria-hidden="true"></i>
              <span> Live Class</span>
          </a>
      </li>
    <li class="submenu">
          <a href="#">
              <i class="icon icon-info-sign"></i>
              <span> Report</span>
              <span class="label label-important">3</span>
          </a>
          <ul>


              <li>
                  <a href="/result_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Result Report
                  </a>
              </li>

              <li>
                  <a href="/marks_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Students Marks Report
                  </a>
              </li>



              <li>
                  <a href="/all_student_attendance_report">
                      <i class="fa fa-circle" aria-hidden="true"></i>All Student Attendance Report
                  </a>
              </li>

              <li>
                  <a href="/single_student_attendance_report">
                      <i class="fa fa-circle" aria-hidden="true"></i>Single Student Attendance Report
                  </a>
              </li>

              <li>
                <a href="/daily_attendance/create">
                  <i class="fa fa-circle" aria-hidden="true"></i>Overall Attendance Report
                </a>
              </li>

              <li>
                  <a href="/advance_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Student Details Report
                  </a>
              </li>

              <li>
                  <a href="/student_admission_register_report">
                    <i class="fa fa-circle" aria-hidden="true"></i> Student Admission Register Report
                  </a>
              </li>

               <li>
                  <a href="/student_all_payment">
                      <i class="fa fa-circle" aria-hidden="true"></i> Student All Payment Report
                  </a>
               </li>

                <li>
                  <a href="/fees_collection_report">
                    <i class="fa fa-circle" aria-hidden="true"></i>Fees Collection Report
                  </a>
                </li>


              <li>
                <a href="/due_fees">
                  <i class="fa fa-circle" aria-hidden="true"></i> Due Fees Report
                </a>
              </li>


                <li>
                  <a href="/ledger_report">
                    <i class="fa fa-circle" aria-hidden="true"></i> Ledger Report
                  </a>
                </li>

                <li>
                  <a href="/asset_revenue">
                    <i class="fa fa-circle" aria-hidden="true"></i> Asset Revenue Report
                  </a>
               </li>


            
              <li>
                  <a href="/dormitory_student_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Dormitory Student Report
                  </a>
              </li>


             <li>
                  <a href="/book_list_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Book List Report
                  </a>
              </li>
              
          </ul>
    </li>

      <li class="submenu">
          <a href="#">
              <i class="icon icon-info-sign"></i>
              <span> Department Setup</span>
              <span class="label label-important">3</span>
          </a>
          <ul>


              <li>
                  <a href="/former_head_add">
                      <i class="fa fa-circle" aria-hidden="true"></i> former Head
                  </a>
              </li>

              <li>
                  <a href="/activitis_add">
                      <i class="fa fa-circle" aria-hidden="true"></i> Activities
                  </a>
              </li>



              <li>
                  <a href="/schollership_add">
                      <i class="fa fa-circle" aria-hidden="true"></i>Schollership
                  </a>
              </li>

              <li>
                  <a href="/single_student_attendance_report">
                      <i class="fa fa-circle" aria-hidden="true"></i>Single Student Attendance Report
                  </a>
              </li>

              <li>
                  <a href="/daily_attendance/create">
                      <i class="fa fa-circle" aria-hidden="true"></i>Overall Attendance Report
                  </a>
              </li>

              <li>
                  <a href="/advance_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Student Details Report
                  </a>
              </li>

              <li>
                  <a href="/student_admission_register_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Student Admission Register Report
                  </a>
              </li>

              <li>
                  <a href="/student_all_payment">
                      <i class="fa fa-circle" aria-hidden="true"></i> Student All Payment Report
                  </a>
              </li>

              <li>
                  <a href="/fees_collection_report">
                      <i class="fa fa-circle" aria-hidden="true"></i>Fees Collection Report
                  </a>
              </li>


              <li>
                  <a href="/due_fees">
                      <i class="fa fa-circle" aria-hidden="true"></i> Due Fees Report
                  </a>
              </li>


              <li>
                  <a href="/ledger_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Ledger Report
                  </a>
              </li>

              <li>
                  <a href="/asset_revenue">
                      <i class="fa fa-circle" aria-hidden="true"></i> Asset Revenue Report
                  </a>
              </li>



              <li>
                  <a href="/dormitory_student_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Dormitory Student Report
                  </a>
              </li>


              <li>
                  <a href="/book_list_report">
                      <i class="fa fa-circle" aria-hidden="true"></i> Book List Report
                  </a>
              </li>

          </ul>
      </li>

    <li class="submenu">
          <a href="#">
              <i class="icon icon-info-sign"></i>
              <span>Website</span>
              <span class="label label-important">3</span>
          </a>
          <ul>
              <li>
                  <a href="/frontend/website_setup">
                      <i class="fa fa-circle" aria-hidden="true"></i> 
                      Website Setup
                  </a>
              </li>

              <li>
                  <a href="/frontend/our_management">
                      <i class="fa fa-circle" aria-hidden="true"></i> 
                      Our Management
                  </a>
              </li>

              <li>
                  <a href="/frontend/bot_backend">
                      <i class="fa fa-circle" aria-hidden="true"></i>
                      BOT
                  </a>
              </li>

{{--              <li>--}}
{{--                  <a href="/frontend/faculties">--}}
{{--                      <i class="fa fa-circle" aria-hidden="true"></i> --}}
{{--                      Faculties--}}
{{--                  </a>--}}
{{--              </li>--}}

              <li>
                  <a href="/frontend/slider">
                      <i class="fa fa-circle" aria-hidden="true"></i> 
                      Slider
                  </a>
              </li>

              <li>
                  <a href="/frontend/event">
                      <i class="fa fa-circle" aria-hidden="true"></i> 
                      Gallery
                  </a>
              </li>

              <li>
                  <a href="/frontend/events">
                      <i class="fa fa-circle" aria-hidden="true"></i>
                      Events
                  </a>
              </li>

              <li>
                  <a href="/frontend/news">
                      <i class="fa fa-circle" aria-hidden="true"></i>
                      News
                  </a>
              </li>

              <li>
                  <a href="/frontend/department_page_setup">
                      <i class="fa fa-circle" aria-hidden="true"></i>
                      Department Page Setup
                  </a>
              </li>

{{--              <li>--}}
{{--                  <a href="/frontend/course_category">--}}
{{--                      <i class="fa fa-circle" aria-hidden="true"></i> --}}
{{--                      Course Category--}}
{{--                  </a>--}}
{{--              </li>--}}

{{--              <li>--}}
{{--                  <a href="/frontend/create_course">--}}
{{--                      <i class="fa fa-circle" aria-hidden="true"></i> --}}
{{--                      Course--}}
{{--                  </a>--}}
{{--              </li>--}}

{{--              <li>--}}
{{--                  <a href="/frontend/course/registration">--}}
{{--                      <i class="fa fa-circle" aria-hidden="true"></i> --}}
{{--                      Course Student List--}}
{{--                  </a>--}}
{{--              </li>--}}

              <li>
                  <a href="/frontend/fees_structure">
                      <i class="fa fa-circle" aria-hidden="true"></i> 
                      Department wise Fees structure
                  </a>
              </li>

              <li>
                  <a href="/frontend/contact">
                      <i class="fa fa-circle" aria-hidden="true"></i> 
                      Contact
                  </a>
              </li>
          </ul>
    </li>

  </ul>
</div>
<!--sidebar-menu-->
