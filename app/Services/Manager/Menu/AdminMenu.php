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
            'Category' => [
                'icon'   => 'fa fa-briefcase',
                //  'url'    => route(''),
                //  'active' => route(''),
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