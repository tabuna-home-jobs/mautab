<?php namespace App\Services\VestaAPI;

use Auth;

trait VestaDNS
{

	//Список DNS
	public function listDNS()
	{
		$listDns = $this->sendQuery('v-list-dns-domains', Auth::user()->nickname, 'json');
		$data    = json_decode($listDns, TRUE);

		return $data;
	}

	//Список кокретного DNS
	public function listOnlyDNS($dns)
	{

		$listDNS = $this->sendQuery('v-list-dns-domain', Auth::user()->nickname, $dns, 'json');

		$data = json_decode($listDNS, TRUE);

		return $data;
	}


	// Удалить днс запись домена
	public function  deleteDNDDomain($v_domain)
	{
		return $this->sendQuery('v-delete-dns-domain', Auth::user()->nickname, $v_domain);
	}

	// Удалить днс запись
	public function  deleteDNSRecord($v_domain, $v_record_id)
	{
		return $this->sendQuery('v-delete-dns-record', Auth::user()->nickname, $v_domain, $v_record_id);
	}


	//Add DNS domain Для добовления домена!
	public function addDNSDomain($domain, $v_ip, $v_ns1, $v_ns2, $v_ns3, $v_ns4)
	{
		return $this->sendQuery('v-add-dns-domain', Auth::user()->nickname, $domain, $v_ip, $v_ns1, $v_ns2, $v_ns3, $v_ns4, 'no');
	}

	// Set expiriation date
	public function changeDNSDomainExp($v_domain, $v_exp)
	{

		return $this->sendQuery('v-change-dns-domain-exp', Auth::user()->nickname, $v_domain, $v_exp, "no");
	}

	// Set ttl
	public function changeDNSDomainTtl($v_domain, $v_ttl)
	{
		return $this->sendQuery('v-change-dns-domain-ttl', Auth::user()->nickname, $v_domain, $v_ttl, "no");
	}


}
