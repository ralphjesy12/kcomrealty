<?php namespace App\Http\Controllers;

class AjaxController extends Controller {

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
        if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create setting'
            ) );
        }else{
            return Response::json($this->{$action});
        }
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function sample()
    {
       return [
        'a' => 'b'
       ];
    }

}
