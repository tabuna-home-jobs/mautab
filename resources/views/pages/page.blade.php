@extends('app')

@section('content')





    <div class="page-header">
        <h1>{{$page->name}}</h1>
    </div>
    <p class="lead">This example shows the navmenu element. If the viewport is <b>less than 992px</b> the menu will be
        placed the off canvas and will be shown with a
        slide in effect.</p>


    <div class="page-content">
        {!!$page->content!!}
        <div






@endsection
