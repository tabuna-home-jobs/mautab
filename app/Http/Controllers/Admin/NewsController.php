<?php

namespace Mautab\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Http\Requests\Admin\NewsRequest;
use Mautab\Models\News;
use Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'NewList' => News::paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        News::create($request->all());
        Session::flash('good', 'Вы успешно создали новость');
        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($news)
    {
        return view("admin/news/edit", ['News' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($news, NewsRequest $request)
    {
        $news->fill($request->all())->save();
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('admin.news.index');
    }

    /**
     * @param News $news
     */
    public function destroy(News $news)
    {
        $news->delete();
        Session::flash('good', 'Вы успешно удалили новость');
        return redirect()->route('admin.news.index');
    }
}
