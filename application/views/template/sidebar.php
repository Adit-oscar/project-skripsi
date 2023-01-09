<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-3">
  <!-- Brand Logo -->
  <a href="<?php echo base_url() ?>home" class="brand-link">
    <img src="<?php echo base_url('assets/image') ?>/logo_sma.png" alt="SmaLogo" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light"><b>SMAN 1 HALONG</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-1">
      <ul class="nav nav-flat nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Menu Home -->
        <li class="nav-item">
          <a href="<?php echo base_url() ?>home" class="nav-link <?php if ($this->uri->segment(1) == 'home') echo 'bg-cyan' ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <!-- Menu Admin -->
        <li class="nav-item">
          <a href="<?php echo base_url('admin') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'admin') echo 'bg-cyan' ?>">
            <i class="nav-icon fas fa-user-circle"></i>
            <p>
              Admin
            </p>
          </a>
        </li>
        <!-- Menu Murid -->
        <li class="nav-item">
          <a href="<?php echo base_url() ?>murid" class="nav-link <?php if ($this->uri->segment(1) == 'murid') echo 'bg-cyan' ?>">
            <i class="nav-icon fas fa-user-friends"></i>
            <p>
              Murid
            </p>
          </a>
        </li>
        <!-- Menu Kriteria -->
        <li class="nav-item">
          <a href="<?php echo base_url() ?>kriteria" class="nav-link <?php if ($this->uri->segment(1) == 'kriteria') echo 'bg-cyan' ?>">
            <i class="nav-icon fas fa-book-open"></i>
            <p>
              Kriteria
            </p>
          </a>
        </li>
        <!-- Menu Penilaian -->
        <li class="nav-item">
          <a href="<?php echo base_url() ?>penilaian" class="nav-link <?php if ($this->uri->segment(1) == 'penilaian') echo 'bg-cyan' ?>">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Penilaian
            </p>
          </a>
        </li>
        <!-- Menu Rating Kecocokan -->
        <li class="nav-item">
          <a href="<?php echo base_url() ?>rating" class="nav-link <?php if ($this->uri->segment(1) == 'rating') echo 'bg-cyan' ?>">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
              Rating Kecocokan
            </p>
          </a>
        </li>
        <!-- <-- Menu Hasil -->
        <li class="nav-item">
          <a href="<?php echo base_url() ?>hasil" class="nav-link <?php if ($this->uri->segment(1) == 'hasil') echo 'bg-cyan' ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Hasil
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>