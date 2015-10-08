<?php
namespace Mautab\Facades;

use Illuminate\Support\Facades\Facade;
use Mautab\Services\VestaAPI\Vesta;

class VestaFacades extends Facade
{


    /**
     * Получить зарегистрированное имя компонента.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Vesta::class;
    }

}


?>
