<?php namespace Mautab\Services\Manager\Menu;

class AdminMenu
{

    /**
     * Вернее меню админки
     * @var
     */
    private $top;


    /**
     * Левое меню админки
     * @var
     */
    private $left;


    /**
     * Левое меню для модулей
     * @var
     */
    private $modules;


    public function __construct()
    {
        $this->top = collect([
            'Category' => [
                'icon'   => 'fa fa-briefcase',
                'url'    => route(''),
                'active' => route(''),
            ],
        ]);

        $this->left = collect();
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