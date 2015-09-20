<?php

namespace Mautab\CMS\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use Mautab\Jobs\Job;
use Mautab\Models\CMS;
use Mautab\Models\User;
use SSH;

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
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Пример установки cms, у меня заработал хорошо, но на сервере не проверял
        SSH::into($this->user->server)->run([
            'cd /home/tabuna/web/mydomain/public_html', //Тут надо брать путь
            'wget ' . $this->cms->last_version,
            'unzip master.zip',
        ]);
    }
}
