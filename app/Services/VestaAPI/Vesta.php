<?php namespace Mautab\Services\VestaAPI;

use Auth;
use Config;
use Mautab\Exceptions\VestaExceptions;
use SSH;

class Vesta
{

    use VestaBD, VestaDNS, VestaUser, VestaWeb, VestaService, VestaCron, VestaFileSystem;

    public $vst_username;
    public $vst_password;
    public $vst_server;
    public $vst_returncode = 'yes'; // Что будет возвращено no|yes|json

    public function __construct()
    {
        if (Auth::check()) {
            $config = Config::get('vesta.server')[Auth::User()->server];
        } else {
            $config = Config::get('vesta.server')[Config::get('vesta.primary')];
        }

        $this->vst_username = (string)$config['login'];
        $this->vst_password = (string)$config['password'];
        $this->vst_server = (string)$config['ip'];
    }


    /**
     * @param $cmd
     * @param null $arg1
     * @param null $arg2
     * @param null $arg3
     * @param null $arg4
     * @param null $arg5
     * @param null $arg6
     * @param null $arg7
     * @param null $arg8
     * @param null $arg9
     * @return mixed
     * @throws VestaExceptions
     */

    public function sendQuery($cmd, $arg1 = NULL, $arg2 = NULL, $arg3 = NULL, $arg4 = NULL, $arg5 = NULL, $arg6 = NULL, $arg7 = NULL, $arg8 = NULL, $arg9 = NULL)
    {

        $postvars = [
            'hash' => 'VrakEMSQV226ba7p0e09yWOlnDVLkSpX',
            'returncode' => $this->vst_returncode,
            'cmd' => $cmd,
            'arg1' => $arg1,
            'arg2' => $arg2,
            'arg3' => $arg3,
            'arg4' => $arg4,
            'arg5' => $arg5,
            'arg6' => $arg6,
            'arg7' => $arg7,
            'arg8' => $arg8,
            'arg9' => $arg9,
        ];


        $postdata = http_build_query($postvars);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->vst_server . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);

        $query = curl_exec($curl);


        if ($this->vst_returncode == 'yes' && $query != 0)
            throw new VestaExceptions($query);
        else
            return $query;

    }

}
