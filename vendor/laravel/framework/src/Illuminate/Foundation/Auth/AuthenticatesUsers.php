<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Redirect;
use App\general_settings_model;
use Session;
use App\students;
use Hash;
use App\parents_info_model;
trait AuthenticatesUsers
{
    use RedirectsUsers, ThrottlesLogins;

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        $general_settings=general_settings_model::first();
        return view('index',['general_settings'=>$general_settings]);
    }
    public function user_check(Request $request)
    {
        if($request->user_type=="Software User")
        {
             if (Auth::attempt(['email' =>$request->user_name,'password'=>$request->passsword,'status'=>'Active']))
            {
                // Authentication passed...

                Session::put('school', general_settings_model::first());
                return $this->authenticated($request, $this->guard()->user())
                    ?: redirect()->intended($this->redirectPath());

            }
            else
            {
                return Redirect::back()->withErrors(['login_error'=>'Invaild User .Please Check User Name & Password']);
            }
        }
        elseif($request->user_type=="Student")
        {
            $email_check=students::where('email',$request->user_name)->first();
            if($email_check)
            {
                $check_password=students::where('email',$request->user_name)->where('password',Hash::check($email_check->password,$request->password))->first();
                    if($check_password)
                    {

                        Session::put('student_or_parents_login','Loggedin');
                        Session::put('student_details',$email_check);
                        Session::put('user_type','Student');
                        Session::put('roll',$check_password->roll);
                        Session::put('class',$check_password->class);

                        return redirect('/Student_dashboard');
                    }
                    else
                    {
                        return Redirect::back()->withErrors(['login_error'=>'Invlid Password Please Check It again']);
                    }
            }
            else
            {
               return Redirect::back()->withErrors(['login_error'=>'Invaild User .Please Check User Name & Password']);
            }
        }
        elseif($request->user_type=="Parent")
        {
            $email_check=parents_info_model::where('email',$request->user_name)->first();
            if($email_check)
            {
                $check_password=parents_info_model::where('email',$request->user_name)->where('password',Hash::check($email_check->password,$request->password))->first();
                    if($check_password)
                    {

                        Session::put('student_or_parents_login','Loggedin');
                        Session::put('student_details',$email_check);
                        Session::put('user_type','Parents');

                        return redirect('/Student_dashboard');
                    }
                    else
                    {
                        return Redirect::back()->withErrors(['login_error'=>'Invlid Password Please Check It again']);
                    }
            }
            else
            {
               return Redirect::back()->withErrors(['login_error'=>'Invaild User .Please Check User Name & Password']);
            }
        }


    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required', 'password' => 'required',
        ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->has('remember')
        );
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        //
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => Lang::get('auth.failed'),
            ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
