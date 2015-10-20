<?php

namespace Mautab\Http\Controllers\Admin;

use Flash;
use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Models\Block;
use Mautab\Models\Language;
use Mautab\Models\Story;
use Mautab\Models\Type;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Types = Type::where('is_block', true)->get();

        if (!is_null($request->type)) {
            $Blocks = $Types->find($request->type)->block()->get();
        } else {
            $Blocks = Block::orderBy('updated_at', 'DESC')->limit(10)->get();
        }

        return view('admin.block.index', [
            'Types' => $Types,
            'Blocks' => $Blocks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Types = Type::where('is_block', true)->get();
        $Languages = Language::where('status', true)->get();
        return view('admin.block.create', [
            'Types' => $Types,
            'Languages' => $Languages
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
        $Block = new Block(
            $request->all()
        );

        $Storys = collect();

        foreach ($request->story as $key => $value) {
            $story = new Story($value);
            $story->lang_id = $key;
            $Storys->prepend($story);
        }

        $Block->save();
        $Block->story()->saveMany($Storys);

        Flash::success('Вы успешно создали блок.');
        return redirect()->route('admin.block.index');
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
     * @param  string $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Block $block)
    {
        return view('admin.block.edit', [
            'Types' => Type::where('is_block', true)->get(),
            'Block' => Block::with('story')->firstOrFail(),
            'Languages' => Language::where('status', true)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        $block->delete();
        Flash::success('Вы успешно удалили блок.');
        return redirect()->route('admin.block.index');
    }
}
