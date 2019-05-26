<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-graduation-cap"></i> {{-- logo should be here --}}
    </div>
    <div class="sidebar-brand-text mx-3">DevUniv</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{route('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Learning
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categories" aria-expanded="true" aria-controls="categories">
            <i class="fas fa-clone"></i>
            <span>Categories</span>
          </a>
    <div id="categories" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{url('/admin/category')}}">List of Categories</a>
        <a class="collapse-item" href="{{url('/admin/category/create')}}">Create Category</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user-graduate"></i>
            <span>Courses</span>
          </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{url('/admin/course')}}">List of Courses</a>
        <a class="collapse-item" href="{{url('/admin/course/create')}}">Create a Course</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Academic
  </div>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="{{url('admin/student')}}">
              <i class="fas fa-fw fa-users"></i>
              <span>Students</span></a>
  </li>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('enrollment.index')}}">
              <i class="fas fa-fw fa-key"></i>
              <span>Enrollment</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">


  <!-- Heading -->
  <div class="sidebar-heading">
    Extra
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Reports</span>
          </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login Screens:</h6>
        <a class="collapse-item" href="/login">Login</a>
        <a class="collapse-item" href="/register">Register</a>
        <a class="collapse-item" href="/forgot-password">Forgot Password</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="404.html">404 Page</a>
        <a class="collapse-item active" href="blank.html">Blank Page</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="settings">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">


  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>