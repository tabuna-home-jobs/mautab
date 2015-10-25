<?php namespace Mautab\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Mautab\Models\CMS;
use Mautab\Models\News;
use Mautab\Observer\SlugGenerateObserver;

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Mautab\Events\Registration' => [
            'Mautab\Listeners\Registration\EmailNotification',
            'Mautab\Listeners\Registration\VestaRegistation',
            'Mautab\Listeners\Registration\Registation',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);


        //Page::observe(new SlugGenerateObserver);
        //News::observe(new SlugGenerateObserver);
        CMS::observe(new SlugGenerateObserver);
    }

}
