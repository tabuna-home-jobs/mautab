@extends('app')

@section('content')

    <div id="browse-panel">

        <div class="clear"></div>

        <form id="fileset" action="?" method="POST" accept-charset="UTF-8">

            <table class="table table-responsive">

                <caption>Optional table caption.</caption>

                <thead>
                <tr>
                    <th>#</th>
                    <th colspan="3">Название</th>
                    <th>Вес</th>
                    <th>Права</th>
                    <th>Тип</th>
                    <th>Дата</th>
                    <th>Управление</th>
                </tr>
                </thead>


                <tbody>

                @foreach($listDirectory as $list)
                    <tr>

                        <td><input type="checkbox" name="1" value="Documents"></td>

                        <td colspan="3">
                            {{$list['name']}}
                        </td>

                        <td>
                            {{$list['size']}}
                        </td>


                        <td>
                            {{$list['type']}}
                        </td>


                        <td>
                            {{$list['permissions']}}
                        </td>

                        <td>
                            {{$list['date']}}
                        </td>


                        <td class="actions">
                            <button type="button" class="btn btn-default"><i class="fa fa-cog"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-cog"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-cog"></i></button>

                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>

        </form>
    </div>






@endsection
