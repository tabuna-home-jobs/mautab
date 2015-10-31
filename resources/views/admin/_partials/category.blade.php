<tr>
    <td>
        @if ($category->parent)
            @include('admin._partials.categoryName',['parent'=>$category->parent])
        @endif
        {{$category->name}}
    </td>
    <td>{{ $category->updated_at }}</td>
    <td>

        <div class="btn-group pull-right" role="group" aria-label="...">
            <a href="{{ route('admin.type.edit',$category->slug) }}"
               class="btn btn-default"><span class="fa fa-edit"></span> </a>
            <a href="#" data-toggle="modal" data-target="#Modal-{{$category->slug}}"
               class="btn btn-danger">
                <i class="fa fa-trash"></i>
            </a>
        </div>


    </td>
</tr>


<!-- Modal -->
<div class="modal fade" id="Modal-{{$category->slug}}" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Удалить
                    {{$category->name}}?</h4>
            </div>
            <div class="modal-body">
                Вы действительно хотите удалить {{$category->name}}
            </div>
            <div class="modal-footer">
                <form action="{{route('admin.category.destroy',$category->slug)}}"
                      method="post">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Нет
                    </button>
                    <button type="submit" class="btn btn-danger">Да</button>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
            </div>
        </div>
    </div>
</div>




@if (count($category->children) > 0)
    @foreach($category->children as $category)
        @include('admin._partials.category', $category)
    @endforeach
@endif