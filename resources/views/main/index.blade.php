@extends('main.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('owl.carousel/dist/assets/owl.theme.default.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
@stop

@section('content')

    <section class="banner">
        <div class="owl-banner owl-carousel owl-theme">

            <div class="item">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12">
                            <div class="description">
                                Ультратонкие пластиковые чехлы всего за <span class="sum">50 руб</span>.
                            </div>
                        </div>

                        <div class="col-sm-9 col-xs-12 text-center">
                            <img src="{{ asset('img/banner.png') }}" alt=""/>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="new">

        <div class="container">
            <div class="row">

                <div class="col-xs-12">
                    <div class="title">
                        Новинки
                    </div>
                </div>

                <div class="col-xs-12">

                    <!-- CAROUSEL NAV -->
                    <nav class="next">
                        <a class="customNextBtn" href="#">
                            <img src="{{ asset('img/icons/arrow_right.png') }}" alt=""/>
                        </a>
                    </nav>
                    <nav class="prev">
                        <a class="customPrevBtn" href="#">
                            <img src="{{ asset('img/icons/arrow_left.png') }}" alt=""/>
                        </a>
                    </nav>
                    <!-- END NAV -->

                    <div class="owl-new owl-carousel owl-theme">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="item">
                                    <a href="#">
                                        <div class="image">
                                            <img src="{{ asset('img/products/1.png') }}" alt=""/>
                                        </div>

                                        <div class="name">
                                            Ультратонкий пластиковый чехол (синий)
                                        </div>
                                    </a>
                                    <div class="actions">
                                        <div class="sum">
                                            <span>10 000</span>р.
                                        </div>
                                        <div class="to_cart">
                                            <a href="{{ url('') }}" class="btn btn-success btn-block">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="item">
                                    <a href="#">
                                        <div class="image">
                                            <img src="{{ asset('img/products/1.png') }}" alt=""/>
                                        </div>

                                        <div class="name">
                                            Ультратонкий пластиковый чехол (синий)
                                        </div>
                                    </a>
                                    <div class="actions">
                                        <div class="sum">
                                            <span>10 000</span>р.
                                        </div>
                                        <div class="to_cart">
                                            <a href="{{ url('') }}" class="btn btn-success btn-block">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="recommend">

        <div class="container">
            <div class="row">

                <div class="col-xs-12">
                    <div class="title">
                        Хиты продаж
                    </div>
                </div>

                <div class="col-xs-12">

                    <!-- CAROUSEL NAV -->
                    <nav class="next">
                        <a class="customNextBtn" href="#">
                            <img src="{{ asset('img/icons/arrow_right.png') }}" alt=""/>
                        </a>
                    </nav>
                    <nav class="prev">
                        <a class="customPrevBtn" href="#">
                            <img src="{{ asset('img/icons/arrow_left.png') }}" alt=""/>
                        </a>
                    </nav>
                    <!-- END NAV -->

                    <div class="owl-recommend owl-carousel owl-theme">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="item">
                                    <a href="#">
                                        <div class="image">
                                            <img src="{{ asset('img/products/1.png') }}" alt=""/>
                                        </div>

                                        <div class="name">
                                            Ультратонкий пластиковый чехол (синий)
                                        </div>
                                    </a>
                                    <div class="actions">
                                        <div class="sum">
                                            <span>10 000</span>р.
                                        </div>
                                        <div class="to_cart">
                                            <a href="{{ url('') }}" class="btn btn-success btn-block">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="item">
                                    <a href="#">
                                        <div class="image">
                                            <img src="{{ asset('img/products/1.png') }}" alt=""/>
                                        </div>

                                        <div class="name">
                                            Ультратонкий пластиковый чехол (синий)
                                        </div>
                                    </a>
                                    <div class="actions">
                                        <div class="sum">
                                            <span>10 000</span>р.
                                        </div>
                                        <div class="to_cart">
                                            <a href="{{ url('') }}" class="btn btn-success btn-block">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    {{--<section class="social">
        <div class="container">
            <div class="row">

                <div class="col-xs-12">
                    <div class="title">
                        Мы в соцсетях
                    </div>
                </div>

                <div class="col-xs-6">
                    <script type="text/javascript" src="//vk.com/js/api/openapi.js?124"></script>

                    <!-- VK Widget -->
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {redesign: 1, mode: 3, width: "auto", height: "400", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 113314945);
                    </script>
                </div>

            </div>
        </div>
    </section>--}}


    {{--                <section class="second">

                        <div class="col-xs-12">
                            <div class="page-title"><span>Мы рекомендуем</span></div>
                        </div>

                        <div class="col-xs-12">

                            <!-- CAROUSEL NAV -->
                            <nav class="next">
                                <a class="customNextBtn" href="#">
                                    <img src="{{ asset('img/icons/arrow_right.png') }}" alt=""/>
                                </a>
                            </nav>
                            <nav class="prev">
                                <a class="customPrevBtn" href="#">
                                    <img src="{{ asset('img/icons/arrow_left.png') }}" alt=""/>
                                </a>
                            </nav>
                            <!-- END NAV -->

                            <div class="row">

                                <div class="owl-carousel">
                                    <div>
                                        <div class="col-md-12">
                                            <div class="item">
                                                <img src="{{ asset('img/products/1.png') }}" alt=""/>
                                                <div class="name">
                                                    Lorem ipsum
                                                </div>
                                                <div>
                                                    <!--<a href="#" class="btn btn-default">Выбрать</a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-md-12">
                                            <div class="item">
                                                <img src="{{ asset('img/products/1.png') }}" alt=""/>
                                                <div class="name">
                                                    Lorem ipsum
                                                </div>
                                                <div>
                                                    <!--<a href="#" class="btn btn-default">Выбрать</a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-md-12">
                                            <div class="item">
                                                <img src="img/products/3.png" alt=""/>
                                                <div class="name">
                                                    Lorem ipsum
                                                </div>
                                                <div>
                                                    <!--<a href="#" class="btn btn-default">Выбрать</a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-md-12">
                                            <div class="item">
                                                <img src="img/products/4.png" alt=""/>
                                                <div class="name">
                                                    Lorem ipsum
                                                </div>
                                                <div>
                                                    <!--<a href="#" class="btn btn-default">Выбрать</a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                            </div>

                        </div>

                        <div class="clearfix"></div>

                    </section>--}}

{{--    <section class="third">

        <!--<div class="col-xs-12">
            <div class="page-title"><span>Каталог</span></div>
        </div>-->

        <div class="col-sm-3 hidden-xs">
            <aside>
                <div class="head">
                    Категории
                </div>

                <ul class="list-unstyled">
                    <li class="active">
                        <a href="#"> <span>Чехлы</span></a>
                    </li>
                    <li>
                        <a href="#"> <span>Пленки и стекла</span></a>
                    </li>
                    <li>
                        <a href="#"> <span>Заглушки</span></a>
                    </li>
                </ul>
            </aside>
        </div>

        <div class="col-xs-12 col-sm-9">
            <article>
                <div class="head">
                    <div class="pull-right">всего: <strong>15</strong></div>
                    Каталог
                </div>

                <div class="products">

                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/1.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/2.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/3.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/4.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/1.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/2.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/3.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/4.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/1.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/2.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/3.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="product">
                                <img src="img/products/4.png" alt=""/>
                                <div class="name">
                                    Lorem ipsum
                                </div>
                                <div class="num">
                                    Арт.: 123456
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-center">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>

            </article>
        </div>

        <div class="clearfix"></div>

    </section>--}}

    {{--<section class="four text-center">

        <span>Самое лучшее для вас</span>

        <div>
            <a href="#" class="btn btn-default"> <i class="glyphicon glyphicon-earphone"></i> Заказать звонок</a>
        </div>

    </section>--}}

    <div class="clearfix"></div>

@stop

@section('scripts')
    <script src="{{ asset('owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <script>

        $(function() {
            $('.owl-banner').owlCarousel({
                loop: false,
                smartSpeed: 700,
                responsiveClass: true,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                items: 1
            });

            var owl_recommend = $('.owl-recommend');

            owl_recommend.owlCarousel({
                loop: true,
                smartSpeed: 700,
                responsiveClass: true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            $('.recommend .customNextBtn').on('click', function(e) {
                e.preventDefault();
                owl_recommend.trigger('next.owl.carousel');
            });

            $('.recommend .customPrevBtn').on('click', function(e) {
                e.preventDefault();
                owl_recommend.trigger('prev.owl.carousel', [300]);
            });

            var owl_new = $('.owl-new');

            owl_new.owlCarousel({
                loop: true,
                smartSpeed: 700,
                responsiveClass: true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            $('.new .customNextBtn').on('click', function(e) {
                e.preventDefault();
                owl_new.trigger('next.owl.carousel');
            });

            $('.new .customPrevBtn').on('click', function(e) {
                e.preventDefault();
                owl_new.trigger('prev.owl.carousel', [300]);
            });

        });

    </script>
@stop