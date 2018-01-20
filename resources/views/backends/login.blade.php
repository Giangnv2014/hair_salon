@extends('backends.layouts.login')

@section('content')

<div class="login-logo">
    <a href="/"><b>{{ config('app.name') }}</b></a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg">{{ trans('login.message') }}</p>
    @include('backends.layouts.includes.notice_messages')

    {!! Form::open(['url' => action('Admin\SessionController@store'), 'method' => 'post']) !!}
        <div class="form-group has-feedback">
            {!!
                Form::text(
                    'email',
                    null,
                    ['type' => 'email', 'class' => 'form-control', 'placeholder' => trans('login.email')]
                )
            !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            {!! Form::password('password', ['class' => 'form-control ', 'placeholder' => trans('login.password')]) !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-xs-offset-8 col-xs-4">
                {!! Form::submit(trans('login.sign_in'), ['class' => 'btn btn-primary btn-block btn-flat']) !!}
            </div>
            <!-- /.col -->
        </div>
    {!! Form::close() !!}
</div>

@stop
