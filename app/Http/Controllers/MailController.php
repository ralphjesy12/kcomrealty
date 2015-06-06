<?php namespace App\Http\Controllers;
use Mail;
class MailController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function inquire()
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $msg = $_POST['message'];
        if(!empty($msg)){
//            Mail::pretend();
            Mail::send('emails.inquire', [
                'email' => $email,
                'name' => $name,
                'msg' => $msg,
            ], function($message)
                        {
                            $message
                                ->subject('INQUIRE @ K-COM REALTY')
                                ->from('tech@kcomrealty.com', 'K-COM Realty Technical Support')
                                ->to('ralphjesy@gmail.com', 'K-COM Realty Inquiry')
                                ->cc('tech@kcomrealty.com');
                        });
        }
    }

}
