<?php namespace Mautab\Http\Controllers\Admin;

use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\Admin\PagesRequest;
use Mautab\Models\Page;
use Session;


class PagesController extends Controller
{


	public function index()
	{
		$PageList = Page::paginate(15);

		return view("admin/pages/index", ['PageList' => $PageList]);
	}

	public function create()
	{
		return view("admin/pages/create");
	}

	public function edit($id)
	{
		$page = Page::find($id);

		return view("admin/pages/edit", ['Page' => $page]);
	}


	//Добовление и изменение данных
	public function store(PagesRequest $request)
	{
		$page = new Page([
			'title'    => $request->title,
			'name'     => $request->name,
			'content'  => $request->cont,
			'tag'      => $request->tag,
			'descript' => $request->descript,
		]);
		$page->save();

		//Флеш сообщение
		Session::flash('good', 'Вы успешно изменили значения');

		return redirect()->route('admin.pages.index');
	}


	public function update(PagesRequest $request)
	{
		$page           = Page::find($request->id)->firstOrFail();
		$page->title    = $request->title;
		$page->name     = $request->name;
		$page->content  = $request->cont;
		$page->tag      = $request->tag;
		$page->descript = $request->descrip;
		$page->save();
		Session::flash('good', 'Вы успешно изменили значения');

		return redirect()->route('admin.pages.index');
	}


	//Удаление
	public function destroy(PagesRequest $request)
	{
		$page = Page::find($request->id)->delete();
		Session::flash('good', 'Вы успешно удалили значения');

		return redirect()->route('admin.pages.index');
	}


}
