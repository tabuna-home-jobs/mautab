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
        return $this->sendQuery('v-search-user-object',Auth::User()->nickname,$query,'json');
    }



}
