<aside class="bg-green-anv main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="d-flex justify-content-center my-3">
        <a href="#" class="brand-link">
            <h3 class="brand-text text-center font-weight-bold">EPTA Dashboard</h3>
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- Admin Features --}}
                @if (auth()->user()->role === 'Admin')
                    <li class="nav-header">ADMIN FEATURES</li>
                    <li class="nav-item">
                        <a href="{{ route('participants') }}" class="nav-link">
                            <i class="fas fa-user-friends nav-icon"></i>
                            <p>Participants list</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('verification') }}" class="nav-link">
                            <i class="fas fa-check-circle nav-icon"></i>
                            <p>Verification Page</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-plus-circle nav-icon"></i>
                            <p>Attendance & Agenda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-bullhorn nav-icon"></i>
                            <p>Announcement</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-address-book nav-icon"></i>
                            <p>Submission</p>
                        </a>
                    </li>
                @endif
                <li class="nav-header">MAIN DASHBOARD</li>
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Main menu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-calendar-week"></i>
                        <p>
                            All agenda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Learning Module
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                            FAQ
                        </p>
                    </a>
                </li>
                <li class="nav-header">PROFILE SETTINGS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <p>Profile</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
