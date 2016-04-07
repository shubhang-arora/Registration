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
                'email'         => 'required|unique:users|email|max:255',
                'contact'       =>  'required|unique:users|max:10|min:10',
                'city'          =>  'required',
                'state'         =>  'required',
                'role'          =>  'required',
                'college'       =>  'required',
                'cgpa'          =>  'required',
                'percentage'    =>  'required',
                'year'          =>  'required',
                'course'        =>  'required',
                'night'         =>  'required',
                'subject_id'       =>  'required',
                'g-recaptcha-response' => 'required|recaptcha',
            ]);
        }
        else
        {
            if($data['job']==1)         //Full Time job
            {
                return Validator::make($data, [
                    'name'          => 'required|max:255',
                    'email'         => 'required|unique:users|email|max:255',
                    'contact'       =>  'required|unique:users|max:10|min:10',
                    'city'          =>  'required',
                    'state'         =>  'required',
                    'role'          =>  'required',
                    'institute'     =>  'required',
                    'experience'    =>  'required',
                    'night'         =>  'required',
                    'content'       =>  'required',
                    'job'           =>  'required',
                    'expected'      =>  'required',
                    'subject_id'       =>  'required',
                    'g-recaptcha-response' => 'required|recaptcha',

                ]);
            }
            else            // Part time job
            {
                return Validator::make($data, [
                    'name'          => 'required|max:255',
                    'email'         => 'required|unique:users|email|max:255',
                    'contact'       =>  'required|unique:users|max:10|min:10',
                    'city'          =>  'required',
                    'state'         =>  'required',
                    'role'          =>  'required',
                    'institute'     =>  'required',
                    'experience'    =>  'required',
                    'night'         =>  'required',
                    'content'       =>  'required',
                    'job'           =>  'required',
                    'expected'      =>  'required',
                    'hours'         =>  'required',
                    'subject_id'       =>  'required',
                    'g-recaptcha-response' => 'required|recaptcha',

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
        if($data['role']==1)
        {

            return User::create([
                'name'          =>  $data['name'],
                'email'         =>  $data['email'],
                'contact'       =>  $data['contact'],
                'city'          =>  $data['city'],
                'state'         =>  $data['state'],
                'role'          =>  $data['role'],
                'subject_id'       =>  $data['subject_id'],
                'college'       =>  $data['college'],
                'cgpa'          =>  $data['cgpa'],
                'year'          =>  $data['year'],
                'course'        =>  $data['course'],
                'night'         =>  $data['night'],
                'percentage'    =>  $data['percentage'],
                'about_you'     =>  $data['about_you']
            ]);
        }
        else
        {
            if($data['job']==1)
            {
                return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'contact'   =>  $data['contact'],
                    'city'  =>  $data['city'],
                    'state' =>  $data['state'],
                    'role'  =>  $data['role'],
                    'subject_id'    =>  $data['subject_id'],
                    'institute' =>  $data['institute'],
                    'experience'    =>  $data['experience'],
                    'content'   =>  $data['content'],
                    'job'   =>  $data['job'],
                    'expected'  =>  $data['expected'],
                    'about_you'     =>  $data['about_you']
                ]);
            }
            else
            {
                return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'contact'   =>  $data['contact'],
                    'city'  =>  $data['city'],
                    'state' =>  $data['state'],
                    'role'  =>  $data['role'],
                    'subject_id'    =>  $data['subject_id'],
                    'institute' =>  $data['institute'],
                    'experience'    =>  $data['experience'],
                    'content'   =>  $data['content'],
                    'job'   =>  $data['job'],
                    'expected'  =>  $data['expected'],
                    'hours' => $data['hours'],
                    'about_you'     =>  $data['about_you']
                ]);
            }
        }

    }
}
