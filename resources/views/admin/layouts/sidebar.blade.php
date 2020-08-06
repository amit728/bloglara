    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AmiTech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="far fas fa-tachometer-alt nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('post.index')}}" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>Posts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('tag.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Tags</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('role.index')}}" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>Roles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('permission.index')}}" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>Permissions</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>