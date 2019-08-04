@inject('request', 'Illuminate\Http\Request')

@can('manage users')
<li class="treeview {{(Route::is('admin.users.*') || Route::is('admin.roles.*') || Route::is('admin.permissions.*')) ? 'active' : null}}">
    <a href="#">
        <i class="fa fa-users"></i>
        <span class="title">@lang('global.user-management.title')</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
            <a href="{{ route('admin.permissions.index') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    @lang('global.permissions.title')
                </span>
            </a>
        </li>
        <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
            <a href="{{ route('admin.roles.index') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    @lang('global.roles.title')
                </span>
            </a>
        </li>
        <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
            <a href="{{ route('admin.users.index') }}">
                <i class="fa fa-user"></i>
                <span class="title">
                    @lang('global.users.title')
                </span>
            </a>
        </li>
    </ul>
</li>
@endcan

<li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
    <a href="{{ route('auth.change_password') }}">
        <i class="fa fa-key"></i>
        <span class="title">@lang('global.change_password.title')</span>
    </a>
</li>
