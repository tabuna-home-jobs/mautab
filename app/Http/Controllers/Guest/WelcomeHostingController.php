<?php namespace Mautab\Http\Controllers\Guest;

use Carbon\Carbon;
use Mautab\Http\Controllers\Controller;
use Mautab\Jobs\TestJob;
use Mautab\Models\News;
use Mautab\Models\Package;
use Queue;

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


        $date = Carbon::now()->addMinutes(2);
        Queue::later($date, new TestJob());
        dd($date, Carbon::now());

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
