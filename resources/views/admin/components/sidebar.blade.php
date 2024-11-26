<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                </li>
                <li class="{{ request()->routeIs('profile') ? 'active' : '' }}">
                    <a href="{{ route('users.show', Session::get('user')->id) }}"><i class="la la-user"></i>
                        <span>Profile</span></a>
                </li>
                @can('View Corporate')
                    <li class="{{ request()->routeIs('corporate.index') ? 'active' : '' }}">
                        <a href="{{ route('corporate.index') }}"><i class="la la-building"></i> <span>Corporates</span>
                        </a>
                    </li>
                @endcan
                @if (auth()->user()->hasRole('Admin'))
                    <li class="{{ request()->routeIs('users') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}"><i class="la la-user-plus"></i> <span>Users</span>
                        </a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-cog"></i> <span> Settings</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li class="{{ request()->routeIs('roles.index') ? 'active' : '' }}"><a
                                    href="{{ route('roles.index') }}">Roles</a></li>
                            <li class="{{ request()->routeIs('permissions.index') ? 'active' : '' }}"><a
                                    href="{{ route('permissions.index') }}">Permissions</a></li>
                            <li class="{{ request()->routeIs('modules.index') ? 'active' : '' }}"><a
                                    href="{{ route('modules.index') }}">Modules</a></li>
                        </ul>
                    </li>
                @endif
                <li class="{{ request()->routeIs('change.password.view') ? 'active' : '' }}">
                    <a href="{{ route('change.password.view') }}"><i class="la la-lock"></i> <span>Change
                            Password</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
