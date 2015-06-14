@include('header', ['title'=>'data'])


<section class="banner">
    <div class="container">
        <div class="row">

            <h1>{{$page->name}}</h1>


            {!!$page->content!!}


        </div>
    </div>
    </div>
</section>


@include('footer')
