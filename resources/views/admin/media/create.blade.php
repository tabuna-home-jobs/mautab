@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Загрузка файлов</h1>
        <small class="text-muted">Языки поддерживаемые системой</small>
    </div>



    <div class="wrapper-md">


        <div class="panel panel-default">
            <div class="panel-heading font-bold">Языки</div>


            <div class="panel-body row">

                <form action="{{route('admin.media.store')}}" class="dropzone" method="post" enctype="multipart/form-data" ui-jq="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                        {!! csrf_field() !!}}
                    </div>
                </form>

            </div>


            <footer class="panel-footer">

            </footer>

        </div>


    </div>




@endsection