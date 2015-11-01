<?php

namespace Mautab\Http\Controllers\Admin;

use Flash;
use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*
                $result = Category::first();

                $result->saveAsRoot();
                $result->makeRoot()->save();


                $sum = Category::find(2);

                $sum->parent()->associate($result)->save();

                $sec = Category::find(3);

                $sec->parent()->associate($sum)->save();


                dd($result,$sum,$sec);
        */


        $categories = Category::sortable()->paginate(15);
        return view('admin.category.index', [
            'Categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'name', 'parent_id')->get();

        return view('admin.category.create', [
            'Categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->all());
        Flash::success('Вы успешно удалили категорию.');

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Category $category
     *
*@return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category $category
     *
*@return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::select('id', 'name', 'parent_id')->get();

        return view('admin.category.edit', [
            'Categories' => $categories,
            'category'   => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Category                 $category
     *
*@return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->fill($request->all());
        $category->save();
        Flash::success('Вы успешно изменили категорию.');

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     *
*@return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Flash::success('Вы успешно удалили категорию.');

        return redirect()->route('admin.category.index');
    }
}
