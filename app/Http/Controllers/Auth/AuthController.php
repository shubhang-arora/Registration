<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the auth of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming auth request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        if($data['role']==1)    //role=Student
        {
            return Validator::make($data, [
                'name'          => 'required|max:255',
                'email'         => 'required|email|max:255|unique:users',
                'contact'       =>  'required|max:10|min:10',
                'city'          =>  'required',
                'state'         =>  'required',
                'role'          =>  'required',
                'college'       =>  'required',
                'cgpa'          =>  'required',
                'percentage'    =>  'required',
                'year'          =>  'required',
                'course'        =>  'required',
                'night'         =>  'required'
            ]);
        }
        else
        {
            if($data['job']==1)         //Full Time job
            {
                return Validator::make($data, [
                    'name'          => 'required|max:255',
                    'email'         => 'required|email|max:255|unique:users',
                    'contact'       =>  'required|max:10|min:10',
                    'city'          =>  'required',
                    'state'         =>  'required',
                    'role'          =>  'required',
                    'institute'     =>  'required',
                    'experience'    =>  'required',
                    'night'         =>  'required',
                    'content'       =>  'required',
                    'job'           =>  'required',
                    'expected'      =>  'required'

                ]);
            }
            else            // Part time job
            {
                return Validator::make($data, [
                    'name'          => 'required|max:255',
                    'email'         => 'required|email|max:255|unique:users',
                    'contact'       =>  'required|max:10|min:10',
                    'city'          =>  'required',
                    'state'         =>  'required',
                    'role'          =>  'required',
                    'institute'     =>  'required',
                    'experience'    =>  'required',
                    'night'         =>  'required',
                    'content'       =>  'required',
                    'job'           =>  'required',
                    'expected'      =>  'required',
                    'hours'         =>  'required'

                ]);
            }

        }

    }

    /**
     * Create a new user instance after a valid auth.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
