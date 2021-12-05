    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/img/logo.png">
        </div>
        <div class="info">
          <a href="#" class="d-block">MEDICAL CHECK-UP</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= site_url('Dashboard/index'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('Dashboard/pasien'); ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('Dashboard/data_checkup'); ?>"" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Data Check-Up
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>