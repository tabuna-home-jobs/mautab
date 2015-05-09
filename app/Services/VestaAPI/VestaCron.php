<?php namespace App\Services\VestaAPI;

use Sentry;

trait VestaCron
{

	//Список КРона
	public function listCron()
	{
		$listDns = $this->sendQuery('v-list-cron-jobs', Sentry::getUser()->nickname, 'json');
		$data    = json_decode($listDns, TRUE);

		return $data;
	}


	public function addCron($v_min, $v_hour, $v_day, $v_month, $v_wday, $v_cmd)
	{
		return $this->sendQuery('v-add-cron-job', Sentry::getUser()->nickname, $v_min, $v_hour, $v_day, $v_month, $v_wday, $v_cmd);
	}


    public function showCron($v_job)
    {
	    $request = $this->sendQuery('v-list-cron-job', Sentry::getUser()->nickname, $v_job, 'json');
        $data = json_decode($request, TRUE);
        return $data;
    }


	public function deleteCron($v_job)
	{
		return $this->sendQuery('v-delete-cron-job', Sentry::getUser()->nickname, $v_job);
	}

    public function editCron($v_job, $v_min, $v_hour, $v_day, $v_month, $v_wday, $v_cmd)
    {
	    return $this->sendQuery('v-change-cron-job', Sentry::getUser()->nickname, $v_job, $v_min, $v_hour, $v_day, $v_month, $v_wday, $v_cmd);
    }


}
