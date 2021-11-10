<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// Route::get('test',function(){
//  return "Working";
// })->middleware('can:INSERT');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    return "Cache is cleared";
});

Route::get('/student_data/{token}/{encrypt_email}/{encrypt_password}', 'api_controller@student_data');


Route::get('/teacher_data/{token}/{encrypt_email}/{encrypt_password}', 'api_controller@teacher_data');


Route::get('/staff_data/{token}/{encrypt_email}/{encrypt_password}', 'api_controller@staff_data');

Route::get('/notice_data/{token}/{encrypt_email}/{encrypt_password}', 'api_controller@notice_data');


Route::get('/subject_data/{token}/{encrypt_email}/{encrypt_password}', 'api_controller@subject_data');


Route::get('/library_data/{token}/{encrypt_email}/{encrypt_password}', 'api_controller@library_data');

Route::resource('/user_profile', 'user_profile');
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/teacher', 'Auth\LoginController@showTeacherLoginForm');
Route::get('/student', 'Auth\LoginController@showStudentLoginForm');
Route::get('/parent', 'Auth\LoginController@showParentLoginForm');
// Route::get('/','Auth\LoginController@showLoginForm');

Route::get('/', function () {
    return redirect('/frontend');
});

Route::post('/auth_check', 'Auth\LoginController@user_check');

Route::resource('/book_list', 'book_list');
Route::get('/Student_dashboard', 'Student_dashboard@index');
Route::resource('/student_account', 'student_account');
Route::resource('/student_dashboard_exam', 'student_dashboard_exam');
Route::resource('/student_dashboard_hostel', 'student_dashboard_hostel');
Route::resource('/student_dashboard_payment', 'student_dashboard_payment');
Route::resource('/student_dashboard_class_routine', 'student_dashboard_class_routine');
Route::resource('/student_dashboard_transport', 'student_dashboard_transport');
Route::resource('/student_dashboard_library', 'student_dashboard_library');
Route::resource('/student_dashboard_syllabus', 'student_dashboard_syllabus');
Route::resource('/student_dashboard_teacher', 'student_dashboard_teacher');
Route::resource('/student_dashboard_subject', 'student_dashboard_subject');

Route::resource('/student_live_class', 'student_live_class');
Route::get('/open_live_class/{id}', 'student_live_class@openLive');
Route::get('/zoom_signature/{meeting_number}', 'student_live_class@ZoomSignature');
Route::resource('/student_financial_ledger_report', 'StudentFinancialLedgerReportController');

Route::get('/syllabus_download/{id}', 'student_dashboard_syllabus@syllabus_download');
Route::resource('/library_bill_generator', 'library_invoice_controller');
Route::resource('/transport_bill_generator', 'transport_invoice_controller');
Route::resource('/dormitory_bill_generator', 'dormitory_bill_generator');
Route::post('/library_payment_entry_for_student_data', 'library_invoice_controller@library_payment_entry_for_student_data');
Route::post('/transport_payment_entry_for_student_data', 'transport_invoice_controller@transport_payment_entry_for_student_data');
Route::post('/dormitory_payment_entry_for_student_data', 'dormitory_bill_generator@dormitory_payment_entry_for_student_data');

Route::resource('/student_all_payment', 'student_all_payment_controller');


Route::post('/due_fees_report_data', 'due_fees_controller@due_fees_report_data');

Route::resource('/total_earning_report', 'total_earning_report_controller');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/marks_report', 'StudentMarksReportControlller');
    Route::resource('/subject_wise_publish_marks', 'SubjectWisePublishMarks');

    Route::post('/publish_marks_get', 'SubjectWisePublishMarks@publish_marks_get');

    Route::group(['middleware' => ['permission:CANTEEN']], function () {
        Route::resource('/canteen_component', 'canteen_component_controller');
        Route::resource('/assign_canteen', 'assign_canteen_controller');
        Route::resource('/roster', 'roster_controller');
        Route::post('/roster_data', 'roster_controller@roster_data');
        Route::post('/roster_inserting', 'roster_controller@roster_inserting');
        Route::resource('/monthly_roster_closing', 'monthly_roster_closing');
        Route::post('/monthly_roster_closing_data_show', 'monthly_roster_closing@monthly_roster_closing_data_show');

        Route::post('/monthly_roster_closing_single_invoice', 'monthly_roster_closing@monthly_roster_closing_single_invoice');
    });

    Route::resource('/student_payment', 'student_payment_controller');
    Route::post('/student_data_for_invoice', 'student_payment_controller@student_data_for_invoice');

    Route::resource('/student_transaction_status', 'student_transaction_status_controller');
    Route::post('/view_transaction', 'student_transaction_status_controller@view_transaction');


    Route::resource('/payment_report', 'payment_report_controller');
    Route::post('/payment_report_student', 'payment_report_controller@payment_report_student');


    Route::resource('/report_settings', 'report_settings_controller');

    //complete start
    Route::group(['middleware' => ['permission:ROLE MANAGE']], function () {
        Route::resource('/create_admin', 'Create_admin');
        Route::resource('/create_admin', 'Create_admin');
        Route::resource('/report', 'report');
        Route::resource('/create_permission', 'Create_permission');
        Route::resource('/create_role', 'Create_role');
        Route::resource('/permission_role', 'Permission_role');
        Route::put('/extra_operation/{delete_id}', 'Extra_operation@delete_role_current_role');
        Route::resource('/user_access', 'User_access');
        Route::resource('/create_admin_Excel_report', 'ischool_report@create_admin_Excel_report');
        Route::resource('/create_admin_pdf_report', 'ischool_report@create_admin_pdf_report');
        Route::resource('/create_role_pdf_report', 'ischool_report@create_role_pdf_report');
        Route::resource('/create_role_Excel_report', 'ischool_report@create_role_Excel_report');
        Route::resource('/role_based_permission_pdf_report', 'ischool_report@role_based_permission_pdf_report');
        Route::resource('/role_permission_excel', 'ischool_report@role_permission_excel');
        Route::resource('/user_access_export', 'ischool_report@user_access_export');
        Route::resource('/user_access_export_excel', 'ischool_report@user_access_export_excel');
        Route::resource('/create_admin_report', 'ischool_report@create_admin_report');
    });


    Route::group(['middleware' => ['permission:STUDENTS']], function () {
        Route::resource('/online-admission', 'Aplicant_student');
        Route::resource('/aplicant_student', 'Aplicant_student');
        Route::post('/remove_ex_edu_data', 'Aplicant_student@remove_ex_edu_data');
        Route::get('/applicant_student_report', 'ischool_report@applicant_student_report');
        Route::post('/applicant_student_admit_card', 'ischool_report@applicant_student_admit_card');
        Route::resource('/addmission_test', 'addmission_test');
        Route::post('/check_reg_no_ex', 'addmission_test@check_reg_no_ex');
    });

    Route::group(['middleware' => ['permission:APPRISAL']], function () {
        Route::resource('/student_apprisal', 'student_apprisal');
    });


    Route::group(['middleware' => ['permission:APPRISAL']], function () {
        Route::resource('/student_apprisal_component', 'student_apprisal_component');
        Route::resource('/student_apprisal', 'student_apprisal');
        Route::get('/student_apprisal_pdf', 'student_apprisal@pdf');
        Route::get('/student_apprisal_excel', 'student_apprisal@excel');
        Route::get('/student_apprisal_edit/{id}', 'student_apprisal@student_apprisal_edit');
    });

    Route::group(['middleware' => ['permission:TEACHER_AND_STAFF']], function () {
        Route::resource('/teacher_info', 'teacher_info');
        Route::get('/teacher_info_report', 'ischool_report@teacher_info_report');
        Route::post('/teacher_sort_update', 'ischool_report@teacher_sort_update');
        Route::resource('/staff_info', 'Staff_info');
        Route::resource('/staff_info', 'staff_info');
        Route::resource('/staff_report_pdf', 'ischool_report@staff_report_pdf');
        Route::resource('/staff_report_excle', 'ischool_report@staff_report_excle');
        Route::resource('/teacher_report_pdf', 'ischool_report@teacher_report_pdf');
        Route::resource('/teacher_report_excle', 'ischool_report@teacher_report_excle');
    });

    Route::group(['middleware' => ['permission:PARENT']], function () {
        Route::resource('/parents_info', 'Parents_info');
        Route::resource('/parents_info_child', 'parents_info_child');
        Route::get('/parentreport', 'ischool_report@parentreport');
    });

    Route::group(['middleware' => ['permission:CLASS']], function () {
        Route::resource('/manage_class', 'Manage_class');
        Route::resource('/manage_section', 'Manage_section');
        Route::resource('/academic_syllabus', 'Academic_syllabus');
        Route::get('/academic_syllabus_download/{id}/{subject}', 'ischool_report@academic_syllabus_download');
        Route::resource('/manage_subject', 'Manage_subject');

        Route::resource('/manage_class', 'manage_class');
        Route::resource('/manage_section', 'manage_section');
        Route::resource('/academic_syllabus', 'academic_syllabus');
        Route::resource('/manage_department', 'Manage_department');
        Route::resource('/manage_faculty', 'Manage_facultyController');
        Route::resource('/manage_tution_fees', 'Manage_tution_feesController');

    });
    Route::POST('/searchcourse', 'WebsiteController@searchcourse');
    Route::group(['middleware' => ['permission:DAILY_ATTENDENCE']], function () {
        Route::resource('/daily_attendance', 'daily_attendance');
        Route::get('/daily_attendance_report', 'ischool_report@daily_attendance_report');
        Route::post('/show_attendance_data', 'daily_attendance@show_attendance_data');
        Route::post('/report_of_attendance', 'daily_attendance@report_of_attendance');
        Route::post('/attendance_student', 'daily_attendance@show_student_data');
        Route::post('/department_wise_subject', 'daily_attendance@department_wise_subject');
        Route::resource('/daily_attendance_pdf', 'ischool_report@daily_attendance_pdf');
    });

    Route::group(['middleware' => ['permission:EXAM']], function () {
        Route::resource('/exam_list', 'Exam_list');
        Route::resource('/exam_grade', 'exam_grade');
        Route::resource('/manage_marks', 'manage_marks');
        Route::post('/manage_marks_edit', 'manage_marks@manage_marks_edit');
        Route::resource('/check_marks', 'check_marks');
        Route::post('/update_mark', 'check_marks@update_mark');
        Route::post('/check_marks_delete/{id}', 'check_marks@check_marks_delete');
        Route::get('/tabulation_sheet', 'ischool_report@tabulation_sheet');
        Route::post('/tabulation_data_get', 'ischool_report@tabulation_data_get');
        Route::post('/check_marks_edit', 'check_marks@show_tabulize_data');
        Route::resource('/marks_publish', 'marks_publish');
        Route::resource('/question_paper', 'question_paper');
        Route::resource('/pass_fail_report', 'PassFailReportController');
        Route::get('/question_paper_download/{file_name}/{file_ext}', 'question_paper@download');
    });


    Route::group(['middleware' => ['permission:PAYROLL']], function () {
        Route::resource('/salary_slip', 'salary_slip');
        Route::get('/salary_slip_print/{id}', 'salary_slip@salary_slip_print');
        Route::resource('/salary_slip_report', 'salary_slip_report');
        Route::post('/salary_slip_teacher_name', 'salary_slip@teacher_name_get');
        Route::post('/salary_slip_details', 'salary_slip@salary_slip_details');
        Route::get('/salary_structure_report', 'salary_slip@salary_structure_report');
        Route::get('/salary_structure_edit/{id}', 'salary_slip@salary_structure_edit');
        Route::put('/salary_structure_update/{id}', 'salary_slip@salary_structure_update');
        Route::get('/salary_structure_delete/{id}', 'salary_slip@salary_structure_delete');
        Route::get('/print_salary_slip', 'salary_slip@print_salary_slip');
        Route::resource('/salary_component', 'salary_component');
        Route::resource('/salary_structure', 'salary_structure');
        Route::resource('/salary_slip', 'salary_slip');
        Route::resource('/salary_slip_report_pdf', 'ischool_report@salary_slip_report_pdf');
        Route::resource('/salary_slip_report_excle', 'ischool_report@salary_slip_report_excle');
        Route::get('/salary_structure_teacher_name', 'ischool_report@salary_structure_teacher_name');
    });


    Route::group(['middleware' => ['permission:ACCOUNTING']], function () {

        Route::resource('/subsidiary_configuration', 'subsidiary_configuration');
        Route::resource('/payment_receipt', 'payment_receipt');
        Route::post('/get_payment_receipt', 'payment_receipt@get_payment_receipt');
        Route::post('/get_payment_receipt_second', 'payment_receipt@get_payment_receipt_second');
        Route::post('/get_payment', 'payment_receipt@get_payment');
        Route::resource('/accountant', 'accountant');
        Route::resource('/chart_of_account', 'chart_of_account');
        Route::resource('/create_template', 'create_template');
        Route::resource('/student_payment_entry', 'student_payment_entry');
        Route::post('/student_payment_entry_for_student_data', 'student_payment_entry@student_info');
        Route::post('/class_wise_department_invoice', 'student_payment_entry@class_wise_department_invoice');
        Route::post('/class_wise_department_live_class', 'LiveClassController@class_wise_department');
        Route::post('/student_templete_desgin', 'student_payment_entry@templete_desgin');
        Route::resource('/invoice', 'invoice');
        Route::get('/invoice_print/{id}', 'invoice@invoice_print');
        Route::resource('/invoice_component', 'invoice_component');
        Route::get('/payment_history', 'ischool_report@payment_history');
        Route::resource('/invoice_componnet', 'invoice_componnet');

        Route::resource('/chart_of_account_pdf', 'ischool_report@chart_of_account_pdf');
        Route::resource('/chart_of_account_excel', 'ischool_report@chart_of_account_excel');

        Route::resource('/payment_template_pdf', 'ischool_report@payment_template_pdf');
        Route::resource('/payment_template_excel', 'ischool_report@payment_template_excel');
    });

    Route::group(['middleware' => ['permission:TRANSPORT']], function () {
        Route::resource('/route', 'route');
        Route::resource('/manage_transport', 'manage_transport');
        Route::resource('/assign_transport', 'assign_transport');
    });

    Route::group(['middleware' => ['permission:DORMITORY']], function () {
        Route::resource('/dormitory', 'dormitory');
        Route::resource('/assign_dormitory', 'assign_dormitory');
        Route::resource('/assign_dormitory_pdf', 'ischool_report@assign_dormitory_pdf');
        Route::resource('/assign_dormitory_excle', 'ischool_report@assign_dormitory_excle');
    });

    Route::group(['middleware' => ['permission:NOTICEBOARD']], function () {
        Route::resource('/notice_board', 'notice_board');
    });

    Route::group(['middleware' => ['permission:NOTICEBOARD']], function () {
        Route::resource('/former_head_add', 'former_headController');
    });

    Route::group(['middleware' => ['permission:NOTICEBOARD']], function () {
        Route::resource('/activitis_add', 'activitisController');
    });

    Route::group(['middleware' => ['permission:NOTICEBOARD']], function () {
        Route::resource('/schollership_add', 'schollershipController');
    });

    Route::group(['middleware' => ['permission:MESSAGES']], function () {
        Route::resource('/message_settings', 'message_settings');
    });

    Route::group(['middleware' => ['permission:SETTINGS']], function () {
        Route::resource('/general_settings', 'general_settings');
        Route::resource('/sms_settings', 'sms_settings');
        Route::resource('/language_settings', 'language_settings');
        Route::resource('/setup', 'setup');
    });


/// complete

    Route::resource('/manage_subject', 'manage_subject');
    Route::get('/applicant_student_admit_card', 'ischool_report@applicant_student_admit_card');
    Route::get('/student_information_data{student_id}', 'ischool_report@student_print');
    Route::post('/article_filter_data', 'ischool_report@article_filter_data');

    Route::resource('/component', 'component');

    Route::resource('/addmission_test', 'addmission_test');
    Route::post('/admission_test_student', 'ischool_report@admission_test_student');

// exam

    Route::post('/department_wise_subject_get', 'ischool_report@department_wise_subject_get');
    Route::post('/class_w_subject_filter', 'ischool_report@class_w_subject_filter');
    Route::post('/class_data_check', 'ischool_report@class_data_check');
    Route::post('/route_wise_data', 'ischool_report@route_wise_data');
    Route::post('/transport_wise_data', 'ischool_report@transport_wise_data');
    //    Route::post('/student_information_filter','ischool_report@student_information_filter');

    Route::resource('/admit_student', 'Admit_student');
    Route::post('/roll_number_generate', 'Admit_student@roll_number_generate');
    Route::post('/admit_bulk_student_autoname_genrate', 'admit_bulk_student@admit_student_roll_name_genarate');
    Route::resource('/student_promoation', 'student_promoation');
    Route::post('/promotable_class', 'student_promoation@promotable_class');

    //complete end

    Route::resource('/manage_book', 'manage_book');
    Route::resource('/admit_bulk_student', 'admit_bulk_student');
    Route::resource('/student_information', 'student_information');
    Route::post('/remove_ex_student_edu_data', 'student_information@remove_ex_student_edu_data');
    Route::resource('/manage_class_routine', 'manage_class_routine');
    Route::resource('/expense', 'expense');

    Route::resource('/ex_student_information', 'student_information@ex_student_information');
    Route::resource('/article', 'article');
    Route::resource('/stock_article', 'stock_article');
    Route::resource('/templet_article', 'templet_article');
    Route::post('/check_isbn_no', 'templet_article@check_isbn_no');
    Route::resource('/membership', 'membership');
    Route::resource('/article_issue', 'article_issue');
    Route::resource('/article_recive', 'article_recive');

    //extra
    // Excel and Pdf View and Download Report
    //complete start
    Route::get('student_admission_register_report', 'StudentAdmissionRegister@index');
    Route::post('student_admission_register_report', 'StudentAdmissionRegister@store');
    Route::resource('/advance_report', 'AdvanceReport');
    Route::resource('/due_fees', 'due_fees_controller');
    Route::resource('/ledger_report', 'LedgerReport');
    Route::post('/get_ledger_report', 'LedgerReport@get_ledger_report');
    Route::post('/advance_report_department', 'AdvanceReport@advance_report_department');
    Route::post('/advance_report_section', 'AdvanceReport@advance_report_section');
    Route::get('/advance_report_pdf', 'AdvanceReport@advance_report_pdf');

    Route::resource('/component_pdf', 'ischool_report@component_pdf');
    Route::resource('/component_excel', 'ischool_report@component_excel');

    Route::resource('/expense_pdf', 'ischool_report@expense_pdf');
    Route::resource('/expense_excel', 'ischool_report@expense_excel');

    Route::resource('/invoice_pdf', 'ischool_report@invoice_pdf');
    Route::resource('/invoice_excel', 'ischool_report@invoice_excel');
    Route::resource('/invoice_component_pdf', 'ischool_report@invoice_component_pdf');
    Route::resource('/invoice_component_excel', 'ischool_report@invoice_component_excel');

    Route::resource('/accountant_pdf', 'ischool_report@accountant_pdf');
    Route::resource('/accountant_excle', 'ischool_report@accountant_excle');

    Route::resource('/route_pdf', 'ischool_report@route_pdf');
    Route::resource('/route_excle', 'ischool_report@route_excle');
    Route::resource('/manage_transport_excle', 'ischool_report@manage_transport_excle');
    Route::resource('/manage_transport_pdf', 'ischool_report@manage_transport_pdf');
    Route::resource('/assign_transport_pdf', 'ischool_report@assign_transport_pdf');
    Route::resource('/assign_transport_excle', 'ischool_report@assign_transport_excle');

    Route::resource('/manage_dormitory_pdf', 'ischool_report@manage_dormitory_pdf');
    Route::resource('/manage_dormitory_excle', 'ischool_report@manage_dormitory_excle');

    Route::resource('/manage_department_pdf', 'ischool_report@manage_department_pdf');
    Route::resource('/manage_department_excle', 'ischool_report@manage_department_excle');

    Route::resource('/academic_syllabus_pdf', 'ischool_report@academic_syllabus_pdf');
    Route::resource('/academic_syllabus_excle', 'ischool_report@academic_syllabus_excle');

    Route::resource('/manage_section_pdf', 'ischool_report@manage_section_pdf');
    Route::resource('/manage_section_excle', 'ischool_report@manage_section_excle');

    Route::resource('/article_recive_pdf', 'ischool_report@article_recive_pdf');
    Route::resource('/article_recive_excle', 'ischool_report@article_recive_excle');

    Route::get('/parents_report_pdf', 'ischool_report@parents_report_pdf');
    Route::get('/parents_report_excel', 'ischool_report@parents_report_excel');

    Route::get('/manage_class_pdf', 'ischool_report@manage_class_pdf');
    Route::get('/manage_class_excel', 'ischool_report@manage_class_excel');
    Route::get('/applicant_student_pdf', 'ischool_report@applicant_student_pdf');
    Route::get('/applicant_student_excel', 'ischool_report@applicant_student_excel');
    Route::post('/manage_marks_for_student', 'manage_marks@mange_mark_student');
    Route::post('/manage_marks_edit_for_student', 'manage_marks@manage_marks_edit_for_student');
    Route::post('/manage_marks_for_student_find_component', 'manage_marks@manage_marks_for_student_find_component');
    Route::post('/edit_marks_for_student_find_component', 'manage_marks@edit_marks_for_student_find_component');

    Route::post('/manage_mark_for_student_show', 'manage_marks@manage_mark_for_student_show');
    Route::get('/student_print/{student_id}', 'ischool_report@student_print');
    Route::post('/grade_and_cgp_find', 'manage_marks@grade_and_cgp_find');

    //complete end
    // Route::post('/admin_current_password','ajax_call@Admin_current_password'); wrong for ajax_call
    Route::resource('/templete_article_pdf', 'ischool_report@templete_article_pdf');
    Route::resource('/templete_article_excle', 'ischool_report@templete_article_excle');
    Route::resource('/article_pdf', 'ischool_report@article_pdf');
    Route::resource('/article_excle', 'ischool_report@article_excle');
    Route::resource('/stock_article_excle', 'ischool_report@stock_article_excle');
    Route::resource('/stock_article_pdf', 'ischool_report@stock_article_pdf');
    Route::resource('/membership_pdf', 'ischool_report@membership_pdf');
    Route::resource('/membership_excle', 'ischool_report@membership_excle');
    Route::resource('/article_issue_pdf', 'ischool_report@article_issue_pdf');
    Route::resource('/article_issue_excle', 'ischool_report@article_issue_excle');
    Route::resource('/article_id_wise_data', 'ischool_report@article_id_wise_data');
    // Report Controller
    Route::post('/member_wise_data', 'ischool_report@member_wise_data');
    Route::post('/member_wise_teacher_data', 'ischool_report@member_wise_teacher_data');

    Route::post('/article_id_issue_data', 'ischool_report@article_id_issue_data');

    Route::get('/staff_report', 'ischool_report@staff_report');

    Route::get('/student_apprisal_report', 'ischool_report@student_apprisal_report');

    Route::post('/notice_board_student_data_get', 'ischool_report@notice_board_student_data_get');
    Route::post('/notice_board_teacher_data_get', 'ischool_report@notice_board_teacher_data_get');
    Route::post('/notice_board_parents_data_get', 'ischool_report@notice_board_parents_data_get');
    Route::post('/notice_board_class_data_get', 'ischool_report@notice_board_class_data_get');
    Route::post('/notice_board_students_data_get', 'ischool_report@notice_board_students_data_get');

    Route::resource('/apprisal_template_report', 'ischool_report@apprisal_template_report');
    Route::post('/student_data_get', 'ischool_report@student_data_get');
    Route::post('/teacher_data_get_for_library', 'ischool_report@teacher_data_get_for_library');
    Route::post('/class_wise_subject', 'ischool_report@class_wise_subject');
    Route::post('/class_wise_department', 'ischool_report@class_wise_department');
    // Route::post('/password_forget','password_reset@password_forget'); Fack Email Sent Test For Email
    Route::get('/home', 'HomeController@index');


    Route::resource('/fees_collection_report', 'FeesCollectionReportController');
    Route::get('/financial_ledger_repport', 'FinancialLedgerReport@financial_ledger_report');
    Route::post('/financial_ledger_report_data', 'FinancialLedgerReport@financial_ledger_report_data');


    Route::post('/type_wise_subject', 'teacher_info@type_wise_subject');

    Route::resource('/single_student_attendance_report', 'SingleStudentAttendanceReportController');
    Route::resource('/all_student_attendance_report', 'AllStudentAttendanceReportController');

    Route::resource('/asset_revenue', 'AssetRevenueController');
    Route::resource('/total_teacher_report', 'TotalTeacherReportController');
    Route::resource('/class_wise_teacher', 'ClassWiseTeacherReportController');
    Route::resource('/book_list_report', 'ListBookReportController');
    Route::resource('/result_report', 'ResultReportController');
    // Route::post('/marksheet_report_publish','ResultReportController@marksheet_report_publish');
    Route::resource('/dormitory_student_report', 'DormitoryStudentReportController');
    Route::resource('/reponsible_teacher_report', 'ResponsibleTeacherReportController');


    //Frontend
    Route::resource('/frontend/slider', 'WebsiteSliderController');
    Route::resource('/frontend/event', 'WebsiteEventController');
    Route::resource('/frontend/events', 'WebsiteEventsController');
    Route::resource('/frontend/news', 'WebsiteNewsController');
    Route::resource('/frontend/department_page_setup', 'WebsiteDeptSetupController');
    Route::resource('/frontend/contact', 'WebsiteContactController');
    Route::resource('/frontend/faculties', 'WebsiteFacultiesController');
    Route::resource('/frontend/create_course', 'WebsiteCourseController');
    Route::resource('/frontend/fees_structure', 'WebsiteFeesStructure');
    Route::resource('/frontend/course_category', 'WebsiteCourseCategoryController');
    Route::get('/frontend/course/registration', 'WebsiteCourseRegController@index');

});
Auth::routes();
Route::get('/frontend/department/{id}', 'WebsiteController@FacultiesDepartmentInfo');
Route::get('/frontend/department_wise_faculty/{id}', 'WebsiteController@department_wise_faculty');
Route::get('/result', 'ResultReportController@result_show_with_marksheet');
Route::post('/result_with_marksheet', 'ResultReportController@result_with_marksheet');
Route::post('/class_w_section_search', 'ResultReportController@class_w_section_search');
Route::post('/class_w_department_search', 'ResultReportController@class_w_department_search');

Route::resource('/live_class', 'LiveClassController');
Route::post('/live_class_files', 'LiveClassController@Files');
Route::post('/update_class_file', 'LiveClassController@UpdateFiles');
Route::get('/delete_class_file/{id}', 'LiveClassController@DeleteFiles');
Route::resource('/zoom_create', 'ZoomAccountController');
Route::post('/start_live_class', 'LiveClassController@StartClass');
Route::get('/start_live_class/{id}', 'LiveClassController@StartSDKClass');
Route::get('/delete_live_class/{id}', 'LiveClassController@delete');


Route::post('/marksheet_report_publish', 'ResultReportController@marksheet_report_publish');
Route::post('/class_w_section_filter', 'ischool_report@Class_w_section_filter');
Route::post('/class_w_department_filter', 'ischool_report@class_w_department_filter');
Route::post('/class_w_subject_filter_another', 'ischool_report@class_w_subject_filter_another');


//Frontend
Route::group(['middleware' => 'website'], function () {
    Route::get('/frontend', 'WebsiteController@Home');
    Route::get('/frontend/notice', 'WebsiteController@Notice');
    Route::get('/frontend/about_us', 'WebsiteController@AboutUs');
    Route::get('/frontend/department_wise_faculty/{id}', 'WebsiteController@department_wise_faculty');
    Route::get('/frontend/department_wise_tution/{id}', 'WebsiteController@department_wise_tution');
    Route::get('/frontend/faculty_profile/{id}', 'WebsiteController@faculty_profile');
    Route::get('/frontend/history', 'WebsiteController@History');
    Route::get('/frontend/mission_vision', 'WebsiteController@MissionVision');
    Route::get('/frontend/principal_message', 'WebsiteController@PrincipleMessage');
    Route::get('/frontend/citizen-charter', 'WebsiteController@CitizenCharter');
    Route::get('/frontend/notice/{id}', 'WebsiteController@SingleNotice');
    Route::get('/frontend/student-info/{id}/{slug}', 'WebsiteController@StudentInfo');
    Route::get('/frontend/class-routine/{id}/{slug}', 'WebsiteController@ClassRoutine');
    Route::get('/frontend/course-material/{id}/{slug}', 'WebsiteController@CourseMaterial');
    Route::get('/frontend/contact_us', 'WebsiteController@contact_us');

    Route::get('/frontend/bot', 'WebsiteController@bot');
    Route::resource('/frontend/bot_backend', 'BotController');
    Route::get('/frontend/message_bot_chairman', 'WebsiteController@message_bot_chairman');
    Route::get('/frontend/message_bot_vc', 'WebsiteController@message_bot_vc');
    Route::get('/frontend/overview', 'WebsiteController@overview');
    Route::get('/frontend/mission_vision', 'WebsiteController@mission_vision');
    Route::get('/frontend/syndicate', 'WebsiteController@syndicate');
    Route::get('/frontend/academic', 'WebsiteController@academic');


    Route::get('/frontend/test', 'WebsiteController@test');
    Route::get('/frontend/tution_fees', 'WebsiteController@tution_fees');
    Route::get('/frontend/faculty_member_list', 'WebsiteController@faculty_member_list');
    Route::get('/frontend/office_chairperson', 'WebsiteController@office_chairperson');
    Route::get('/frontend/office_chief_advisor', 'WebsiteController@office_chief_advisor');
    Route::get('/frontend/office_vcice_chancellor', 'WebsiteController@office_vcice_chancellor');
    Route::get('/frontend/office_vcice_pro_chancellor', 'WebsiteController@office_vcice_pro_chancellor');
    Route::get('/frontend/office_treasurer', 'WebsiteController@mission_vision');
    Route::get('/frontend/office_dean', 'WebsiteController@office_dean');
    Route::get('/frontend/office_registrar', 'WebsiteController@office_registrar');
    Route::get('/frontend/office_proctor', 'WebsiteController@office_proctor');
    Route::get('/frontend/office_library', 'WebsiteController@office_library');
    Route::get('/frontend/office_director_finance', 'WebsiteController@office_director_finance');
    Route::get('/frontend/office_controller_examination', 'WebsiteController@office_controller_examination');

    Route::get('/frontend/Admission_test', 'WebsiteController@Admission_test');
    Route::get('/frontend/Admission_test_result', 'WebsiteController@Admission_test_result');
    Route::get('/frontend/Admission_contact', 'WebsiteController@Admission_contact');
    Route::get('/frontend/apply_online', 'WebsiteController@apply_online');
    Route::get('/frontend/Admission_eligibility', 'WebsiteController@Admission_eligibility');
    Route::get('/frontend/Admission_guidelines', 'WebsiteController@Admission_guidelines');
    Route::get('/frontend/Admission_process', 'WebsiteController@Admission_process');
    Route::get('/frontend/Admission_transfer_guidelines', 'WebsiteController@Admission_transfer_guidelines');
    Route::get('/frontend/tuition_other_fees', 'WebsiteController@tuition_other_fees');
    Route::get('/frontend/tuition_fee_calculator', 'WebsiteController@tuition_fee_calculator');
    Route::get('/frontend/tuition_guidelines', 'WebsiteController@tuition_guidelines');
    Route::get('/frontend/tuition_scholarship', 'WebsiteController@tuition_scholarship');
    Route::get('/frontend/tuition_waiver_calculator', 'WebsiteController@tuition_waiver_calculator');

    Route::get('/frontend/live-class', 'WebsiteController@liveClass');

    Route::get('/frontend/contact_info', 'WebsiteController@Contact');

    Route::get('/frontend/website_setup', 'WebsiteController@WebsiteSetup');
    Route::post('/frontend/website_setup', 'WebsiteController@WebsiteSetupUpdate');

//    Route::get('/frontend/former_head_add', 'WebsiteController@former_head_add');
//    Route::post('/frontend/former_head_add', 'WebsiteController@WebsiteSetupUpdate');

    Route::get('/frontend/our_management', 'WebsiteController@OurManagement');
    Route::post('/frontend/our_management_add', 'WebsiteController@OurManagementAdd');
    Route::delete('/frontend/our_management/{id}', 'WebsiteController@OurManagementDelete');
    Route::put('/frontend/our_management/{id}', 'WebsiteController@OurManagementUpdate');
    Route::get('/frontend/our_management/{id}/edit', 'WebsiteController@OurManagementEdit');

    // Route::get('/frontend/faculties/message-from-head/{id}', 'WebsiteController@FacultiesMsgFromHead');
    // Route::get('/frontend/faculties/about_department/{id}', 'WebsiteController@FacultiesAboutDept');
    Route::get('/frontend/faculties/teacher_info/{id}', 'WebsiteController@FacultiesTeacherInfo');
    Route::get('/frontend/faculties/staff_info/{id}', 'WebsiteController@FacultiesStaffInfo');
    Route::get('/frontend/non_tech_instructor', 'WebsiteController@FacultiesNonTechInstructor');
    Route::get('/frontend/faculties/lab_info/{id}', 'WebsiteController@FacultiesLabInfo');
    Route::get('/frontend/faculties/fees_structure/{id}', 'WebsiteController@FeesStructure');

    Route::get('/frontend/online-admission', 'WebsiteController@OnlineAdmission');
    Route::get('/frontend/district_filter/{id}', 'WebsiteController@district_filter');
    Route::get('/frontend/upozila_filter/{id}', 'WebsiteController@upozila_filter');
    Route::get('/frontend/unions_filter/{id}', 'WebsiteController@unions_filter');
    Route::get('/frontend/faculty_department/{id}', 'WebsiteController@faculty_department');
    Route::get('/frontend/student_advisor/{id}', 'WebsiteController@student_advisor');
    Route::get('/frontend/former_head/{id}', 'WebsiteController@former_head');
    Route::get('/frontend/activities/{id}', 'WebsiteController@activities');
    Route::get('/frontend/schollership/{id}', 'WebsiteController@schollership');
    Route::get('/frontend/class_section/{id}', 'WebsiteController@class_section');
    Route::get('/frontend/department_program/{id}', 'WebsiteController@department_program');

    Route::get('/frontend/department_filter/{id}', 'WebsiteController@department_filter');
    Route::get('/frontend/program_filter/{id}', 'WebsiteController@program_filter');

    Route::post('/frontend/online-admission', 'WebsiteController@AddOnlineAdmission');

    Route::get('/frontend/gallery', 'WebsiteController@Gallery');
    Route::get('/frontend/courses/{id}', 'WebsiteController@Course');
    Route::get('/frontend/course/{id}', 'WebsiteController@CourseSingle');
    Route::post('/frontend/course/registration', 'WebsiteCourseRegController@store');
    Route::post('/frontend/contact_message', 'WebsiteController@MailSent');

    Route::get('/frontend/result', 'WebsiteController@Result');
});