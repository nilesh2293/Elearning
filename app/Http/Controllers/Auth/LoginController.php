<?php

namespace App\Http\Controllers\Auth;

use App\it_support;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    /**
    *Create a new IT Support Creadentials
    *
    * @return void
    */
    public function insert()
    {
        $username='itsupport@gmail.com';
        $password=bcrypt('itsuppoert123');
        $it_support=new it_support;
        $it_support->username=$username;
        $it_support->password=$password;
        $it_support->save();

    }

}
