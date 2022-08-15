<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Admin</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Role Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('create-role') }}">Create Role</a></li>
                        <li><a href="{{ route('manage-role') }}">Manage Role</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>User Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('create-user') }}">Create User</a></li>
                        <li><a href="{{ route('manage-user') }}">Manage User</a></li>
                    </ul>
                </li>

                <li class="menu-title">Teacher Module</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Teacher</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add-teacher') }}">Add Teacher</a></li>
                        <li><a href="{{ route('manage-teacher') }}">Manage Teacher</a></li>
                    </ul>
                </li>

                <li class="menu-title">Student Module</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Student</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('create-student') }}">Add Student Info</a></li>
                        <li><a href="{{ route('create-student') }}">Manage Student</a></li>
                    </ul>
                </li>

                <li class="menu-title">Subject Module</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Subjects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="">Add Subject</a></li>
                        <li><a href="">Manage Subjects</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
