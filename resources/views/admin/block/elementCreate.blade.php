@extends('admin')

@section('content')




    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Элементы</h1>
        <small class="text-muted">Элементы относящиеся к данному блоку</small>
    </div>



    <div class="wrapper-md">


    <div class="panel panel-default">


        <div class="panel-heading">
            <ul class="nav nav-pills pull-right">
                <li><a href="{{URL::previous()}}">Назад <i class="fa fa-arrow-right"></i></a></li>
            </ul>
            Новый элемент
        </div>

        <div class="panel-body">


            <form class="form-horizontal" method="post" action="{{route('admin.block.element.store',$Block->slug)}}">

                <div class="form-group">
                    <label class="col-lg-2 control-label">Название</label>

                    <div class="col-lg-10">
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>


                <div class="line line-dashed b-b line-lg"></div>


                <div class="form-group">
                    <label class="col-lg-2 control-label">Порядок</label>

                    <div class="col-lg-10">
                        <input type="number" name="sort" class="form-control" required value="0">
                    </div>
                </div>



                <div class="line line-dashed b-b line-lg"></div>


                <div class="row">
                    <ul id="LanguageTabs" class="nav nav-tabs nav-justified" role="tablist">
                        @foreach($Languages as $lang)
                            <li role="presentation" @if ($lang == $Languages->first()) class="active" @endif>
                                <a href="#lang-{{$lang->code}}" role="tab" data-toggle="tab"
                                   aria-expanded="true">{{$lang->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div id="LanguageTabsContent" class="tab-content">

                        @foreach($Languages as $lang)
                            <div role="tabpanel"
                                 class="tab-pane fade in @if ($lang == $Languages->first()) active @endif"
                                 id="lang-{{$lang->code}}" aria-labelledby="lang-{{$lang->code}}">


                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Имя</label>

                                    <div class="col-lg-10">
                                        <input type="text" name="story[{{$lang->id}}][name]" class="form-control"
                                               required>
                                    </div>
                                </div>


                                <div class="line line-dashed b-b line-lg"></div>


                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Изображение</label>

                                    <div class="col-lg-10">
                                        <input type="text" name="story[{{$lang->id}}][image]" class="form-control"
                                               required>
                                    </div>
                                </div>

                                <div class="line line-dashed b-b line-lg"></div>


                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Контент</label>

                                    <div class="col-lg-10">
                                        <textarea ui-jq="tinymce" rows="30" name="story[{{$lang->id}}][content]"
                                                  class="tinymce form-control"
                                                  required></textarea>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="line line-dashed b-b line-lg"></div>


                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        {!!  csrf_field() !!}
                        <button type="submit" class="btn btn-sm btn-info">Создать</button>
                    </div>
                </div>
            </form>


        </div>


    </div>


</div>

@endsection
