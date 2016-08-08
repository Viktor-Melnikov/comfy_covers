@extends('admin.dashboard.layout')

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

                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 col-xs-12">

                                    @if(Session::has('result'))
                                        <div class="alert alert-{{ Session::get('result.status') ? 'success' : 'warning' }} alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h4>
                                                <i class="icon fa fa-{{ Session::get('result.status') ? 'check' : 'warning' }}"></i>
                                                Выполнение операции
                                            </h4>
                                            {{ Session::get('result.msg') }}
                                        </div>
                                    @endif

                                    <form role="form" method="post" action="{{ admin_url('clients/add') }}">
                                        <div class="box-body">
                                            <div class="form-group {{ $errors->has('surname') ? 'has-error' : '' }}">
                                                <label for="surname">Фамилия <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname') }}">
                                                {!! $errors->first('surname', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                <label for="name">Имя <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                                {!! $errors->first('name', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                                <label for="phone">Телефон <span style="color: red">*</span></label>
                                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                                {!! $errors->first('phone', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                                {!! $errors->first('email', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>

                                            <span style="color: red">*</span> - поля обязательные для заполнения

                                        </div><!-- /.box-body -->

                                        <div class="box-footer text-center">

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                            <button type="submit" class="btn btn-primary">Сохранить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection