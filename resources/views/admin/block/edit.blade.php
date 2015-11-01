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


            <form class="form-horizontal" method="post" action="{{route('admin.block.update',$Block->slug)}}">


                <div class="form-group">
                    <label class="col-lg-2 control-label">Название</label>

                    <div class="col-lg-10">
                        <input type="text" name="title" class="form-control" required value="{{$Block->title}}">
                    </div>
                </div>


                <div class="line line-dashed b-b line-lg"></div>


                <div class="form-group">
                    <label class="col-lg-2 control-label">Slug</label>

                    <div class="col-lg-10">
                        <input type="text" name="slug" class="form-control" required value="{{$Block->slug}}">
                        <span class="help-block m-b-none">Будет использован для опередения в системе</span>
                    </div>
                </div>


                <div class="line line-dashed b-b line-lg"></div>


                <div class="form-group">
                    <label class="col-lg-2 control-label">Тип</label>

                    <div class="col-lg-10">
                        <select class="form-control" name="type_id">
                            @foreach($Types as $value)
                                <option value="{{$value->id}}"
                                        @if($Block->type_id == $value->id) selected @endif>{{$value->name}}</option>
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
                                               value="{{$Block->story->where('lang_id',$lang->id)->first()->name or ''}}"
                                               required>
                                    </div>
                                </div>


                                <div class="line line-dashed b-b line-lg"></div>


                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Изображение</label>

                                    <div class="col-lg-10">
                                        <input type="text" name="story[{{$lang->id}}][image]" class="form-control"
                                               value="{{$Block->story->where('lang_id',$lang->id)->first()->image  or ''}}"
                                               required>
                                    </div>
                                </div>


                                <div class="line line-dashed b-b line-lg"></div>


                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Контент</label>

                                    <div class="col-lg-10">
                                        <textarea ui-jq="tinymce" rows="30" name="story[{{$lang->id}}][content]"
                                                  class="tinymce form-control"
                                                  required>{{$Block->story->where('lang_id',$lang->id)->first()->content  or ''}}</textarea>
                                    </div>
                                </div>


                                <input type="hidden" name="story[{{$lang->id}}][id]" class="form-control"
                                       value="{{$Block->story->where('lang_id',$lang->id)->first()->id or ''}}"
                                       required>

                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="line line-dashed b-b line-lg"></div>


                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        {!!  csrf_field() !!}
                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" class="btn btn-sm btn-info">Обновить</button>
                    </div>
                </div>
            </form>


        </div>


    </div>




@endsection
