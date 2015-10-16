<?php namespace Mautab\Facades;

use Illuminate\Support\Facades\Facade;
use Mautab\Models\Setting;

class SettingsFacades extends Facade
{
    /**
     * Получить зарегистрированное имя компонента.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Setting::class;
    }
}