<?php

namespace Mautab\Manager\Setting;

trait SettingTrait
{
    /**
     * Берет настройку по имени
     * @param $name
     * @return object Setting::class
     */
    public function getName($name)
    {
        return $this->where('name', $name)->first();
    }


    /**
     * Возвращаем значения настройки по slug
     * @param $slug
     * @return string
     */
    public function getValueSlug($slug)
    {
        $query = $this->where('slug', $slug)->first();
        if (is_null($query))
            return '';
        else
            return $query->value;
    }


    /**
     * Берет настроку по Slug
     * @param $slug
     * @return object Setting:class
     */
    public function getSlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }

    /**
     * Расшифровывает строку по Slug
     * @param $slug
     * @return array|mixed
     */
    public function getSlugSerialize($slug)
    {
        $options = $this->where('name', $slug)->first();
        return $options ? json_decode($options, true) : [];
    }

    /**
     * Расшифровывает строку по Имени
     * @param $name
     * @return array|mixed
     */
    public function getNameSerialize($name)
    {
        $options = $this->where('name', $name)->first();
        return $options ? json_decode($options, true) : [];
    }

}
