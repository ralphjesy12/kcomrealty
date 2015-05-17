<?php namespace App\Http\Controllers;

class IndexController extends Controller {

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
     * Show the homepage of Kcom Realty
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
    public function showroom()
    {
        return view('showroom');
    }

}
