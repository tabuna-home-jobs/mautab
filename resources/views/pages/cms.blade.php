@extends('appFull')

@section('content')


        <!--
    <div class="container app-fixed-body" ui-jq="prism">
        <div class="wrapper-md">
-->


<section class="panel-code statement light">
    <div class="content">
        <h1>Love beautiful code? We do too.</h1>

        <p>The PHP Framework For Web Artisans</p>

        <div class='browser-window'>
            <div class='top-bar'>
                <div class='circles'>
                    <div class="circle circle-red"></div>
                    <div class="circle circle-yellow"></div>
                    <div class="circle circle-green"></div>
                </div>
            </div>
            <div class='window-content'>
				<pre class="line-numbers"><code class="language-php">
                        &lt;?php


                        class Idea extends Eloquent {

                        /**
                        * Dreaming of something more?
                        *
                        * @with Laravel
                        */
                        public function create()
                        {
                        // Have a fresh start...
                        }

                        }

                    </code></pre>
            </div>
        </div>

    </div>
</section>

<section class="panel-code features dark" id="features">
    <h1>Did someone say rapid?</h1>

    <p>Elegant applications delivered at warp speed.</p>

    <div class="blocks stacked">
        <div class="block odd">
            <div class="text">
                <h2>Expressive, beautiful syntax.</h2>

                <p>Value elegance, simplicity, and readability? You’ll fit right in. Laravel is designed for people just
                    like you. If you need help getting started, check out <a href="https://laracasts.com">Laracasts</a>
                    and our <a href="/docs">great documentation</a>.</p>
            </div>
            <div class="media">

                <div class='browser-window'>
                    <div class='top-bar'>
                        <div class='circles'>
                            <div class="circle circle-red"></div>
                            <div class="circle circle-yellow"></div>
                            <div class="circle circle-green"></div>
                        </div>
                    </div>
                    <div class='window-content'>
							<pre class="line-numbers"><code class="language-php">
                                    class Purchase implements ShouldQueue {

                                    /**
                                    * Purchase a new podcast.
                                    */
                                    public function handle(Repository $repo)
                                    {
                                    foreach ($this->purchases as $purchase)
                                    {
                                    //
                                    }
                                    }
                                </code></pre>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.block -->
        <div class="block even">
            <div class="text">
                <h2>Tailored for your team.</h2>

                <p>Whether you're a solo developer or a 20 person team, Laravel is a breath of fresh air. Keep everyone
                    in sync using Laravel's database agnostic <a href="/docs/migrations">migrations</a> and <a
                            href="/docs/migrations">schema builder</a>.</p>
            </div>
            <div class="media">
                <div class="terminal-window">
                    <div class='top-bar'></div>
                    <div class='window-content'>
                        <div class="dark-code">
							<pre><code class="language-bash">
                                    ~/Apps $ php artisan make:migration create_users_table
                                    Migration created successfully!

                                    ~/Apps $ php artisan migrate --seed
                                    Migrated: 2015_01_12_000000_create_users_table
                                    Migrated: 2015_01_12_100000_create_password_resets_table
                                    Migrated: 2015_01_13_162500_create_projects_table
                                    Migrated: 2015_01_13_162508_create_servers_table
                                </code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.block -->
        <div class="block odd">
            <div class="text">
                <h2>Modern toolkit. Pinch of magic.</h2>

                <p>An <a href="/docs/eloquent">amazing ORM</a>, painless <a href="/docs/routing">routing</a>, powerful
                    <a href="/docs/queues">queue library</a>, and <a href="/docs/authentication">simple
                        authentication</a> give you the tools you need for modern, maintainable PHP. We sweat the small
                    stuff to help you deliver amazing applications.
            </div>
            <div class="media">

                <div class='browser-window'>
                    <div class='top-bar'>
                        <div class='circles'>
                            <div class="circle circle-red"></div>
                            <div class="circle circle-yellow"></div>
                            <div class="circle circle-green"></div>
                        </div>
                    </div>
                    <div class='window-content'>
							<pre class="line-numbers"><code class="language-php">
                                    Route::resource('photos', 'PhotoController');

                                    /**
                                    * Retrieve A User...
                                    */
                                    Route::get('/user/{id}', function($id)
                                    {
                                    return User::with('posts')->firstOrFail($id);
                                    })
                                </code></pre>
                    </div>
                </div>
            </div>
            <!-- /.block -->
        </div>
    </div>
</section>


<!--


        </div>
    </div>
-->


@endsection
