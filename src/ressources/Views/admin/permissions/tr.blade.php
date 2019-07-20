<tr data-entry-id="{{ $permission->id }}">
    <td></td>
    <td>{{ $permission->name }}</td>
    <td>
        @can('gerer administrateurs')
        <a href="{{ route('admin.permissions.edit',[$permission->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
        {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
            'route' => ['admin.permissions.destroy', $permission->id])) !!}
        {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
        {!! Form::close() !!}
        @endcan
    </td>

</tr>
