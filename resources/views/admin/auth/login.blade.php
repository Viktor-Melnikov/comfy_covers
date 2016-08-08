@extends('admin.auth.layout')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ admin_url('') }}"><b>Comfy</b> Covers</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Войти в панель управления</p>

            <form action="{{ admin_url('auth/login') }}" method="post">

                <div class="form-group {{ $errors->has('login') ? 'has-error' : '' }} has-feedback">
                    <input type="text" class="form-control" name="login" id="login" value="{{ old('login') }}" placeholder="Email">
                    {!! $errors->first('login', '<span id="helpBlock" class="help-block">:message</span>') !!}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }} has-feedback">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Пароль">
                    {!! $errors->first('password', '<span id="helpBlock" class="help-block">:message</span>') !!}
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Войти</button>
                    </div><!-- /.col -->
                </div>
            </form>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop