<?php namespace App\Services\VestaAPI;

use Sentry;


trait VestaDNS
{

	//Список DNS
	public function listDNS()
	{
		$listDns = $this->sendQuery('v-list-dns-domains', Sentry::getUser()->nickname, 'json');
		$data    = json_decode($listDns, TRUE);

		return $data;
	}

	//Список кокретного DNS
	public function listOnlyDNS($dns)
	{

		$listDNS = $this->sendQuery('v-list-dns-domain', Sentry::getUser()->nickname, $dns, 'json');
		$data = json_decode($listDNS, TRUE);
		return $data;
	}


	// Удалить днс запись домена
	public function  deleteDNDDomain($v_domain)
	{
		return $this->sendQuery('v-delete-dns-domain', Sentry::getUser()->nickname, $v_domain);
	}

	// Удалить днс запись
	public function  deleteDNSRecord($v_domain, $v_record_id)
	{
		return $this->sendQuery('v-delete-dns-record', Sentry::getUser()->nickname, $v_domain, $v_record_id);
	}


	//Add DNS domain Для добовления домена!
	public function addDNSDomain($domain, $v_ip, $v_ns1, $v_ns2, $v_ns3 = NULL, $v_ns4 = NULL)
	{
		return $this->sendQuery('v-add-dns-domain', Sentry::getUser()->nickname, $domain, $v_ip, $v_ns1, $v_ns2, $v_ns3, $v_ns4, 'no');
	}

	// Set expiriation date
	public function changeDNSDomainExp($v_domain, $v_exp)
	{

		return $this->sendQuery('v-change-dns-domain-exp', Sentry::getUser()->nickname, $v_domain, $v_exp, "no");
	}

	// Set ttl
	public function changeDNSDomainTtl($v_domain, $v_ttl)
	{
		return $this->sendQuery('v-change-dns-domain-ttl', Sentry::getUser()->nickname, $v_domain, $v_ttl, "no");
	}


	public function listDNSRecords($domain)
	{
		$data = $this->sendQuery('v-list-dns-records', Sentry::getUser()->nickname, $domain, 'json');
		$data = json_decode($data, TRUE);
		return $data;
	}


	public function changeeDNSDomainRecord($v_domain, $v_record_id, $v_val, $v_priority)
	{
		return $this->sendQuery('v-change-dns-record', Sentry::getUser()->nickname, $v_domain, $v_record_id, $v_val, $v_priority);
	}



    public function removeDNSRecord($v_domain, $v_record_id)
    {
	    $this->sendQuery('v-delete-dns-record', Sentry::getUser()->nickname, $v_domain, $v_record_id);
    }


}
