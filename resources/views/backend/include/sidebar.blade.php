<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{ route('admin.home') }} ">
            <div class="logo-img">
               <img src="{{ asset('backend/img/auth/logo3.png') }} " class="header-brand-img" alt="lavalite"> 
            </div>
        </a>
        {{-- <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button> --}}
    </div>
    
    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item active">
                    <a href="{{ route('admin.home') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                </div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Admin</span></a>
                    <div class="submenu-content">
                        <a href="{{ route('admin.profile') }} " class="menu-item">Profile</a>
                    </div>
                </div>
                <div class="nav-item active">
                    <a href="{{ route('MngUser',['action' => 'user'])}}"><i class="ik ik-bar-chart-2"></i><span>User</span></a>
                </div>
                <div class="nav-lavel">UI Element</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>School</span></a>
                    <div class="submenu-content">
                        <a href="{{ route('MngSchool',['action' => 'school'])}}" class="menu-item">data</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>