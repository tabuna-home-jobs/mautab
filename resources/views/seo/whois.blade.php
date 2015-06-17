@include('header')


<section class="banner">
    <div class="container">
        <div class="row">


            <div class="col-xs-12">
                <div class="block">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Что то пошло не так!</strong> Пожалуйста проверьте вводимые данные.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="text-center" method="post" action="{{URL::route('whois.store')}}">
                        <div class="form-group">
                            <label>Домен</label>
                            <input class="form-control" name="domain" required type="text"
                                   placeholder="Например: google.com">
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-default btn-blue">Узнать</button>
                    </form>


                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">


            <div class="col-xs-12 text-center">
                <div class="block">
                    <label>Рузультат</label>
                    <textarea class="form-control" readonly rows="20">{{ $name or 'Домен свободен' }}</textarea>
                </div>
            </div>
        </div>
    </div>


</section>


@include('footer')
