<?php namespace Mautab\Services\VestaAPI;

use Auth;

trait VestaCron
{

    //Список КРона
    public function listCron()
    {
        $this->vst_returncode = 'no';
        $listDns = $this->sendQuery('v-list-cron-jobs', Auth::User()->nickname, 'json');
        $data = json_decode($listDns, true);
        return $data;
    }

    /**
     * @param $v_min
     * @param $v_hour
     * @param $v_day
     * @param $v_month
     * @param $v_wday
     * @param $v_cmd
     * @return mixed
     */

    public function addCron($v_min, $v_hour, $v_day, $v_month, $v_wday, $v_cmd)
    {
        return $this->sendQuery('v-add-cron-job', Auth::User()->nickname, $v_min, $v_hour, $v_day, $v_month, $v_wday,
            $v_cmd);
    }

    /**
     * @param $v_job
     * @return mixed
     */

    public function showCron($v_job)
    {
        $this->vst_returncode = 'no';
        $request = $this->sendQuery('v-list-cron-job', Auth::User()->nickname, $v_job, 'json');
        $data = json_decode($request, true);
        return $data;
    }

    /**
     * @param $v_job
     * @return mixed
     */

    public function deleteCron($v_job)
    {
        return $this->sendQuery('v-delete-cron-job', Auth::User()->nickname, $v_job);
    }

    /**
     * @param $v_job
     * @param $v_min
     * @param $v_hour
     * @param $v_day
     * @param $v_month
     * @param $v_wday
     * @param $v_cmd
     * @return mixed
     */

    public function editCron($v_job, $v_min, $v_hour, $v_day, $v_month, $v_wday, $v_cmd)
    {
        return $this->sendQuery('v-change-cron-job', Auth::User()->nickname, $v_job, $v_min, $v_hour, $v_day, $v_month,
            $v_wday, $v_cmd);
    }


}
