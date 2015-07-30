<?php namespace Mautab\Services\VestaAPI;

use Auth;

trait VestaWeb
{

    //List Web Domains
    public function listEditWebDomain($domain)
    {
        $this->vst_returncode = 'no';
        $answer = $this->sendQuery('v-list-web-domain', Auth::User()->nickname, $domain, 'json');

        $data = json_decode($answer, TRUE);

        $ftpU = strpos($data[$domain]['FTP_USER'], ":");
        $ftpPath = strpos($data[$domain]['FTP_PATH'], ":");

        if ($ftpU !== false) {
            $ftAr = explode(":", $data[$domain]['FTP_USER']);
            $data[$domain]['FTP_USER'] = $ftAr;
        }
        if ($ftpPath !== false) {
            $ftpP = explode(":", $data[$domain]['FTP_PATH']);
            $data[$domain]['FTP_PATH'] = $ftpP;
        }

        return $data;
    }

    //List Web Domains
    public function listWebDomain()
    {
        $this->vst_returncode = 'no';
        $answer = $this->sendQuery('v-list-web-domains', Auth::User()->nickname, 'json');
        $data = json_decode($answer, TRUE);
        return $data;
    }

    //Add Web Domains Для добовления домена!
    public function addWebDomain($domain, $v_ip)
    {

        return $this->sendQuery('v-add-web-domain', Auth::User()->nickname, $domain, $v_ip);
    }

    //Поддержка днс если стоит чек
    public function addDns($domain, $v_ip)
    {
        return $this->sendQuery('v-add-dns-domain', Auth::User()->nickname, $domain, $v_ip);
    }

    //Поддержка почты если стоит чек
    public function addMail($domain)
    {
        return $this->sendQuery('v-add-mail-domain', Auth::User()->nickname, $domain);
    }

    // Add domain aliases
    public function addWebDomainAlias($domain, $alias)
    {
        return $this->sendQuery('v-add-web-domain-alias', Auth::User()->nickname, $domain, $alias, 'no');
    }

    //Поддержка алиасов днс если чек
    public function addDnsAlias($domain, $alias)
    {
        return $this->sendQuery('v-add-dns-on-web-alias', Auth::User()->nickname, $domain, $alias, 'no');
    }

    // Delete www. alias if it wasn't found
    public function deleteWebDomainAlias($domain, $alias)
    {
        return $this->sendQuery('v-delete-web-domain-alias', Auth::User()->nickname, $domain, $alias, 'no');
    }

    //Добавление ftp домена
    public function addFtpDomain($domain, $ftp_username, $ftp_password, $ftp_path)
    {

        return $this->sendQuery('v-add-web-domain-ftp', Auth::User()->nickname, $domain, $ftp_username, $ftp_password, $ftp_path);
    }

    // Add proxy support
    public function addDomainProxy($domain, $ext)
    {

        return $this->sendQuery('v-add-web-domain-proxy', Auth::User()->nickname, $domain, '', $ext, 'no');
    }

    public function deleteDomain($domain)
    {
        return $this->sendQuery('v-delete-domain', Auth::User()->nickname, $domain);
    }

    // Chane dns domain IP
    public function changeWebDomainIp($domain, $ip)
    {

        return $this->sendQuery('v-change-web-domain-ip', Auth::User()->nickname, $domain, $ip, 'no');
    }

    public function deleteWebDomain($domain, $v_ftp_username)
    {

        return $this->sendQuery('v-delete-web-domain-ftp', Auth::User()->nickname, $domain, $v_ftp_username);

    }

    public function changeWebDomain($domain, $v_ftp_username, $v_ftp_path)
    {
        return $this->sendQuery('v-change-web-domain-ftp-path', Auth::User()->nickname, $domain, $v_ftp_username, $v_ftp_path);
    }

    public function changeFtpPassword($domain, $v_ftp_username, $v_password)
    {

        return $this->sendQuery('v-change-web-domain-ftp-password', Auth::User()->nickname, $domain, $v_ftp_username, $v_password);

    }

}
