@extends('admin._layouts.twoColumnsContainer')



@section('firstContent')

    <div class="list-group no-radius no-border no-bg m-b-none">
        <li class="list-group-item b-b text-center" tabindex="0">Типы:</li>


        @foreach($Types as $value)

            <a href="{{route('admin.block.index',['type'=>$value->id])}}"
               class="list-group-item m-l hover-anchor b-a" tabindex="0">
                                            <span class="pull-right text-muted hover-action" role="button" tabindex="0"><i
                                                        class="fa fa-eye"></i></span>
                <span class="block m-l-n">{{$value->name}}</span>
            </a>

        @endforeach

    </div>

@endsection


@section('secondContent')


    <div class="panel panel-default">


        <div class="panel-heading">
            <ul class="nav nav-pills pull-right">
                <li><a href="{{URL::previous()}}">Назад <i class="fa fa-arrow-right"></i></a></li>
            </ul>
            Новый блок
        </div>

        <div class="panel-body">


            <form class="form-horizontal" method="post" action="{{route('admin.block.store')}}">


                <div class="form-group">
                    <label class="col-lg-2 control-label">Название</label>

                    <div class="col-lg-10">
                        <input type="text" name="title" class="form-control" required>
                    </div>
                </div>


                <div class="line line-dashed b-b line-lg"></div>


                <div class="form-group">
                    <label class="col-lg-2 control-label">Slug</label>

                    <div class="col-lg-10">
                        <input type="text" name="slug" class="form-control" required>
                        <span class="help-block m-b-none">Будет использован для опередения в системе</span>
                    </div>
                </div>


                <div class="line line-dashed b-b line-lg"></div>


                <div class="form-group">
                    <label class="col-lg-2 control-label">Тип</label>

                    <div class="col-lg-10">
                        <select class="form-control" name="type_id">
                            @foreach($Types as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
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
                                    <label class="col-lg-2 control-label">Контент</label>

                                    <div class="col-lg-10">
                                        <textarea name="story[{{$lang->id}}][content]" class="form-control"
                                                  required></textarea>
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




@endsection
