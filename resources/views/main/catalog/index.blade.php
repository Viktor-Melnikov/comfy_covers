@extends('main.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('owl.carousel/dist/assets/owl.theme.default.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}"/>
@stop

@section('content')

    <section class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="head">
                        {{ $category }}
                    </div>
                </div>

                <div class="col-sm-3 hidden-xs">
                    <aside>

                        Фильтры

                    </aside>
                </div>

                <div class="col-xs-12 col-sm-9">

                    <article class="products">

                        <div class="row">

                            @foreach($products as $product)

                                <div class="col-xs-6 col-sm-3 product">
                                    <a href="#">
                                        <img src="{{ asset($product['picture']) }}" alt=""/>
                                        <div class="name">
                                            {{ $product['name'] }}
                                        </div>
                                        <div class="code">
                                            Арт.: {{ $product['code'] }}
                                        </div>
                                    </a>

                                    <div class="info">
                                        <div class="price">
                                            <span>{{ $product['sum'] }}</span>р.
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <a href="{{ url('') }}" class="btn btn-success btn-block">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </article>

                </div>
            </div>
        </div>
    </section>

@stop

@section('scripts')

    <script>
        $(function() {

            var maxHeight = 0;

            $('.product').each(function() {
                if ($(this).height() > maxHeight)
                    maxHeight = $(this).height();
            }).height(maxHeight);

        });
    </script>

@stop