
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="indeks.php?hal=home" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <?php
                                //membuat var session
                                $member = $_SESSION['MEMBER'];
                                if(isset($member)){ //jika belum login, tampil menu login
                                ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="indeks.php?hal=home" class="d-block"><?= $member['fullname'] ?></a>
                </div>
            </div>
            <?php } ?>

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
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="indeks.php?hal=home" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="indeks.php?hal=film_admin" class="nav-link">
                            <i class="nav-icon fas fa-film"></i>
                            <p>Film</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="indeks.php?hal=studio_admin" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>Studio</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="indeks.php?hal=genre_admin" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Genre</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="indeks.php?hal=fasilitas_admin" class="nav-link">
                            <i class="nav-icon fas fa-tools"></i>
                            <p>Fasilitas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="indeks.php?hal=member_admin" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Member</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    <!-- /.sidebar -->
    </aside>
