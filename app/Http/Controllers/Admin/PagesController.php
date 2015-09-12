<?php namespace Mautab\Http\Controllers\Admin;

use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\Admin\PagesRequest;
use Mautab\Models\Page;
use Session;


class PagesController extends Controller
{


    public function index()
    {
        return view("admin/pages/index",
            [
                'PageList' => Page::paginate(15)
            ]
        );
    }

    public function create()
    {
        return view("admin/pages/create");
    }

    public function edit($page)
    {
        return view("admin/pages/edit", ['Page' => $page]);
    }


    //Добовление и изменение данных
    public function store(PagesRequest $request)
    {
        $page = new Page($request->all());
        $page->save();
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('admin.pages.index');
    }


    public function update($page, PagesRequest $request)
    {
        $page->fill($request->all())->save();
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('admin.pages.index');
    }


    //Удаление
    public function destroy($page)
    {
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('admin.pages.index');
    }


}
