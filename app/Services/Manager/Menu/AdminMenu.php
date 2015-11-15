<?php namespace Mautab\Services\Manager\Menu;

class AdminMenu
{

    /**
     * Вернее меню админки
     * @var
     */
    public $top;


    /**
     * Левое меню админки
     * @var
     */
    public $left;


    /**
     * Левое меню для модулей
     * @var
     */
    public $modules;


    public function __construct()
    {
        $this->top = collect([
            'Категории'   => [
                'icon'   => 'fa fa-briefcase',
                'url'    => 'admin.category.index',
                'active' => 'admin.category.*',
            ],
            'Типы'        => [
                'icon'   => 'fa fa-wrench',
                'url'    => 'admin.type.index',
                'active' => 'admin.type.*',
            ],
            'База тегов'  =>
                [
                    'icon'   => 'fa fa-tags',
                    'url'    => 'admin..index',
                    'active' => 'admin..index',
                ],
            'Локализация' =>
                [
                    'icon'   => 'fa fa-language',
                    'url'    => 'admin.language.index',
                    'active' => 'admin.language.*',
                ],
            'Роли'        =>
                [
                    'icon'   => 'fa fa-lock',
                    'url'    => 'admin.roles.index',
                    'active' => 'admin.roles.*',
                ],
            'Настроки'    =>
                [
                    'icon'   => 'fa fa-cog',
                    'url'    => 'admin.settings.index',
                    'active' => 'admin.settings.*',
                ],

        ]);

        $this->left = collect([
            'Dashboard'    => [
                'icon'   => 'fa fa-line-chart text-primary-dker',
                'url'    => 'admin..index',
                'active' => 'admin..index',
            ],
            'Пользователи' => [
                'icon'   => 'fa fa-users',
                'url'    => 'admin.users.index',
                'active' => 'admin.users.*',
            ],
            'Меню'         => [
                'icon'   => 'fa fa-bars',
                'url'    => 'admin..index',
                'active' => 'admin..index',
            ],
            'Контент'      => [
                'icon'   => 'fa fa-folder-open',
                'url'    => 'admin.post.index',
                'active' => 'admin.post.index',
            ],
            'Блоки'        => [
                'icon'   => 'fa fa-cubes',
                'url'    => 'admin.block.index',
                'active' => 'admin.block.index',
            ],
        ]);
        $this->modules = collect();
    }


    /**
     * @param string $position
     * @param array  $element
     */
    public function addItems($position, array $element)
    {
        foreach ($element as $key => $value) {
            array_add($this->$position, $key, $value);
        }
    }


    /**
     * @param string $position
     * @param string $key
     *
     * @return mixed
     */
    public function removeItems($position, $key)
    {
        return array_pull($this->$position, $key);
    }


}