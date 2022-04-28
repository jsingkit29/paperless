<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'processLogin'
        ]);
    }

    public function username()
    {
        return 'username';
    }

    public function processLogin()
    {
        $response = ['response' => false, 'message' => 'Invalid Credentials'];
        if (Auth::attempt(request(['username', 'password']))) {
            if (Auth::user()->activated) {
                $response = ['response' => true, 'message' => 'Login Successful'];
            } else {
                $response = ['response' => false, 'message' => 'Account not yet activated'];
            }
        }
        return response()->json($response);
    }

    /**
     * Logs out user and remove credentials
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
