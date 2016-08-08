@extends('admin.dashboard.layout')

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

                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 col-xs-12">

                                    <form role="form" method="post" action="{{ admin_url('product/'.$product['id']) }}" enctype="multipart/form-data">
                                        <div class="box-body">

                                            <div class="form-group {{ $errors->has('picture') ? 'has-error' : '' }}">
                                                <label for="picture">Картинка <span style="color: red">*</span></label>
                                                <input type="file" class="form-control" id="picture" name="picture">
                                                {!! $errors->first('picture', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>

                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                <label for="name">Название <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product['name']) }}">
                                                {!! $errors->first('name', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>

                                            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                                                <label for="category_id">Категория <span style="color: red">*</span></label>

                                                <select name="category_id" id="category_id" class="form-control">
                                                    <option value="">---</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" {{ $category->id == old('category_id', $product['category_id']) ? 'selected' : null }}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('category_id', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>

                                            <div class="form-group {{ $errors->has('sum') ? 'has-error' : '' }}">
                                                <label for="sum">Стоимость <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" id="sum" name="sum" value="{{ old('sum', $product['sum']) }}">
                                                {!! $errors->first('sum', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>

                                            <div class="form-group {{ $errors->has('percentage') ? 'has-error' : '' }}">
                                                <label for="percentage">Скидка</label>
                                                <input type="text" class="form-control" id="percentage" name="percentage" value="{{ old('percentage', $product['percentage']) }}">
                                                {!! $errors->first('percentage', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>

                                            <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                                                <label for="amount">Количество</label>
                                                <input type="text" class="form-control" id="amount" name="amount" value="{{ old('amount', $product['amount']) }}">
                                                {!! $errors->first('amount', '<span id="helpBlock" class="help-block">:message</span>') !!}
                                            </div>

                                            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                <label for="description">Описание</label>
                                                <textarea name="description" id="description" rows="5" class="form-control">{{ old('description', $product['description']) }}</textarea>
                                                {!! $errors->first('description', '<span id="helpBlock" class="help-block">:message</span>') !!}
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