<?php namespace Mautab\Facades;

use App\Services\SMS\IntisSMS;
use Illuminate\Support\Facades\Facade;

class IntisSMSFacades extends Facade
{
    /**
     * Получить зарегистрированное имя компонента.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return IntisSMS::class;
    }
}