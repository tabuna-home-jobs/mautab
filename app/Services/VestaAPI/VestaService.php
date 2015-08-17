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


}
