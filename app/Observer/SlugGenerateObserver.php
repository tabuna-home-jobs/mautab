<?php
namespace Mautab\Observer;

class SlugGenerateObserver
{
    /**
     * @param $model
     * Если в модели указано свойство slugField то slug будет сгенерирован по нему
     * по умолчанию слуг будет генерироваться по полю title
     */

    public function saving($model)
    {
        $slugField = property_exists($model, 'slugField') ? $model->slugField : $model->title;
        $model->slug = str_slug($slugField, '-');
    }

}

?>