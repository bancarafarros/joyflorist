<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('CDashboard') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">JOY FLORIST</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php echo $this->uri->segment(1) == 'CDashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?php echo base_url('CDashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori
            </div>

            <li class="nav-item <?php echo $this->uri->segment(3) == 'tampilDataBuketBunga' ? 'active' : '' ?>">
                <a class="nav-link" href="<?php echo base_url('/customer/CKategori/tampilDataBuketBunga') ?>">
                    <i class="fas fa-spa"></i>
                    <span>Buket Bunga</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?php echo $this->uri->segment(3) == 'tampilDataKaranganBunga' ? 'active' : '' ?>">
                <a class="nav-link" href="<?php echo base_url('/customer/CKategori/tampilDataKaranganBunga') ?>">
                    <i class="fab fa-flipboard"></i>
                    <span>Karangan Bunga</span></a>
            </li>

            <li class="nav-item <?php echo $this->uri->segment(3) == 'tampilDataHampers' ? 'active' : '' ?>">
                <a class="nav-link" href="<?php echo base_url('/customer/CKategori/tampilDataHampers') ?>">
                    <i class="fas fa-box-open"></i>
                    <span>Hampers</span></a>
            </li>

            <li class="nav-item <?php echo $this->uri->segment(3) == 'tampilDataBuketUang' ? 'active' : '' ?>">
                <a class="nav-link" href="<?php echo base_url('/customer/CKategori/tampilDataBuketUang') ?>">
                    <i class="fas fa-funnel-dollar"></i>
                    <span>Buket Uang</span></a>
            </li>

            <li class="nav-item <?php echo $this->uri->segment(3) == 'tampilDataBuketSnack' ? 'active' : '' ?>">
                <a class="nav-link" href="<?php echo base_url('/customer/CKategori/tampilDataBuketSnack') ?>">
                    <i class="fas fa-cookie-bite"></i>
                    <span>Buket Snack</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php $keranjang = 'Keranjang Belanja: ' . $this->cart->total_items() . ' items' ?>
                                    <?php echo anchor('customer/CCustomer/detailKeranjang', $keranjang) ?>
                                </li>
                            </ul>
                        </div>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <ul class="nav navbar-nav navbar-right mt-2">
                            <?php if ($this->session->userdata('nama')) { ?>
                                <li>
                                    <div>Selamat Datang, <?php echo $this->session->userdata('username') ?></div>
                                </li>
                                <div class="topbar-divider d-none d-sm-block"></div>
                                <li class="ml-2"><?php echo anchor('CAuth/logout', 'Logout') ?></li>
                            <?php } else { ?>
                                <li><?php echo anchor('CAuth/', 'Login') ?></li>
                            <?php } ?>

                        </ul>

                    </ul>

                </nav>
                <!-- End of Topbar -->