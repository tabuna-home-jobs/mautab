<?php

namespace Mautab\Http\Controllers\Guest;

use Mautab\Http\Controllers\Controller;
use Mautab\Models\News;

class NewsController extends Controller
{
    /**
     * @param Request $request - http запрос
     *
     * @return \Illuminate\View\View - Возращает вьюху по запросу
     */
    public function index()
    {

        $news = News::orderBy('id', 'ASC')->get();

        return view('News.list', [
            'news' => $news
        ]);
    }

    public function show($news)
    {

        return view('News.view', [
            'news' => $news,
        ]);
    }

}
