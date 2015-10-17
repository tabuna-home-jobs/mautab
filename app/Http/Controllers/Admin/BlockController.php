<?php

namespace Mautab\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Models\Block;
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
        $Blocks = [];

        if (!is_null($request->type)) {
            $Blocks = $Types->find($request->type)->block()->get();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($type)
    {
        return view('admin.block.edit', [
            'Types' => Type::where('is_block', true)->get(),
            'Block' => Block::where('type_id', $type)->paginate(15),
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
    public function destroy($id)
    {
        //
    }
}
