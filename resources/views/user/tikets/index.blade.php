@extends('app')

@section('content')



    <div class="panel panel-default">
        <div class="panel-heading">Тикеты</div>
        <div class="panel-body">


            <div class="col-xs-12">
                <h2 class="text-center">{{Lang::get('tikets.Tickets')}}</h2>

                <p class="text-center">{{Lang::get('tikets.description')}} </p>
            </div>

            <div class="col-md-8 table-responsive">
                <table class="table table-condensed table-hover table-striped">
                    <thead>
                    <tr>
                        <th>{{Lang::get('tikets.numberTable')}}</th>
                        <th>{{Lang::get('tikets.titleTable')}}</th>
                        <th>{{Lang::get('tikets.statusTable')}}</th>
                        <th>{{Lang::get('tikets.managementTable')}}</th>
                    </tr>
                    </thead>
                    <tbody id="ticketBody">
                    @foreach ($Tikets as $Tiket)
                        <tr>
                            <td>{{ $Tiket->id }}</td>
                            <td>{{ $Tiket->title }}</td>
                            <td>@if (!$Tiket->complete)
                                    {{Lang::get('tikets.statusFalse')}}
                                @else
                                    {{Lang::get('tikets.statusTrue')}}
                                @endif
                            </td>
                            <td><a href="{{ route('tikets.show', $Tiket->id) }}">{{Lang::get('tikets.viewTable')}}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $Tikets->render() !!}
            </div>


            <div class="col-md-4">
                <h2>Напиши и будет решено</h2>

                <form>
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Описание</label>
                        <textarea name="message" cols="5" class="form-control"></textarea>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-primary" id="submitTicket">Отправить</button>
                </form>
            </div>


        </div>
    </div>



    <script>
        //Функция добавления ответа во вьюху пользователя
        function addNewMessage(obj){
            //Формируем дом эелемент
            var strokeResponse = "<tr class='hotBlock'>";
            strokeResponse += "<td>"+obj.id+"</td>";
            strokeResponse += "<td>"+obj.title+"</td>";
            strokeResponse += "<td>хз пока что</td>";
            strokeResponse += "<td>хз пока</td>";
            strokeResponse += "</tr>";

            $("#ticketBody").prepend(strokeResponse);
            $('tr.hotBlock').show('slow');
        }

        //Создаем подключение
        var conn = new WebSocket('ws://localhost:8990');
        //Обозначаем подключение
        conn.onopen = function (e) {
            console.log('Соединение успешно установлено');
            };

        //Получаем сообщение с того конца провода
        conn.onmessage = function (e) {
            //Парсим ответ
            var parseObj = JSON.parse(e.data);

            //Отдаем в функцию объект
            addNewMessage(parseObj[0]);
        };


        //Текущий пользователь
        var user = "{{Auth::user()->id}}";


        //Обрабатываем клик по кнопке формы
        $("body").on('click','#submitTicket',function(){
            var obj = $(this);
            var parentForm = obj.parent();

            //Получаем все данные отправляемого тикета
            var tiketTitle = $("input[name='title']",parentForm).val();
            var messTitle = $("textarea[name='message']",parentForm).val();
            var csrf = $("input[name='_token']",parentForm).val();

            //Формируем данные
            var mess = JSON.stringify({
                "title"   : tiketTitle,
                "message" : messTitle,
                "csrf"    : csrf,
                "user_id" : user
            });


            //Отправляем данные
            conn.send(mess);

            return false;
        });


    </script>





@endsection






