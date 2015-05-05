<?php namespace App\Services\VestaAPI;

use Auth;

trait VestaCron
{

	//Список КРона
	public function listCron()
	{
		$listDns = $this->sendQuery('v-list-cron-jobs', Auth::user()->nickname, 'json');
		$data    = json_decode($listDns, TRUE);

		return $data;
	}


	public function addCron($v_min, $v_hour, $v_day, $v_month, $v_wday, $v_cmd)
	{
		//Тут какой то затык, проверил +100500 раз
		return $this->sendQuery('v-add-cron-job', Auth::user()->nickname, $v_min, $v_hour, $v_day, $v_month, $v_wday, $v_cmd);
	}

	public function deleteCron($v_job)
	{
		//Тут какой то затык, проверил +100500 раз
		return $this->sendQuery('v-delete-cron-job', Auth::user()->nickname, $v_job);
	}


}
