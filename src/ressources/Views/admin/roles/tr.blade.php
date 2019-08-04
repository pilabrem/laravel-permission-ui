<tr data-entry-id="{{ $role->id }}">
    <td></td>
    <td>{{ $role->name }}</td>
    <td>
        @foreach ($role->permissions()->pluck('name') as $permission)
            <span class="label label-info label-many">@lang($permission)</span>
        @endforeach
    </td>
    <td>
        <a href="{{ route('admin.roles.edit',[$role->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
        {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
            'route' => ['admin.roles.destroy', $role->id])) !!}
        {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
        {!! Form::close() !!}
    </td>
</tr>
