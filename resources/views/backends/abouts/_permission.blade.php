<div class="form-group">
    {!! Form::label('permission', trans('role.permissions'), ['class' => 'control-label']) !!}
    <div class="pull-right">
        {!! Form::checkbox('', null, null, ['class' => 'permissions']) !!}
        {{ trans('role.check_all') }}
    </div>
    <br>
    <div class="container-fluid permissions">
        @foreach(config('permissions') as $key => $permissionList)
            {!! Form::checkbox('', null, null, ['class' => $key]) !!}
            {!! Form::label('permission.' . $key, trans('role.permission_list.' . $key), ['class' => 'control-label']) !!}
            <div class="form-group {{ $key }}">
                @foreach($permissionList as $permission)
                    <div class="row col-md-offset-1">
                        @if (isset($rolePermissions))
                            {!! Form::checkbox('permissions[]', $permission, in_array($permission, $rolePermissions)) !!}
                        @else
                            {!! Form::checkbox('permissions[]', $permission) !!}
                        @endif
                        {{ $permission }}
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
