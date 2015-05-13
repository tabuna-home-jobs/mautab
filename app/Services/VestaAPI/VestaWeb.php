<?php namespace App\Services\VestaAPI;

use Sentry;

trait VestaWeb
{

	//List Web Domains
	public function listEditWebDomain($domain)
	{
		$answer = $this->sendQuery('v-list-web-domain', Sentry::getUser()->nickname, $domain, 'json');
		$data   = json_decode($answer, TRUE);

		return $data;
	}

	//List Web Domains
	public function listWebDomain()
	{
		$answer = $this->sendQuery('v-list-web-domains', Sentry::getUser()->nickname, 'json');
			$data   = json_decode($answer, TRUE);
			return $data;
	}


	//Add Web Domains Для добовления домена!
	public function addWebDomain($domain, $v_ip)
	{

		return $this->sendQuery('v-add-web-domain', Sentry::getUser()->nickname, $domain, $v_ip);
	}

	//Поддержка днс если стоит чек
	public function addDns($domain, $v_ip)
	{
		return $this->sendQuery('v-add-dns-domain', Sentry::getUser()->nickname, $domain, $v_ip);
	}

	//Поддержка почты если стоит чек
	public function addMail($domain)
	{
		return $this->sendQuery('v-add-mail-domain', Sentry::getUser()->nickname, $domain);
	}

	// Add domain aliases
	public function addWebDomainAlias($domain, $alias)
	{
		return $this->sendQuery('v-add-web-domain-alias', Sentry::getUser()->nickname, $domain, $alias, 'no');
	}

	//Поддержка алиасов днс если чек
	public function addDnsAlias($domain, $alias)
	{
		return $this->sendQuery('v-add-dns-on-web-alias', Sentry::getUser()->nickname, $domain, $alias, 'no');
	}

	// Delete www. alias if it wasn't found
	public function deleteWebDomainAlias($domain, $alias)
	{
		return $this->sendQuery('v-delete-web-domain-alias', Sentry::getUser()->nickname, $domain, $alias, 'no');
	}

	//Добавление ftp домена
	public function addFtpDomain($domain, $ftp_username, $ftp_password, $ftp_path)
	{

		return $this->sendQuery('v-add-web-domain-ftp', Sentry::getUser()->nickname, $domain, $ftp_username, $ftp_password, $ftp_path);
	}

	// Add proxy support
	public function addDomainProxy($domain, $ext)
	{

		return $this->sendQuery('v-add-web-domain-proxy', Sentry::getUser()->nickname, $domain, '', $ext, 'no');
	}

	public function deleteDomain($domain)
	{
		return $this->sendQuery('v-delete-domain', Sentry::getUser()->nickname, $domain);
	}

	// Chane dns domain IP
	public function changeWebDomainIp($domain, $ip)
	{

		return $this->sendQuery('v-change-web-domain-ip', Sentry::getUser()->nickname, $domain, $ip, 'no');
	}



}
