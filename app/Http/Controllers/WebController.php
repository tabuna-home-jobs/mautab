<?php namespace App\Http\Controllers;

use Auth;
use Vesta;
use App\User;
use Request;

class WebController extends Controller {

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
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{


		$UserDomain = Vesta::listWebDomain();
		return view('web/index',[ "UserDomain" => $UserDomain ]);
	}


    public  function getDomain()
    {
        return view('web/domain');
    }

    public  function postDomain()
    {
        $v_domain = Request::input('v_domain');
        $test = Vesta::addWebDomain($v_domain);
        dd($test);
        Request::url('/web/domain');
    }





	//Бекап для скачки
	public function getBackup($backup)
	{
		    if (preg_match("/^". Auth::user()->nickname ."/i", $backup)) {

		    	$dir    = '/backup';
		    	$filesize =  filesize(dir("/backup/")->path . $backup);

				    if (ob_get_level()) {
				      ob_end_clean();
				    }
			    header('Content-type: application/gzip');
			    header('Content-Length: '. $filesize);
			    header('Content-Disposition: attachment;  filename='.$backup);
				readfile( dir("/backup/")->path .$backup);
		    }
		    else
		    	abort(404);
	}



}
