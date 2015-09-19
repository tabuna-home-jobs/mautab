<?php
	namespace Mautab\Facades;

	use Illuminate\Support\Facades\Facade;
	use Mautab\Http\Controllers\Admin\TiketsController;
	class AdminTiketsFacades extends Facade
	{


		/**
		 * Получить зарегистрированное имя компонента.
		 *
		 * @return string
		 */
		protected static function getFacadeAccessor()
		{
			return TiketsController::class;
		}

	}


?>
