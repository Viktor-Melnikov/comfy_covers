<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0">


    <title>Приятные подарки</title>

    <link href='https://fonts.googleapis.com/css?family=Exo+2:400,500,700,800&subset=cyrillic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/media.css') }}"/>

    @yield('styles')

</head>
<body>

<div class="wrapper">

    <div class="container hidden-xs">
        <div class="row">
            
            <header>
                <div class="col-xs-12">
                    <div class="pull-right">
                        <div class="dropdown basket">
                            <a href="#" class="dropdown-toggle cart" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-shopping-basket"></i> <span class="badge">1</span>
                            </a>
                            <div class="dropdown-menu dropdown-cart" role="menu">
                                <div class="cart-header">
                                    Товары
                                </div>
                                <div class="cart-body">
                                    <div class="item">
                                        <div class="preview">
                                            <img src="http://lorempixel.com/50/50/" alt=""/>
                                        </div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex nihil
                                            recusandae. Dicta fuga libero minus provident quidem! Animi aperiam
                                            assumenda mollitia necessitatibus perferendis quod tempore voluptatum! A
                                            esse, impedit!
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item">
                                        <div class="preview">
                                            <img src="http://lorempixel.com/50/50/" alt=""/>
                                        </div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex nihil
                                            recusandae. Dicta fuga libero minus provident quidem! Animi aperiam
                                            assumenda mollitia necessitatibus perferendis quod tempore voluptatum! A
                                            esse, impedit!
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item">
                                        <div class="preview">
                                            <img src="http://lorempixel.com/50/50/" alt=""/>
                                        </div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex nihil
                                            recusandae. Dicta fuga libero minus provident quidem! Animi aperiam
                                            assumenda mollitia necessitatibus perferendis quod tempore voluptatum! A
                                            esse, impedit!
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="cart-footer">
                                    <a href="#" class="btn btn-block btn-warning">
                                        Перейти в корзину
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="logo pull-left">
                        <a href="{{ url('') }}">
                            <img src="{{ asset('img/logo2.png') }}" alt=""/>
                        </a>
                    </div>

                    <div class="center">
                        <div class="description">
                            Качественные чехлы по доступным ценам! <br/>

                            <div class="phone">
                                <a href="tel:89251990481">8 (925) 199-04-81</a> <a href="tel:89252291444">8 (925) 229-14-44</a>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

        </div>
    </div>
    
    @include('main.html.menu')

    <main>
        @yield('content')
    </main>

</div>

<footer>

    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <a href="/">
                    <img src="{{ asset('img/logo2.png') }}" alt=""/>
                </a>
            </div>
            {{--<div class="col-xs-12 col-sm-6 text-center">
                <ul class="list-inline">
                    <li>
                        <a href="#"><img src="img/icons/social/fb.png" alt=""/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icons/social/twitter.png" alt=""/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icons/social/vk.png" alt=""/></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3">

            </div>--}}

            <div class="clearfix"></div>
        </div>

    </div>

</footer>

<script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script>

    // функция центрирования элемента
    function alignCenter(elem) {
        elem.css({
            // вычисление координат left и top
            'margin-left': ($(window).width() - elem.width()) / 2 + 'px'
        })
    }

    $(function() {

        //alert($('.center .address').width());

        alignCenter($('.navbar-default .navbar-brand')) ;
        /*alignCenter($('.center .address'));*/

        $(window).on('resize', function() {
            alignCenter($('.navbar-default .navbar-brand'));
        });

        if($(window).width() > 768)
        {
            $('body').on('click', function (e) {
                if (!$('li.dropdown.mega-dropdown').is(e.target)
                        && $('li.dropdown.mega-dropdown').has(e.target).length === 0
                        && $('.open').has(e.target).length === 0
                ) {
                    $('li.dropdown.mega-dropdown').removeClass('open');
                }
            });

            $("li.dropdown.mega-dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                        $(this).toggleClass('open');
                    }
            );
        }
    });
</script>

@yield('scripts')

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36894340 = new Ya.Metrika({
                    id:36894340,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36894340" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>