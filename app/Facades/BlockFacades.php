<?php namespace Mautab\Facades;

use Illuminate\Support\Facades\Facade;
use Mautab\Manager\Block\BlockManager;


class BlockFacades extends Facade
{
    /**
     * Получить зарегистрированное имя компонента.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BlockManager::class;
    }
}