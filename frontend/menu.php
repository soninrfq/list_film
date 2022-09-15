
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php?hal=home">Homepage</a></li>
                                <li><a href="./index.php?hal=film">Film</a></li>
                                <li><a href="./index.php?hal=kategori">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./index.php?hal=kategori">Categories</a></li>
                                        <li><a href="./index.php?hal=film-details">Film Details</a></li>
                                        <li><a href="./index.php?hal=film-watching">Film Watching</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="#">Contacts</a></li> -->
                                <?php
                                //membuat var session
                                $member = $_SESSION['MEMBER'];
                                if(!isset($member)){ //jika belum login, tampil menu login
                                ?>
                                <li><a href="./index.php?hal=login">Login</a></li>
                                <?php 
                                } else { //jika sudah login, tampil data user
                                ?>
                                    <li><a href="#"><?= $member['fullname']; ?> - <?= $member['role']; ?></a>
                                        <ul class="dropdown">
                                            <?php
                                            $role = $member['role'];
                                            if($role == 'admin' || $role == 'manager') {
                                            ?>
                                            <li><a href="./index.php?hal=member">Kelola User</a></li>
                                            <?php } ?>
                                            <li><a href="./index.php?hal=profile">Profile</a></li>
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>    
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./index.php?hal=login"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
