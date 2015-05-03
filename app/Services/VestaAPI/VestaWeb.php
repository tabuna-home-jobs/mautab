<?php namespace App\Services\VestaAPI;

use Auth;
use Cache;

trait VestaWeb
{

	//List Web Domains
	public function listWebDomain()
	{
		if (Cache::has('listWebDomain-' . Auth::user()->nickname)) {
			return Cache::get('listWebDomain-' . Auth::user()->nickname);
		} else {
			$answer = $this->sendQuery('v-list-web-domains', Auth::user()->nickname, 'json');
			$data   = json_decode($answer, TRUE);
			Cache::put('listWebDomain-' . Auth::user()->nickname, $data, 10);

			return $data;
		}
	}


	//Add Web Domains Для добовления домена!
	public function addWebDomain($domain)
	{
		return $this->sendQuery('v-add-domain', Auth::user()->nickname, $domain);
	}


	// Add domain aliases
	public function addWebDomainAlias($domain, $alias)
	{
		return $this->sendQuery('v-add-web-domain-alias', Auth::user()->nickname, $domain, $alias, 'no');
	}

	//v-add-dns-on-web-alias
	public function addWebDNSOnWebAlias($domain, $alias)
	{
		return $this->sendQuery('v-add-web-domain-alias', Auth::user()->nickname, $domain, $alias, 'no');
	}


	// Delete www. alias if it wasn't found
	public function deleteWebDomainAlias($domain, $alias)
	{
		return $this->sendQuery('v-delete-web-domain-alias', Auth::user()->nickname, $domain, $alias, 'no');
	}


	// Add proxy support
	public function addWebDomainProxy($domain, $alias, $v_proxy_ext)
	{
		return $this->sendQuery('v-add-web-domain-proxy', Auth::user()->nickname, $domain, $alias, $v_proxy_ext, 'no');
	}

}
