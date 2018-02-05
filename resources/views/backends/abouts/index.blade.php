@extends('backends.layouts.default')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ trans('global.labels.list') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">{{ trans('global.labels.action') }}</th>
                            <th>{{ trans('about.title') }}</th>
                            <th>{{ trans('about.content') }}</th>
                            <th>{{ trans('about.stylist') }}</th>
                            <th>{{ trans('about.type') }}</th>
                            <th>{{ trans('about.user') }}</th>
                            <th>{{ trans('about.created_at') }}</th>
                            <th>{{ trans('about.updated_at') }}</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @include('backends.abouts._list', ['data' => $abouts])
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix text-center paginate">
                @include('backends.abouts._paginate')
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>

@endsection
