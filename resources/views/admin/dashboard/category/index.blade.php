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

                    @include('admin.dashboard.category.tabs')

                    <div class="tab-content">
                        <div class="tab-pane active">

                            @if(count($category) > 0)
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>#</th>
                                            <th>Название</th>
                                            <th>Alias</th>
                                            <th></th>
                                        </tr>
                                        @foreach($category as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->alias }}</td>
                                                <td class="text-center">
                                                    <a href="{{ admin_url('category/'.$item->id) }}" class="btn btn-primary btn-xs">подробнее</a>
                                                    <a href="{{ admin_url('category/delete/'.$item->id) }}" class="btn btn-danger btn-xs delete_item"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div><!-- /.box-body -->
                            @else
                                <div class="text-center">
                                    Категории отсутствуют
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