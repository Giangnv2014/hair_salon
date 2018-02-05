@foreach ($data as $item)
    <tr>
        <td class="text-center">
            {{-- @can('permission', 'role.edit') --}}
                <a class="btn btn-xs btn-default"
                    href="#">
                    {{ trans('global.btn.edit') }}
                </a>
            {{-- @endcan --}}
            {{-- @can('permission', 'role.delete') --}}
                <div class="btn btn-xs btn-danger btn-delete"
                    data-msgconfirmdel="{{ trans('global.message.confirm_del') }}"
                    data-url="#">
                    {{ trans('global.btn.delete') }}
                </div>
            {{-- @endcan --}}
        </td>
        <td>{{ $item->title }}</td>
        <td class="col-md-4">
            @if ($item->image)
                <img src="{{ $item->image }}">
            @endif
            {{ $item->content }}
        </td>
        <td>{{ $item->stylist_id }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->user_id }}</td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->updated_at }}</td>
    </tr>
@endforeach
