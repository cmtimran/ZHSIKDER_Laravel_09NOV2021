<?php

namespace App\Http\Controllers\Auth;

use App\general_settings_model;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
  
  public function showTeacherLoginForm()
  {
     if(Auth::check()){
         return redirect(url('home'));
     }else{
         $general_settings=general_settings_model::first();
        return view('login.teacher_login',['general_settings'=>$general_settings]);
     }
  }
  
  public function showStudentLoginForm()
  {
      $user_auth_check=Session::get('student_or_parents_login');
        if($user_auth_check=='Loggedin'){
            return redirect(url('Student_dashboard'));
        }else{
             $general_settings=general_settings_model::first();
            return view('login.student_login',['general_settings'=>$general_settings]);
        }
  }
  
  public function showParentLoginForm()
  {
    $general_settings=general_settings_model::first();
    return view('login.parent_login',['general_settings'=>$general_settings]);
  }
  
  public function logout(Request $request)
  {
    $this->guard()->logout();
    
    $request->session()->flush();
    
    $request->session()->regenerate();
    
    
    if($request->input('panel') == 'teacher'){
      return redirect('/teacher');
    }else{
      return redirect('/student');
    }
  }

   
}
