<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('admin/home') ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?= ($this->uri->segment(2) == 'Home')? 'active' : '' ?>">
    <a class="nav-link" href="<?= site_url('Admin/Home') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
<!--   <div class="sidebar-heading">
    Management Produk
  </div> -->

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item 
    <?= ($this->uri->segment(2) == 'Produk')? 'active' : '' ?>
      <?= ($this->uri->segment(2) == 'Warna')? 'active' : '' ?>
      <?= ($this->uri->segment(2) == 'Kategori')? 'active' : '' ?>
      <?= ($this->uri->segment(2) == 'Merk')? 'active' : '' ?>
     ">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-table"></i>
      <span>Katalog</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Menu :</h6>
        <a class="collapse-item" href="<?= site_url('Admin/Produk') ?>">Produk</a>
        <a class="collapse-item" href="<?= site_url('Admin/Produk') ?>">Kategori</a>
        <a class="collapse-item" href="<?= site_url('Admin/Produk') ?>">Merk</a>
        <a class="collapse-item" href="<?= site_url('Admin/Warna') ?>">Warna</a>
        <!-- <a class="collapse-item" href="cards.html">Warna</a> -->
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Management Users
  </div>

  <!-- Nav Item - Charts -->
  <li class="nav-item <?= ($this->uri->segment(2) == 'Mitra')? 'active' : '' ?>">
    <a class="nav-link" href="<?= site_url('Admin/Mitra') ?>">
      <i class="fas fa-fw fa-users"></i>
      <span>Mitra</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item <?= ($this->uri->segment(2) == 'Admin')? 'active' : '' ?>">
    <a class="nav-link" href="<?= site_url('Admin/Admin') ?>">
      <i class="fas fa-fw fa-user"></i>
      <span>Admin</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

<!--   <div class="sidebar-heading">
    Management Pembayaran
  </div> -->

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item 
    <?= ($this->uri->segment(2) == 'Order')? 'active' : '' ?>
    <?= ($this->uri->segment(2) == 'Shopping_cart')? 'active' : '' ?>
    <?= ($this->uri->segment(2) == 'Topup_saldo')? 'active' : '' ?>
    <?= ($this->uri->segment(2) == 'Penarikan_saldo')? 'active' : '' ?>
    <?= ($this->uri->segment(2) == 'Konfirmasi_pembayaran')? 'active' : '' ?>
  ">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksi" aria-expanded="true" aria-controls="collapseTransaksi">
      <i class="fas fa-fw fa-exchange-alt"></i>
      <span>Transaksi</span>
    </a>
    <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Menu :</h6>
        <a class="collapse-item" href="<?= site_url('Admin/Admin') ?>">Order</a>
        <a class="collapse-item" href="<?= site_url('Admin/Admin') ?>">Shopping Cart</a>
        <a class="collapse-item" href="<?= site_url('Admin/Admin') ?>">Top up saldo</a>
        <a class="collapse-item" href="<?= site_url('Admin/Admin') ?>">Penarikan Saldo</a>
        <a class="collapse-item" href="<?= site_url('Admin/Admin') ?>">Konfirmasi Pembayaran</a>
        <!-- <a class="collapse-item" href="cards.html">Warna</a> -->
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item <?= ($this->uri->segment(2) == 'Profile')? 'active' : '' ?> ">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-cog"></i>
      <span>Setting</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Menu :</h6>
        <a class="collapse-item" href="<?= site_url('Admin/Profile') ?>">
          <i class="fas fa-user fa-sm fa-fw mr-2"></i>
          Profile
        </a>
        <!-- <div class="collapse-divider"></div> -->
        <hr>
        <a class="collapse-item" href="register.html">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> 
          Logout
        </a>
        <!-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a> -->
      </div>
    </div>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>