<?php

namespace Mautab\Jobs\CMS;

use Config;
use Crypt;
use Illuminate\Contracts\Bus\SelfHandling;
use Mail;
use Mautab\Jobs\Job;
use Mautab\Models\CMS;
use Mautab\Models\User;
use SSH;
use Vesta;


class InstallCMSJob extends Job implements SelfHandling
{
    /**
     * @var
     */
    public $path;

    /**
     * @var CMS
     */
    public $cms;


    /**
     * @var User
     */
    public $user;


    /**
     * @var
     */
    public $sshStatus;


    /**
     * @var
     */

    public $sshReplace = false;

    /**
     * @var array
     */
    public $connect = [];

    /**
     * Create a new job instance.
     *
     * @param User $user
     * @param $path
     * @param CMS $cms
     */
    public function __construct(User $user, $path, CMS $cms)
    {

        $this->user = $user;
        $this->path = $path;
        $this->cms = $cms;

        $this->connect = [
            'host' => Config::get('vesta.server')[$this->user->server]['ip'],
            'username' => $this->user->nickname,
            'password' => Crypt::decrypt($this->user->encrypt_password),
        ];

        $this->sshStatus = trim(Vesta::getValue('shell'));

        if ($this->sshStatus == 'nologin') {
            Vesta::changeShell('bash');
            $this->sshReplace = true;
        }

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        Config::set('remote.connections.Dynamic', $this->connect);

        $funcname = $this->cms->name;
        $this->$funcname();  //Обращение к методам класса посредством переменных

        Mail::raw('CMS подготовлена для установки', function ($message) {
            $message->to($this->user->email)->cc($this->user->email);
        });

        if ($this->sshReplace == true) {
            Vesta::changeShell('nologin');
        }


    }

    public function failed()
    {
        Mail::raw('Хьюстон у нас проблемы, на сервере заданий', function ($message) {
            $message->to('bliz48rus@gmail.com')->cc('bliz48rus@gmail.com');
        });
    }


    public function Joomla()
    {
        SSH::into('Dynamic')->run([
            'cd /home/' . $this->user->nickname . '/web/' . $this->path . '/public_html',
            'rm -rf ./*',
            'wget ' . $this->cms->last_version,
            'unzip master.zip',
            'rm  master.zip',
            'mv joomla-cms-master/* /home/' . $this->user->nickname . '/web/' . $this->path . '/public_html',
            'rm -rf joomla-cms-master',
        ]);
    }

    public function WordPress()
    {
        SSH::into('Dynamic')->run([
            'cd /home/' . $this->user->nickname . '/web/' . $this->path . '/public_html',
            'rm -rf ./*',
            'wget ' . $this->cms->last_version,
            'unzip master.zip',
            'rm  master.zip',
            'mv WordPress-master/* /home/' . $this->user->nickname . '/web/' . $this->path . '/public_html',
            'rm -rf WordPress-master',
        ]);
    }


    public function OpenCart()
    {
        SSH::into('Dynamic')->run([
            'cd /home/' . $this->user->nickname . '/web/' . $this->path . '/public_html',
            'rm -rf ./*',
            'wget ' . $this->cms->last_version,
            'unzip master.zip',
            'rm  master.zip',
            'mv opencart-master/upload/* /home/' . $this->user->nickname . '/web/' . $this->path . '/public_html',
            'rm -rf opencart-master',
        ]);
    }


    public function October()
    {
        SSH::into('Dynamic')->run([
            'cd /home/' . $this->user->nickname . '/web/' . $this->path . '/public_html',
            'rm -rf ./*',
            'wget ' . $this->cms->last_version,
            'unzip master.zip',
            'rm  master.zip',
            'mv install-master/* /home/' . $this->user->nickname . '/web/' . $this->path . '/public_html',
            'rm -rf install-master',
        ]);
    }


}
