@extends('main.layout')

@section('content')
    <section class="first">

        <div class="col-sm-12">
            <div class="row">
                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                        <img src="{{ asset('img/icons/banner/basket.png') }}" alt=""/>
                        <div class="text">
                            <span class="hidden-xs">выбор в наличии <br/> и под заказ</span>
                            <span class="visible-xs">выбор в наличии и под заказ</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                        <img src="{{ asset('img/icons/banner/bills.png') }}" alt=""/>

                        <div class="text">
                            низкие цены <br/> на товары
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                        <img src="{{ asset('img/icons/banner/sale.png') }}" alt=""/>

                        <div class="text">
                            регулярные <br/> скидки
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                        <img src="{{ asset('img/icons/banner/present.png') }}" alt=""/>

                        <div class="text">
                            подарки <br/> и бонусы
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </section>
@stop