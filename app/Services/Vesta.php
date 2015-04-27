<?php namespace App\Services;

use App\Services\VestaAPI\VestaBD;
use App\Services\VestaAPI\VestaDNS;
use App\Services\VestaAPI\VestaService;
use App\Services\VestaAPI\VestaUser;
use App\Services\VestaAPI\VestaWeb;
use Auth;

class Vesta  {

	use VestaBD, VestaDNS, VestaUser, VestaWeb, VestaService;


	public	$vst_username = 'admin';
	public	$vst_password = '03af4d';


    public function sendQuery($cmd,$arg1 = null,$arg2 = null,$arg3 = null,$arg4 = null,$arg5 = null,$arg6 = null)
    {
    		// Проверям, если нам нужен json то выводим его или же код ошибки
			$argReturnCodeDetector = array($arg1,$arg2,$arg3,$arg4,$arg5,$arg6);
			if (in_array('json',$argReturnCodeDetector))
				$this->vst_returncode = 'no';
			else
				$this->vst_returncode = 'yes';


		    $postvars = array(
		    	    'user' => $this->vst_username,
				    'password' => $this->vst_password,
				    'returncode' => $this->vst_returncode,
				    'cmd' => $cmd,
				    'arg1' => $arg1,
				    'arg2' => $arg2,
				    'arg3' => $arg3,
				    'arg4' => $arg4,
				    'arg5' => $arg5,
				    'arg6' => $arg6
			);

	    /*
				Версия php
				$options = array(
						'http' => array(
							'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
							'method'  => 'POST',
							'content' => http_build_query($postvars),
						),
						"ssl"=>array(
							"verify_peer"=>false,
							"verify_peer_name"=>false,
						),
				);


				$url = 'https://' . Auth::user()->IpServer . ':8083/api/';
				$context  = stream_context_create($options);
				$test = file_get_contents($url, false, $context);
				return file_get_contents($url, false, $context);
	*/


	    $postdata = http_build_query($postvars);
	    $curl     = curl_init();
	    curl_setopt($curl, CURLOPT_URL, 'https://' . Auth::user()->IpServer . ':8083/api/');
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
	    curl_setopt($curl, CURLOPT_POST, TRUE);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);

        $query = curl_exec($curl);


        //Если он должен возвращать ошибку, и она случилось перенаправить на 404 страницу
        if($this->vst_returncode == 'yes' && $query !=0 )
            dd($query);
        else
            return $query;

    }





}
