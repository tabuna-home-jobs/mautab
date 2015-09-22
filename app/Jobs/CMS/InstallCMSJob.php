<?php

namespace Mautab\CMS\Jobs;

use Config;
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

        Config::set('remote.connections.Dynamic', [
            'host' => Config::get('vesta.server')[$this->user->server]['ip'],
            'username' => $this->user->nickname,
            'password' => $this->user->password,
        ]);


    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        /*
         * Joomla
         *
         */
        SSH::into('Dynamic')->run([
            'cd /home/art1st/web/ok.com/public_html', //Тут надо брать путь
            'rm -rf ./*',
            'wget https://github.com/joomla/joomla-cms/archive/master.zip',
            'unzip master.zip',
            'rm  master.zip',
            'mv joomla-cms-master/* /home/art1st/web/ok.com/public_html',
            'rm -rf joomla-cms-master',
        ]);


        /*
         * OpenCart
        SSH::into('testVDS')->run([
            'cd /home/admin/web/test.mautab.com/public_html',
            'rm -rf ./*',
            'wget https://github.com/opencart/opencart/archive/master.zip',
            'unzip master.zip',
            'rm  master.zip',
            'mv opencart-master/upload/* /home/admin/web/test.mautab.com/public_html',
            'rm -rf opencart-master',
        ]);
        */


        /*
        * WordPress
        SSH::into('testVDS')->run([
            'cd /home/admin/web/test.mautab.com/public_html', //Тут надо брать путь
            'rm -rf ./*',
            'wget https://github.com/WordPress/WordPress/archive/master.zip',
            'unzip master.zip',
            'rm  master.zip',
            'mv WordPress-master/* /home/admin/web/test.mautab.com/public_html',
            'rmdir WordPress-master',
        ]);
        */


        /*
         * Drupal надо потестить
         *
          SSH::into('Dynamic')->run([
              'cd /home/art1st/web/habr.ru/public_html', //Тут надо брать путь
              'rm -rf ./*',
              'wget https://github.com/drupal/drupal/archive/7.x.zip',
              'unzip 7.x.zip',
              'rm  7.x.zip',
              'mv drupal-7.x/* /home/art1st/web/habr.ru/public_html',
              'rm -rf drupal-7.x',
          ]);
          */

    }
}
