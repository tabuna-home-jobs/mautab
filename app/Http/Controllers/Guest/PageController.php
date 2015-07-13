<?php

	namespace Mautab\Http\Controllers\Guest;

	use Mautab\Http\Controllers\Controller;

    class PageController extends Controller
	{
	    /**
	     * @param Request $request - http запрос
	     *
	     * @return \Illuminate\View\View - Возращает вьюху по запросу
	     */
		public function show($url)
		{
			//Передаем часть http запроса для определения запрашиваемой страницы
			return view('pages/'.$url);
		}

	}
