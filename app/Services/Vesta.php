<?php namespace App\Services;




class Vesta {

	

	public	$vst_hostname = '151.80.164.81';
	public	$vst_username = 'admin';
	public	$vst_password = '03af4d';
	public	$vst_returncode = 'yes';






    public function sendQuery($cmd,$arg1 = null,$arg2 = null,$arg3 = null,$arg4 = null,$arg5 = null,$arg6 = null)
    {

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

			$postdata = http_build_query($postvars);

			// Send POST query via cURL
			$postdata = http_build_query($postvars);
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, 'https://' . $this->vst_hostname . ':8083/api/');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
			$answer = curl_exec($curl);
			return $answer;
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

}
