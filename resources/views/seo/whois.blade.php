@include('header')


<section class="banner">
    <div class="container">
        <div class="row">


            <div class="col-xs-12">
                <div class="block">


                    <form class="text-center" method="post" action="{{URL::route('whois.store')}}">
                        <div class="form-group">
                            <label>Домен</label>
                            <input class="form-control" name="domain" type="text" placeholder="Например: google.com">
                        </div>
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
                    <textarea class="form-control" readonly>Тут что то есть Тут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то естьТут что то есть</textarea>
                </div>
            </div>
        </div>
    </div>


</section>


@include('footer')
