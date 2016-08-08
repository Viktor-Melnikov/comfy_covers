<header>

    <div class="hidden-xs">

        {{--<div class="col-xs-12">

            <div class="logo">
                <a href="{{ url('') }}">
                    <img src="{{ asset('img/logo2.png') }}" class="img-responsive" alt=""/>
                </a>
            </div>

            <nav>
                <ul class="list-unstyled">

                    <li class="pull-right">

                        <a href="{{ url('') }}" class="cart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Корзина (1 шт - 500 руб.)
                        </a>

                    </li>
                    <li class="{{ Request::is('') ?: 'active' }}">
                        <a href="{{ url('') }}">Главная</a>
                    </li>
                    <li class="{{ Request::is('') ?: 'active' }}">
                        <a href="{{ url('catalog') }}">Каталог</a>

                        <div class="cbp-hrsub">
                            <div class="cbp-hrsub-inner">
                                <div>
                                    <h4>Learning & Games</h4>
                                    <ul>
                                        <li><a href="#">Catch the Bullet</a></li>
                                        <li><a href="#">Snoopydoo</a></li>
                                        <!-- ... -->
                                    </ul>
                                </div>
                                <div>
                                    <h4>Utilities</h4>
                                    <ul>
                                        <li><a href="#">Gadget Finder</a></li>
                                        <li><a href="#">Green Tree Express</a></li>
                                        <li><a href="#">Green Tree Pro</a></li>
                                        <li><a href="#">Wobbler 3.0</a></li>
                                        <li><a href="#">Coolkid</a></li>
                                    </ul>
                                </div>
                            </div><!-- /cbp-hrsub-inner -->
                        </div><!-- /cbp-hrsub -->
                    </li>
                    <li>
                        <a href="{{ url('about') }}">О нас</a>
                    </li>
                    <li>
                        <a href="{{ url('') }}">Контакты</a>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </nav>

        </div>--}}

        <div class="container">
            <nav class="navbar navbar-default">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-large">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Каталог <b class="caret"></b></a>

                            <ul class="dropdown-menu dropdown-menu-large row">
                                <li class="col-sm-3">
                                    <ul>
                                        {{--<li class="dropdown-header">Glyphicons</li>--}}
                                        <li><a href="#">Apple iPhone 5/5S/SE</a></li>
                                        <li><a href="#">Examples</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Dropdowns</li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Aligninment options</a></li>
                                        <li><a href="#">Headers</a></li>
                                        <li><a href="#">Disabled menu items</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Button groups</li>
                                        <li><a href="#">Basic example</a></li>
                                        <li><a href="#">Button toolbar</a></li>
                                        <li><a href="#">Sizing</a></li>
                                        <li><a href="#">Nesting</a></li>
                                        <li><a href="#">Vertical variation</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Button dropdowns</li>
                                        <li><a href="#">Single button dropdowns</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Input groups</li>
                                        <li><a href="#">Basic example</a></li>
                                        <li><a href="#">Sizing</a></li>
                                        <li><a href="#">Checkboxes and radio addons</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Navs</li>
                                        <li><a href="#">Tabs</a></li>
                                        <li><a href="#">Pills</a></li>
                                        <li><a href="#">Justified</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Navbar</li>
                                        <li><a href="#">Default navbar</a></li>
                                        <li><a href="#">Buttons</a></li>
                                        <li><a href="#">Text</a></li>
                                        <li><a href="#">Non-nav links</a></li>
                                        <li><a href="#">Component alignment</a></li>
                                        <li><a href="#">Fixed to top</a></li>
                                        <li><a href="#">Fixed to bottom</a></li>
                                        <li><a href="#">Static top</a></li>
                                        <li><a href="#">Inverted navbar</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </nav>
        </div>

    </div>

    <div class="visible-xs">

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('') }}">
                        <img src="{{ asset('img/logo2.png') }}" class="img-responsive" alt=""/>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Каталог</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="get_call text-center">
            <a href="#" class="btn btn-default"> <i class="glyphicon glyphicon-earphone"></i> Заказать звонок</a>
        </div>

        <div class="cart text-center">

            <a class="btn btn-block" href="{{ url('') }}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Корзина (1 шт - 500 руб.)
            </a>

        </div>

    </div>

    <div class="clearfix"></div>

</header>