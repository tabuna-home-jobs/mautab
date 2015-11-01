@if($parent->parent)
    @include('admin.category._partials.categoryName',['parent'=>$parent->parent])
@endif

{{$parent->name}}  &nbsp;&nbsp;&gt;&nbsp;&nbsp;
