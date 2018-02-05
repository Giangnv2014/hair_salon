@extends('layouts.default')

@section('content')

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('role.edit_page_title') }}</h3>
    </div>
    <div class="box-body">
        {!! Form::open(['action' => ['Admin\RolesController@update', $role->id], 'method' => 'PUT']) !!}
            <div class="col-md-offset-2 col-md-8">
                <div class="form-group {{ has_errors(['title'], $errors) ? 'has-error' : '' }}">
                    {!! Form::label('title', trans('role.title_field')) !!}
                    {!! Form::text('title', $role->title, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('access_admin', trans('role.access_admin')) !!}
                    <div class="container-fluid">
                        {!! Form::checkbox('access_admin', true, $role->access_admin) !!}
                        {{ trans('role.access_admin') }}
                    </div>
                </div>

                @include('admin.roles._permission', ['rolePermissions' => $role->permissions])

                {!! Form::submit(trans('global.btn.submit'), ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
<!-- /.box -->

@endsection

@section('script')
    {!! Html::script('assets/js/admin/role.js') !!}
@endsection
