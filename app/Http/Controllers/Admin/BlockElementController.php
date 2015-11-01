<?php

namespace Mautab\Http\Controllers\Admin;

use Flash;
use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Models\Block;
use Mautab\Models\Element;
use Mautab\Models\Language;
use Mautab\Models\Story;

class BlockElementController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Block $block
     * @return \Illuminate\View\View
     */
    public function index(Block $block)
    {
        return view('admin.block.elementIndex', [
            'block'    => $block,
            'Elements' => $block->element()->sortable()->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Block $block)
    {
        $Languages = Language::where('status', true)->get();

        return view('admin.block.elementCreate', [
            'Block'     => $block,
            'Languages' => $Languages,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Block $block, Request $request)
    {
        $element = new Element($request->all());
        $element->block_id = $block->id;


        $Storys = collect();

        foreach ($request->story as $key => $value) {
            $story = new Story($value);
            $story->lang_id = $key;
            $Storys->prepend($story);
        }

        $element->save();
        $element->story()->saveMany($Storys);
        Flash::success('Вы успешно создали блок.');
        return redirect()->route('admin.block.element.index', $block->slug);
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
    public function edit(Block $block, Element $element)
    {
        return view('admin.block.elementEdit', [
            'Block'     => $block,
            'Element'   => $element->with('story')->findOrFail($element->id),
            'Languages' => Language::where('status', true)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block $block, Element $element)
    {
        $element->fill($request->all())->save();

        foreach ($request->story as $key => $value) {
            $story = new Story($value);
            $story->lang_id = $key;

            $element->story()->updateOrCreate([
                'id' => $value['id'],
            ],
                $story->attributesToArray()
            );
        }

        Flash::success('Вы успешно изменили элемент');

        return redirect()->route('admin.block.element.index', $block->slug);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block, Element $element)
    {
        $element->delete();
        Flash::success('Вы успешно удалили элемент.');
        return redirect()->route('admin.block.element.index', $block->slug);
    }
}
