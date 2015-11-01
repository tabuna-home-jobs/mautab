<?php

namespace Mautab\Http\Controllers\Admin;

use File;
use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Response;
use Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/media/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/media/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $files = $request->file('files');

	    foreach($files as $file){

		    $extension = $file->getClientOriginalExtension();

		    $fileCurrent = Storage::put($file->getFilename() . '.' . $extension, File::get($file));

		    $fileOndDisk = $file->getFilename() . "." . $extension;
		    if($fileCurrent){

                $res = array(
                    "files" => array(
                        0 => array(
                            "deleteType" => "DELETE",
                            "deleteUrl"  => route('admin.media.destroy', $fileOndDisk),
                            "name" => $file->getClientOriginalName(),
                            "size" => $file->getClientSize(),
                            "thumbnailUrl" => route('admin.media.show', $fileOndDisk),
                            "type" => $file->getClientMimeType(),
                            "url" => route('admin.media.show', $fileOndDisk)
                        )
                    )
                );
			    return Response::json($res);
		    }
	    }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        return response()->download( storage_path("app/".$name));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
