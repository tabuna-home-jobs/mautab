<?php namespace Mautab\Services\VestaAPI;

use Auth;


trait VestaDNS
{

    //Список DNS
    public function listDNS()
    {
        $this->vst_returncode = 'no';
        $listDns = $this->sendQuery('v-list-dns-domains', Auth::User()->nickname, 'json');
        $data = json_decode($listDns, TRUE);
        return $data;
    }

    //Список кокретного DNS
    public function listOnlyDNS($dns)
    {
        $this->vst_returncode = 'no';
        $listDNS = $this->sendQuery('v-list-dns-domain', Auth::User()->nickname, $dns, 'json');
        $data = json_decode($listDNS, TRUE);
        return $data;
    }


    // Удалить днс запись домена
    public function  deleteDNDDomain($v_domain)
    {
        return $this->sendQuery('v-delete-dns-domain', Auth::User()->nickname, $v_domain);
    }

    // Удалить днс запись
    public function  deleteDNSRecord($v_domain, $v_record_id)
    {
        return $this->sendQuery('v-delete-dns-record', Auth::User()->nickname, $v_domain, $v_record_id);
    }


    //Add DNS domain Для добовления домена!
    public function addDNSDomain($domain, $v_ip, $v_ns1, $v_ns2, $v_ns3 = NULL, $v_ns4 = NULL)
    {
        return $this->sendQuery('v-add-dns-domain', Auth::User()->nickname, $domain, $v_ip, $v_ns1, $v_ns2, $v_ns3, $v_ns4, 'no');
    }

    // Set expiriation date
    public function changeDNSDomainExp($v_domain, $v_exp)
    {

        return $this->sendQuery('v-change-dns-domain-exp', Auth::User()->nickname, $v_domain, $v_exp, "no");
    }

    // Set ttl
    public function changeDNSDomainTtl($v_domain, $v_ttl)
    {
        return $this->sendQuery('v-change-dns-domain-ttl', Auth::User()->nickname, $v_domain, $v_ttl, "no");
    }


    public function listDNSRecords($domain)
    {
        $this->vst_returncode = 'no';
        $data = $this->sendQuery('v-list-dns-records', Auth::User()->nickname, $domain, 'json');
        $data = json_decode($data, TRUE);
        return $data;
    }


    public function changeeDNSDomainRecord($v_domain, $v_record_id, $v_val, $v_priority)
    {
        return $this->sendQuery('v-change-dns-record', Auth::User()->nickname, $v_domain, $v_record_id, $v_val, $v_priority);
    }


    public function removeDNSRecord($v_domain, $v_record_id)
    {
        $this->sendQuery('v-delete-dns-record', Auth::User()->nickname, $v_domain, $v_record_id);
    }

    public function addDNSRecord($v_domain, $v_rec, $v_type, $v_val, $v_priority)
    {
        $this->sendQuery('v-add-dns-record', Auth::User()->nickname, $v_domain, $v_rec, $v_type, $v_val, $v_priority);
    }


}
