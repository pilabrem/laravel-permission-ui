<tr data-entry-id="{{ $user->id }}">
    <td></td>

    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
        @foreach ($user->roles()->pluck('name') as $role)
            <span class="label label-info label-many">{{ $role }}</span>
        @endforeach
    </td>
    <td>
        <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
        {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
            'route' => ['admin.users.destroy', $user->id])) !!}
        {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
        {!! Form::close() !!}
    </td>

</tr>
