<?php namespace Mautab\Services\VestaAPI;

use Auth;
use Mautab\Models\User;

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
        return json_decode($this->sendQuery('v-search-user-object', Auth::User()->nickname, $query, 'json'), true);
    }

    public function listStats($server)
    {
        $this->vst_returncode = 'no';
        $this->SelectServer = $server;
        $data = json_decode($this->sendQuery('v-list-users-stats', 'json'), true);
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
        return json_decode($this->sendQuery('v-list-sys-rrd', 'json'), true);
    }

    public function listSysInfo($server)
    {
        $this->vst_returncode = 'no';
        $this->SelectServer = $server;
        return json_decode($this->sendQuery('v-list-sys-info', 'json'), true);
    }


    public function listSysService($server)
    {
        $this->vst_returncode = 'no';
        $this->SelectServer = $server;
        return json_decode($this->sendQuery('v-list-sys-services', 'json'), true);
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


    public function listIp($server)
    {
        $this->vst_returncode = 'no';
        $this->SelectServer = $server;
        return json_decode($this->sendQuery('v-list-sys-ips', 'json'), true);
    }

    public function getIp($server, $ip)
    {
        $this->vst_returncode = 'no';
        $this->SelectServer = $server;
        return json_decode($this->sendQuery('v-list-sys-ip', $ip, 'json'), true);
    }


    /**
     * @param User $user
     * @param string $restart
     * @return mixed
     */
    public function rebuildWebDomains(User $user, $restart = 'no')
    {
        $this->SelectServer = $user->server;
        return $this->sendQuery('v-rebuild-web-domains', $user->nickname);
    }

    /**
     * @param User $user
     * @param string $restart
     * @return mixed
     */
    public function rebuildDNSDomains(User $user, $restart = 'no')
    {
        $this->SelectServer = $user->server;
        return $this->sendQuery('v-rebuild-dns-domains', $user->nickname);
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function rebuildMailDomains(User $user)
    {
        $this->SelectServer = $user->server;
        return $this->sendQuery('v-rebuild-mail-domains', $user->nickname);
    }


    /**
     * @param User $user
     * @return mixed
     */
    public function rebuildDataBases(User $user)
    {
        $this->SelectServer = $user->server;
        return $this->sendQuery('v-rebuild-databases', $user->nickname);
    }


    /**
     * @param User $user
     * @param string $restart
     * @return mixed
     */
    public function rebuildCronJobs(User $user, $restart = 'no')
    {
        $this->SelectServer = $user->server;
        return $this->sendQuery('v-rebuild-cron-jobs', $user->nickname);
    }


    /**
     * @param User $user
     * @return mixed
     */
    public function updateUserCounters(User $user)
    {
        $this->SelectServer = $user->server;
        return $this->sendQuery('v-update-user-counters', $user->nickname);
    }


    public function updateSysVesta($server, $package)
    {
        $this->SelectServer = $server;
        return $this->sendQuery('v-update-sys-vesta', $package);
    }


}
