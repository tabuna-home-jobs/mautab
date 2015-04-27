<?php namespace App\Services\VestaAPI;

trait VestaService
{

	// Restart dns server
	public function  restartDNSServer()
	{
		return $this->sendQuery('v-restart-dns');
	}


}
