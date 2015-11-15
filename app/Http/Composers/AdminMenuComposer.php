<?php namespace Mautab\Http\Composers;

use Cache;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;
use Mautab\Services\Manager\Menu\AdminMenu;

class AdminMenuComposer
{

    /**
     * The user repository implementation.
     *
     * @var $adminMenu
     */
    public $dashboardMenu;


    /**
     * @var
     */

    protected $guard;


    /**
     * AdminMenuComposer constructor.
     *
     * @param AdminMenu $adminMenu
     */
    public function __construct(AdminMenu $adminMenu, Guard $guard)
    {
        // Зависимости разрешаются автоматически службой контейнера...
        $this->dashboardMenu = $adminMenu;
        $this->guard = $guard;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $dashboardMenu = Cache::remember('dashboardMenu-user-' . $this->guard->user()->id, 10, function () {

            /**
             * Тут надо перебрать всю меню на наличие прав, и удалить
             * элементы к которым их нет
             */

            $user = $this->guard->user();
            $accessCollection = collect();

            foreach ($this->dashboardMenu as $key => $value) {
                $accessElement = $value->filter(function ($item) use ($user) {
                    return $user->hasAccess($item['url']);
                });
                $accessCollection->put($key, $accessElement);
            }

            return $accessCollection->all();
        });

        $view->with('dashboardMenu', $dashboardMenu);
    }

}