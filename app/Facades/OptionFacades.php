<?php namespace Mautab\Facades;

use Illuminate\Support\Facades\Facade;
use Mautab\Models\Options;


class OptionFacades extends Facade
{

    protected static function getFacadeAccessor()
    {
        return Options::class;
    }

}


?>
