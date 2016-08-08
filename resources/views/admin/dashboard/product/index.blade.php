@extends('admin.dashboard.layout')

@section('styles')
    <style>
        table tr > th {
            text-align: center;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('sweetalert/dist/sweetalert.css') }}"/>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">

                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">

                    @include('admin.dashboard.product.tabs')

                    <div class="tab-content">
                        <div class="tab-pane active">

                            @if(count($products) > 0)
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>#</th>
                                            <th>Название</th>
                                            <th>Артикул</th>
                                            <th>Сумма</th>
                                            <th>Скидка</th>
                                            <th>Количество</th>
                                            <th></th>
                                        </tr>
                                        @foreach($products as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->code }}</td>
                                                <td>{{ $item->sum }} руб.</td>
                                                <td>{{ $item->percentage }}%</td>
                                                <td>{{ $item->amount }} шт.</td>
                                                <td class="text-center">
                                                    <a href="{{ admin_url('product/'.$item->id) }}" class="btn btn-primary btn-xs">подробнее</a>
                                                    <a href="{{ admin_url('product/delete/'.$item->id) }}" class="btn btn-danger btn-xs delete_item"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div><!-- /.box-body -->
                            @else
                                <div class="text-center">
                                    Товары отсутствуют
                                </div>
                            @endif

                        </div>
                    </div>

                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
        </div><!-- /.row -->

    </section><!-- /.content -->
@endsection

@section('scripts')
    <script src="{{ asset('sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/delete_record.min.js') }}"></script>
@stop