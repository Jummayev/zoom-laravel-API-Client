<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            @role('admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin-teacher-list') }}">
                        <i class="icon-grid menu-icon"></i>
                        <span class="menu-title">Teachers</span>
                    </a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-student-list') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Students</span>
                </a>
            </li>
            @endrole
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="icon-layout menu-icon"></i>
                    <span class="menu-title">UI Elements</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ URL::asset('template/pages/ui-features/buttons.html') }}">Buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ URL::asset('template/pages/ui-features/dropdowns.html') }}">Dropdowns</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ URL::asset('template/pages/ui-features/typography.html') }}">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
                    <span class="menu-title">Form elements</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{ URL::asset('template/pages/forms/basic_elements.html') }}">Basic Elements</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                    <i class="icon-bar-graph menu-icon"></i>
                    <span class="menu-title">Charts</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ URL::asset('template/pages/charts/chartjs.html') }}">ChartJs</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                    <i class="icon-grid-2 menu-icon"></i>
                    <span class="menu-title">Tables</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ URL::asset('template/pages/tables/basic-table.html') }}">Basic table</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                    <i class="icon-contract menu-icon"></i>
                    <span class="menu-title">Icons</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ URL::asset('template/pages/icons/mdi.html') }}">Mdi icons</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
