<?php namespace Mautab\Manager\Widgets;


use Mautab\Manager\Manager;
use Mautab\Manager\Widgets\Blocks;

class WidgetsManager extends Manager
{

    public $name;

    public $attribute;


    /**
     * @param       $name
     * @param array $attribute
     * Целью данного класа служит создани экземпляра класса и вызов нужной функции
     */
    public function __construct($name, array $attribute = [])
    {
        return "Blocks\\" . $name();
    }


}