<?php namespace App\Http\Controllers;
use Session;
use Input;
use Request;
use Response;
use Storage;
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
    public function index($action)
    {
        if ( ! Request::ajax() ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create setting'
            ));
        }else{
            return Response::json($this->{$action}(Request::all()));
        }
    }
    
    public function index2($action,$type)
    {
        if ( ! Request::ajax() ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create setting'
            ));
        }else{
            return Response::json($this->{$action}(Request::all(),$type));
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
    
    public function getDevelopersTable()
    {
        $ajax = [];
        include 'Ajax/getDevelopersTable.php';
        return $ajax;
    }
    
    public function getDevelopersList()
    {
        $ajax = [];
        include 'Ajax/getDevelopersList.php';
        return $ajax;
    }
    public function getDeveloperData($input)
    {
        $ajax = [];
        include 'Ajax/getDeveloperData.php';
        return $ajax;
    }
    
    public function saveFormDeveloper($input)
    {
        $ajax = [];
        include 'Ajax/saveFormDeveloper.php';
        return $ajax;
    }
    public function updateFormDeveloper($input)
    {
        $ajax = [];
        include 'Ajax/updateFormDeveloper.php';
        return $ajax;
    }
    public function saveFormProject($input)
    {
        $ajax = [];
        include 'Ajax/saveFormProject.php';
        return $ajax;
    }
    
    public function saveFormUnit($input)
    {
        $ajax = [];
        include 'Ajax/saveFormUnit.php';
        return $ajax;
    }
    
    public function getProjectsTable()
    {
        $ajax = [];
        include 'Ajax/getProjectsTable.php';
        return $ajax;
    }
    
    public function getUnitsTable()
    {
        $ajax = [];
        include 'Ajax/getUnitsTable.php';
        return $ajax;
    }
    
    public function getProjectsList()
    {
        $ajax = [];
        include 'Ajax/getProjectsList.php';
        return $ajax;
    }
    public function dashboard($input,$type)
    {
        $ajax = [];
        include 'Ajax/dashboard.php';
        return $ajax;
    }

}
