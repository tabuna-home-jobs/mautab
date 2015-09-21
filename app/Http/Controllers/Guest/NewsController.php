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

        return view('news.list', [
            'news' => $news
        ]);
    }

    public function show($news)
    {

        dd($news);
        return view('news.view', [
            'news' => $news,
        ]);
    }

}
