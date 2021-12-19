<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="header mt-2 ms-2 text-white">
        <span><h3>Permintaan Barang</h3></span>
    </div>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <router-link to="manage-dataBarang" class="nav-link">
            <i class="nav-icon fas fa-warehouse blue"></i>
            <p>
              Stock Barang
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="list-permintaan-a" class="nav-link">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>
              Data Permintaan Material
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="data-user" class="nav-link">
            <i class="nav-icon green fas fa-users"></i>
            <p>
              Data User
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt red"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
