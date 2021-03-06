<?php namespace Mautab\Services\VestaAPI;

use Auth;
use Config;
use GuzzleHttp\Client;
use Mautab\Exceptions\VestaExceptions;


class Vesta
{
    use VestaBD, VestaDNS, VestaUser, VestaWeb, VestaService, VestaCron, VestaFileSystem;


    /**
     * @var Выбранный сервер для некоторых запросов
     */
    public $SelectServer;

    /**
     * @var string
     */
    public $vst_keyAPI;

    /**
     * @var
     */
    public $vst_username;

    /**
     * @var
     */
    public $vst_password;

    /**
     * @var
     */
    public $vst_server;

    /**
     * @var string
     */
    public $vst_returncode = 'yes'; // Что будет возвращено no|yes|json


    public function __construct()
    {
        if ($this->SelectServer) {
            $config = Config::get('vesta.server')[$this->SelectServer];
        } elseif (Auth::check()) {
            $config = Config::get('vesta.server')[Auth::User()->server];
        } else {
            $config = Config::get('vesta.server')[Config::get('vesta.primary')];
        }

        //$this->vst_username = (string)$config['login'];
        //$this->vst_password = (string)$config['password'];
        $this->vst_keyAPI = (string)$config['keyAPI'];
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

    public function sendQuery(
        $cmd,
        $arg1 = null,
        $arg2 = null,
        $arg3 = null,
        $arg4 = null,
        $arg5 = null,
        $arg6 = null,
        $arg7 = null,
        $arg8 = null,
        $arg9 = null
    ) {

        $postvars = [
            'hash' => $this->vst_keyAPI,
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


        $client = new Client([
            'base_uri' => 'https://' . $this->vst_server . ':8083/api/',
            'timeout' => 10.0,
            'verify' => false,
            'form_params' => $postvars,
        ]);

        $query = $client->post('index.php')
            ->getBody()
            ->getContents();


        if ($this->vst_returncode == 'yes' && $query != 0) {
            throw new VestaExceptions($query);
        } else {
            return $query;
        }

    }


}
