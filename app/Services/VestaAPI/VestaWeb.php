<?php namespace App\Services\VestaAPI;

use Auth;

trait VestaWeb
{

	//List Web Domains
	public function listEditWebDomain($domain)
	{
		$answer = $this->sendQuery('v-list-web-domain', Auth::user()->nickname, $domain, 'json');
		$data   = json_decode($answer, TRUE);

		return $data;
	}

	//List Web Domains
	public function listWebDomain()
	{
			$answer = $this->sendQuery('v-list-web-domains', Auth::user()->nickname, 'json');
			$data   = json_decode($answer, TRUE);
			return $data;
	}


	//Add Web Domains Для добовления домена!
	public function addWebDomain($domain, $v_ip)
	{

		return $this->sendQuery('v-add-web-domain', Auth::user()->nickname, $domain, $v_ip);
	}

	//Поддержка днс если стоит чек
	public function addDns($domain, $v_ip)
	{
		return $this->sendQuery('v-add-dns-domain', Auth::user()->nickname, $domain, $v_ip);
	}

	//Поддержка почты если стоит чек
	public function addMail($domain)
	{
		return $this->sendQuery('v-add-mail-domain', Auth::user()->nickname, $domain);
	}

	// Add domain aliases
	public function addWebDomainAlias($domain, $alias)
	{
		return $this->sendQuery('v-add-web-domain-alias', Auth::user()->nickname, $domain, $alias, 'no');
	}

	//Поддержка алиасов днс если чек
	public function addDnsAlias($domain, $alias)
	{
		return $this->sendQuery('v-add-dns-on-web-alias', Auth::user()->nickname, $domain, $alias, 'no');
	}

	//v-add-dns-on-web-alias
	/*
	public function addWebDNSOnWebAlias($domain, $alias)
	{
		return $this->sendQuery('v-add-web-domain-alias', Auth::user()->nickname, $domain, $alias, 'no');
	}*/


	// Delete www. alias if it wasn't found
	public function deleteWebDomainAlias($domain, $alias)
	{
		return $this->sendQuery('v-delete-web-domain-alias', Auth::user()->nickname, $domain, $alias, 'no');
	}


	// Add proxy support
	public function addDomainProxy($domain, $ext)
	{

		return $this->sendQuery('v-add-web-domain-proxy', Auth::user()->nickname, $domain, '', $ext, 'no');
	}

	public function deleteDomain($domain)
	{
		return $this->sendQuery('v-delete-domain', Auth::user()->nickname, $domain);
	}

}
