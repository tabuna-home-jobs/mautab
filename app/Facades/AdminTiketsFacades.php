<?php
namespace Mautab\Facades;

use Illuminate\Support\Facades\Facade;
use Mautab\Http\Controllers\Admin\TiketsController;

class AdminTiketsFacades extends Facade
{

    protected static function getFacadeAccessor()
    {
        return TiketsController::class;
    }

}


?>
