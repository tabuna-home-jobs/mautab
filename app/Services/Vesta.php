<?php namespace App\Services;

use Auth;

class Vesta  {

	

	public	$vst_username = 'admin';
	public	$vst_password = '03af4d';


    public function process()
    {
        App::bind('Vesta', function()
		{
		    return new App\Services\Vesta;
		});
    }

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


			$options = array(
				    'http' => array(
				        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				        'method'  => 'POST',
				        'content' => http_build_query($postvars),
				    ),
			);


			$url = 'https://' . Auth::user()->IpServer . ':8083/api/';
			$context  = stream_context_create($options);
			return file_get_contents($url, false, $context);
		

			

    }




    // Регистрация пользователя
	public function regUser($username, $password, $email, $package, $fist_name, $last_name)
	{

		//Добовление пользователя в систему
		$Vesta = $this->sendQuery('v-add-user',$username,$password,$email,$package,$fist_name,$last_name);
		if($Vesta != 0 )
			return $Vesta;

		//Локализация панели для пользователя
		$Vesta = $this->sendQuery('v-change-user-language',$username,'ru');
		if($Vesta != 0 )
			return $Vesta;

		//Блокировка пользователя до момента оплаты
		$Vesta = $this->sendQuery('v-suspend-user',$username,'no');
		if($Vesta != 0 )
			return $Vesta;

	}

	//List User Account
	public function listUserAccount(){
		$answer = $this->sendQuery('v-list-user',Auth::user()->nickname,'json');
		$data = json_decode($answer, true);
		return $data;

	}

	//List User Backups
	public function listUserBackups()
	{
			$answer = $this->sendQuery('v-list-user-backups',Auth::user()->nickname,'json');
		$data = json_decode($answer, true);
		return $data;
	}




	//List Web Domains
	public function listWebDomain()
	{
		$answer = $this->sendQuery('v-list-web-domains',Auth::user()->nickname,'json');
		$data = json_decode($answer, true);
		return $data;
	}


}
