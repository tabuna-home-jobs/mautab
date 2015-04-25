<?php namespace App\Services;

use Auth;

class Vesta  {

	

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
            abort(404);
        else
            return $query;

    }





    // Регистрация пользователя
    public function regUser($username, $password, $email, $package, $fist_name, $last_name)
    {

        //Добовление пользователя в систему
        $Vesta = $this->sendQuery('v-add-user', $username, $password, $email, $package, $fist_name, $last_name);
        if ($Vesta != 0)
            return $Vesta;

        //Локализация панели для пользователя
        $Vesta = $this->sendQuery('v-change-user-language', $username, 'ru');
        if ($Vesta != 0)
            return $Vesta;

        //Блокировка пользователя до момента оплаты
        $Vesta = $this->sendQuery('v-suspend-user', $username, 'no');
        if ($Vesta != 0)
            return $Vesta;
    }










	public function changeDbUser($database, $dbuser){
        return  $this->sendQuery('v-change-database-user',Auth::user()->nickname, $database, $dbuser);
	}

    public function changeDbPassword($database, $password){
        return  $this->sendQuery('v-change-database-password',Auth::user()->nickname, $database, $password);
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

	//Список DNS
	public function listDNS(){
		$listDns = $this->sendQuery('v-list-dns-domains',Auth::user()->nickname,'json');
		$data = json_decode($listDns, true);
		return $data;
	}

	//Список БД
	public function listBD(){
		$listBd = $this->sendQuery('v-list-databases',Auth::user()->nickname,'json');
		$data = json_decode($listBd, true);
		return $data;
	}


    //Список кокретной БД
    public function listOnlyBD($database){
        $listBd = $this->sendQuery('v-list-database',Auth::user()->nickname,$database,'json');
        $data = json_decode($listBd, true);
        return $data;
    }





	//Add Web Domains Для добовления домена!
    public function addWebDomain($domain)
    {
        return $this->sendQuery('v-add-domain',Auth::user()->nickname,$domain);
    }

    //Add DNS domain Для добовления домена!
    public function addDNSDomain($domain, $v_ip)
    {
        return $this->sendQuery('v-add-dns-domain',Auth::user()->nickname,$domain,$v_ip);
    }

    // Add mail domain
    public function addMailDomain($domain)
    {
        return $this->sendQuery('v-add-mail-domain',Auth::user()->nickname,$domain);
    }


    // Add domain aliases
    public function addWebDomainAlias($domain,$alias)
    {
        return $this->sendQuery('v-add-web-domain-alias',Auth::user()->nickname,$domain,$alias, 'no');
    }

    //v-add-dns-on-web-alias
    public function addWebDNSOnWebAlias($domain,$alias)
    {
        return $this->sendQuery('v-add-web-domain-alias',Auth::user()->nickname,$domain,$alias, 'no');
    }


    // Delete www. alias if it wasn't found
    public function deleteWebDomainAlias($domain,$alias)
    {
        return $this->sendQuery('v-delete-web-domain-alias',Auth::user()->nickname,$domain,$alias, 'no');
    }


    // Add proxy support
    public function addWebDomainProxy($domain,$alias,$v_proxy_ext)
    {
        return $this->sendQuery('v-add-web-domain-proxy',Auth::user()->nickname,$domain,$alias,$v_proxy_ext, 'no');
    }

    //Добавить базу данных
    public  function  addDateBase($v_database,$v_dbuser,$v_password, $v_type = "mysql",  $v_charset)
    {
        return $this->sendQuery ('v-add-database',Auth::user()->nickname,$v_database,$v_dbuser,$v_password, $v_type, Auth::user()->IpServer ,$v_charset);
    }

    //Удалить базу данных
    public  function  deleteDateBase($v_database)
    {
        return $this->sendQuery ('v-delete-database',Auth::user()->nickname, $v_database);
    }


}
