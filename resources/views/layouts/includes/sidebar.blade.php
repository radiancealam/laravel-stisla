<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">ZUM</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">ZM</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ $title == 'Dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin.home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            <li class="dropdown {{ $title == 'Manage Ticket' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-ticket-alt"></i>
                    <span>Ticket</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ $title == 'Manage Ticket' ? 'active' : '' }}"><a class="nav-link" href="{{ route('ticket.index') }}">Manage Ticket</a></li>
                </ul>
            </li>
            <li class="dropdown {{ $title == 'Manage User' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
                    <span>User</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ $title == 'Manage User' ? 'active' : '' }}"><a class="nav-link" href="{{ route('user.index') }}">Manage User</a></li>
                </ul>
            </li>
            <li class="dropdown {{ $title == 'Manage Department' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-building"></i>
                    <span>Department</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ $title == 'Manage Department' ? 'active' : '' }}"><a class="nav-link" href="{{ route('department.index') }}">Manage Department</a></li>
                </ul>
            </li>
            <li class="dropdown {{ $title == 'Manage Priority' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-flag"></i>
                    <span>Priority</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ $title == 'Manage Priority' ? 'active' : '' }}"><a class="nav-link" href="{{ route('priority.index') }}">Manage Priority</a></li>
                </ul>
            </li>
            <li class="dropdown {{ $title == 'Manage Status' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard-check"></i>
                    <span>Status</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ $title == 'Manage Status' ? 'active' : '' }}"><a class="nav-link" href="{{ route('status.index') }}">Manage Status</a></li>
                </ul>
            </li>
            <li class="dropdown {{ $title == 'Manage Problem' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-code"></i>
                    <span>Problem Code</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ $title == 'Manage Problem' ? 'active' : '' }}"><a class="nav-link" href="{{ route('problem.index') }}">Manage Problem Code</a></li>
                </ul>
            </li>
            <li class="dropdown {{ $title == 'Manage Media' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-network-wired"></i>
                    <span>Media</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ $title == 'Manage Media' ? 'active' : '' }}"><a class="nav-link" href="{{ route('media.index') }}">Manage Media</a></li>
                </ul>
            </li>
    </aside>
</div>
