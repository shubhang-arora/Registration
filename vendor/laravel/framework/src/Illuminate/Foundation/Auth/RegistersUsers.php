<?php

namespace Illuminate\Foundation\Auth;

use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        //$this->sendMail($request->get('email'));
        //$this->sendText($request->get('contact'));
       // Auth::login($this->create($request->all()));
        $this->create($request->all());
        return redirect($this->redirectPath());
    }

    public function sendMail($email)
    {
        $data = 'Thank you for registering with us. We\'ll get back to you soon.';
        $subject = 'Welcome to EE Kota';
        Mail::send('emails.registered', ['email' => $email, 'data' => $data, 'subject' => $subject], function ($message) use ($email, $data, $subject) {

            $message->from('admin@eekota.com', 'Education Excellence Kota');
            $message->to($email)->subject($subject);

        });

    }

    public function sendText($mobileNumber)
    {

        //Your authentication key
        $authKey = "101468AZhfC00x6Y56861dd8";

        //Define route
        $route = "4";

        $message = 'Welcome to EE Kota. Thank you for registering with us. We\'ll get back to you soon.';

        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "EEKOTA";

        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );
        //API URL
        $url = "https://control.msg91.com/api/sendhttp.php";


        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));


        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        //get response
        $output = curl_exec($ch);
        curl_close($ch);


        return redirect()->back()->with('status', 'Text message has been sent to the user');
    }
}
