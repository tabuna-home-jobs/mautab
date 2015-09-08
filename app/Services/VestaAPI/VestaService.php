<?php namespace Mautab\Services\VestaAPI;

use Auth;

trait VestaService
{

    // Restart dns server
    public function  restartDNSServer()
    {
        return $this->sendQuery('v-restart-dns');
    }

    public function userSearch($query)
    {
        $this->vst_returncode = 'no';
        return json_decode($this->sendQuery('v-search-user-object', Auth::User()->nickname, $query, 'json'), TRUE);
    }

    public function listStats($server)
    {
        $this->vst_returncode = 'no';
        $this->SelectServer = $server;
        $data = json_decode($this->sendQuery('v-list-users-stats', 'json'), TRUE);
        return array_reverse($data, true);
    }


    /**
     * @param $server
     * @return mixed
     * Самая бесполезная функция
     */
    public function listRRD($server)
    {
        $this->vst_returncode = 'no';
        $this->SelectServer = $server;
        return json_decode($this->sendQuery('v-list-sys-rrd', 'json'), TRUE);
    }

    public function listSysInfo($server)
    {
        $this->vst_returncode = 'no';
        $this->SelectServer = $server;
        return json_decode($this->sendQuery('v-list-sys-info', 'json'), TRUE);
    }


    public function listSysService($server)
    {
        $this->vst_returncode = 'no';
        $this->SelectServer = $server;
        return json_decode($this->sendQuery('v-list-sys-services', 'json'), TRUE);
    }

    public function restartService($server, $service)
    {
        $this->SelectServer = $server;
        return $this->sendQuery('v-restart-service', $service);
    }

    public function startService($server, $service)
    {
        $this->SelectServer = $server;
        return $this->sendQuery('v-start-service', $service);
    }

    public function stopService($server, $service)
    {
        $this->SelectServer = $server;
        return $this->sendQuery('v-stop-service', $service);
    }


}
