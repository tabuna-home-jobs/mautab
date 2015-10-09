<?php namespace Mautab\Facades;


use Illuminate\Support\Facades\Facade;
use Mautab\Services\CurrencyRate\CurrencyRate;

class CurrencyRateFacades extends Facade
{

    protected static function getFacadeAccessor()
    {
        return CurrencyRate::class;
    }

}