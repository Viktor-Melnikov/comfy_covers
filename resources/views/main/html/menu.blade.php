<nav class="navbar navbar-default">
    <div class="container">

        <div class="row">
            <div class="navbar-header">

                <div class="logo">
                    <a class="navbar-brand visible-xs" href="{{ url('') }}">
                        <img src="{{ asset('img/logo2.png') }}" alt=""/>
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="dropdown pull-right visible-xs basket">
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

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="orange">
                        <a href="{{ url('') }}">Акции</a>
                    </li>
                    <li class="dropdown mega-dropdown">

                        <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">Каталог <span class="caret"></span></a>

                        <ul class="dropdown-menu mega-dropdown-menu">
                            {{--*/ $i = 0; /*--}}
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ catalog_url($category->alias) }}">{{ $category->name }}</a>
                                </li>
                                {{--*/ $i++; /*--}}
                                {{--@if($i != count($categories))
                                    <li class="separator">
                                        <span></span>
                                    </li>
                                @endif--}}
                            @endforeach
                        </ul>

                        {{--<ul class="dropdown-menu">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ catalog_url($category->alias) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>--}}
                    </li>
                    <li>
                        <a href="#">О нас</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</nav>