<?php namespace Mautab\Manager\Widgets;


interface WidgetsInterface
{
    public function getHTML($name, array $attribute = []);

    public function getCode($name, array $attribute = []);
}