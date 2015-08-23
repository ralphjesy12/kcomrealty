<?php namespace App\Http\Controllers;
use Mail;
use App\Unit;
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
		$contact = $_POST['contact'];
		$msg = $_POST['message'];
		
		if(!empty($_POST['unit'])){
			$unit = $_POST['unit'];
			$info = Unit::find($unit);
			$unitdesc = $info->description;
			$unittype = $info->type;
			$unitarea = $info->area;
			$projectname = $info->project()->first()->name;

			$extra = '<hr>'.$projectname.' : '.$unittype.' ('.$unitarea.' sqm)<br>'.$unitdesc.'<br>';
			$msg .= $extra;
		}

		if(!empty($msg)){
//			Mail::pretend();
			Mail::send('emails.inquire', [
				'email' => $email,
				'contact' => $contact,
				'name' => $name,
				'msg' => $msg,
			], function($message)
					   {
						   $message
							   ->subject('INQUIRE @ K-COM REALTY')
							   ->from('tech@kcomrealty.com', 'K-COM Realty Technical Support')
							   ->to('inquire@kcomrealty.com', 'K-COM Realty Inquiry')
							   ->cc('ralphjesy@gmail.com');
					   });
		}
		
		return redirect()->back()->with('email', 'Email Sent');
	}

}
