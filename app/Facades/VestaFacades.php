<?php
	namespace Mautab\Facades;

use Illuminate\Support\Facades\Facade;

class VestaFacades extends Facade
	{



    /**
     * Получить зарегистрированное имя компонента.
     *
     * @return string
     */
		protected static function getFacadeAccessor()
		{
            return 'Mautab\Services\VestaAPI\Vesta';
    }

}




?>
