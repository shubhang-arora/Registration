<?php

namespace Illuminate\Foundation\Auth;

use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application auth form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        $subjects = Subject::lists('name','id');
        return view('auth.register',compact('subjects'));
    }

    /**
     * Handle a auth request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {

        $validator = $this->validator($request->all());
        if ($validator->fails()) {

            $this->throwValidationException(
                $request, $validator
            );
        }

       // Auth::login($this->create($request->all()));
        $this->create($request->all());
        return redirect($this->redirectPath());
    }
}
