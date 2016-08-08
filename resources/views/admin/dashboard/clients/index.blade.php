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

                    @include('admin.dashboard.clients.tabs')

                    <div class="tab-content">
                        <div class="tab-pane active">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>#</th>
                                        <th>Фамилия</th>
                                        <th>Имя</th>
                                        <th>Телефон</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                    @foreach($clients as $client)
                                        <tr>
                                            <td class="text-center">{{ $client->id }}</td>
                                            <td>{{ $client->surname }}</td>
                                            <td>{{ $client->name }}</td>
                                            <td>{{ $client->phone }}</td>
                                            <td>{{ $client->email }}</td>
                                            <td class="text-center">
                                                <a href="{{ admin_url('clients/'.$client->id) }}" class="btn btn-primary btn-xs">подробнее</a>
                                                <a href="{{ admin_url('clients/delete/'.$client->id) }}" class="btn btn-danger btn-xs delete_item"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div><!-- /.box-body -->

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