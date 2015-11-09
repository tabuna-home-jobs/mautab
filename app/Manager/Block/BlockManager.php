<?php namespace Mautab\Manager\Block;

use Mautab\Manager\Manager;
use Mautab\Models\Block;

class BlockManager extends Manager
{

    /**
     * Хранение запроса для различной обработки
     * @var null
     */
    private $blockQuery = null;

    /**
     * @param null $slug
     * @param null $template
     * Быстрый вызов блока
     *
     * @return BlockManager
     */
    public function widget($slug = null, $template = null)
    {
        if (!is_null($slug) && !is_null($template)) {
            $this->blockBySlug($slug);

            return $this->template($template);
        }

    }

    /**
     * Выполнение запроса по Slug
     *
     * @param null $slug
     */
    public function blockBySlug($slug = null)
    {
        $this->blockQuery = Block::where('slug', $slug)
            ->with('element.storyLang')
            ->firstOrFail();
    }

    /**
     * @param null $template
     * Указатель вьюхи для автоматической вставки в blade
     *
     * @return $this
     */
    public function template($template = null)
    {
        return view($template)
            ->with([
                'Block' => $this->blockQuery,
            ]);
    }

    /**
     * Выполнение запроса по id
     *
     * @param null $id
     */
    public function blockById($id = null)
    {
        $this->blockQuery = Block::find($id)
            ->with('element.storyLang')
            ->firstOrFail();
    }

    /**
     * Отдаёт результат запроса по блоку
     * @return mixed
     */
    public function get()
    {
        return $this->blockQuery;
    }


}


