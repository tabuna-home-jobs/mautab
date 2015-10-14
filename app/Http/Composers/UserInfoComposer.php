<?php namespace Mautab\Http\Composers;

use Cache;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;
use Vesta;

class UserInfoComposer
{

    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $user;

    /**
     * Create a new profile composer.
     * @param Guard $user
     */
    public function __construct(Guard $user)
    {
        // Зависимости разрешаются автоматически службой контейнера...
        $this->user = $user->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $UserInfo = Cache::remember($this->user->nickname . '-info', 1, function () {
            return Vesta::listUserAccount()[$this->user->nickname];
        });

        $view->with('UserInfo', $UserInfo);
    }

}