<?php

    namespace Mautab\Http\Controllers\Admin;

    use Illuminate\Http\Request;
    use Mautab\Http\Controllers\Controller;
    use Mautab\Http\Requests;
    use Mautab\Models\Category;
    use Mautab\Models\Language;
    use Mautab\Models\Post;
    use Mautab\Models\Type;

    class PostController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */

        public function index(Request $request)
        {
            $Types = Type::where('is_block', false)->get();

            if (!is_null($request->type)) {
                $Posts = $Types->find($request->type)->post()->get();
            } else {
                $Posts = Post::orderBy('updated_at', 'DESC')->limit(10)->get();
            }

            return view('admin.post.index', [
                'Types' => $Types,
                'Posts' => $Posts,
            ]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $Types = Type::where('is_block', false)->get();
            $Categories = Category::lists('id', 'name');
            $Languages = Language::where('status', true)->get();

            return view('admin.post.create', [
                'Types'      => $Types,
                'Languages'  => $Languages,
                'Categories' => $Categories,
            ]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         *
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
         *
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
         *
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
         * @param  int                      $id
         *
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
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    }
