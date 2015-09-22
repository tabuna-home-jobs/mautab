<?php namespace Mautab\Http\Controllers\Guest;

use Mautab\Http\Controllers\Controller;
use Mautab\Models\News;
use Mautab\Models\Package;
use SSH;

class WelcomeHostingController extends Controller
{


    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */


    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {

        /*
         * Drupal
          SSH::into('testVDS')->run([
              'cd /home/admin/web/test.mautab.com/public_html', //Тут надо брать путь
              'rm -rf ./*',
              'wget https://github.com/drupal/drupal/archive/7.x.zip',
              'unzip 7.x.zip',
              'rm  7.x.zip',
              'mv drupal-7.x/* /home/admin/web/test.mautab.com/public_html',
              'rm -rf drupal-7.x',
          ]);
        */

        /*
         * Joomla
        SSH::into('testVDS')->run([
            'cd /home/admin/web/test.mautab.com/public_html', //Тут надо брать путь
            'rm -rf ./*',
            'wget https://github.com/joomla/joomla-cms/archive/master.zip',
            'unzip master.zip',
            'rm  master.zip',
            'mv joomla-cms-master/* /home/admin/web/test.mautab.com/public_html',
            'rm -rf joomla-cms-master',
        ]);

          */


        /*
         * OpenCart
        SSH::into('testVDS')->run([
            'cd /home/admin/web/test.mautab.com/public_html', //Тут надо брать путь
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
                $date = Carbon::now()->addMinutes(2);
                Queue::later($date, new TestJob());
                dd($date, Carbon::now());
        */
        // Queue::pushOn('test', new TestJob());


        $Package = Package::whereHidden('false')->orderBy('price', 'ASC')->get();
        $News = News::paginate(3);
        return view('welcome.hosting', [
            'Package' => $Package,
            'News' => $News
        ]);
    }

    public function price()
    {
        return view('welcome.price');
    }

}
