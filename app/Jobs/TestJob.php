<?php

namespace Mautab\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use Mail;

class TestJob extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::raw('Текст письма из Задачи', function ($message) {
            $message->from('octavian48@yandex.ru', 'Laravel');
            $message->to('octavian48@yandex.ru')->cc('octavian48@yandex.ru');
        });
    }
}
