<?php

	namespace Mautab\Http\Controllers\Guest;

	use Mautab\Http\Controllers\Controller;
	use Mautab\Http\Requests;
	use Mautab\Models\Page;

	class PageController extends Controller
	{

		public function show($id)
		{
			$Page = Page::find($id);

			return view('pages/page', ['page' => $Page]);
		}

	}
