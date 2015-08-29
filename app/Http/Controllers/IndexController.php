<?php namespace App\Http\Controllers;
use Input;
use Request;
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
		// Latest Units
		
		
		
        $d = [];
        include 'Models/indexHome.php';
		
        return view('indexnew',$d);
    }
    public function developer($id,$name)
    {
        $d = [];
        include 'Models/indexDeveloper.php';
        return view('developer',$d);
    }
    public function project($id,$name)
    {
        $d = [];
        include 'Models/indexProject.php';
        return view('project',$d);
    }
    public function developers()
    {
        $d = [];
        include 'Models/indexDevelopers.php';
        return view('developers',$d);
    }
    public function index2()
    {
        return view('index');
    }
    public function teaser()
    {
        return view('teaser');
    }
    public function search()
    {
		$q = Request::all();
		$d = [];
        include 'Models/indexSearch.php';
        return view('search',$d);
    }
    public function showroom()
    {
        return view('showroom');
    }
    public function property()
    {
        return view('property');
    }

}
