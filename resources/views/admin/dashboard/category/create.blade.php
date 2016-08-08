@extends('admin.dashboard.layout')

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

                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 col-xs-12">

                                    <form role="form" method="post" action="{{ admin_url('category/add') }}">
                                        <div class="box-body">
                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                <label for="name">Название <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                                {!! $errors->first('name', '<span id="helpBlock" class="help-block">:message</span>') !!}
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