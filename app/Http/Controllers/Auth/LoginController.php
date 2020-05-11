<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function showLoginForm()
    {
        $users = User::all();
        if (count($users)>0){
            return view('admin.users.login-form');
        }else{
            $user = new User();
            $user->role = 'Admin';
            $user->name = 'Md Lutfor Rahman';
            $user->mobile = '+8801913848150';
            $user->email = 'webexpertlrs@gmail.com';
            $user->password =  Hash::make('lutforbd84');
            $user->save();

            return view('admin.users.login-form');
        }


    }
    public function username()
    {
         return 'mobile';

    }

    protected function loggedOut(Request $request)
    {
        return redirect('/home');
    }

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
}
