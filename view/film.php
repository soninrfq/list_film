    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php 
                            require_once 'models/Film.php';
                            $obj = new Film();
                            $f14 = $obj->getFilm14();
                            ?>
                            <div class="hero__text">
                                <div class="label"><?php echo $f14['status'] ?></div>
                                <h2><?php echo $f14['judul'] ?></h2>
                                <p><?php echo $f14['produksi'] ?></p>
                                <a href="index.php?hal=film-watching&id=14"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-3.png">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php 
                            require_once 'models/Film.php';
                            $obj = new Film();
                            $f4 = $obj->getFilm4();
                            ?>
                            <div class="hero__text">
                                <div class="label"><?php echo $f4['status'] ?></div>
                                <h2><?php echo $f4['judul'] ?></h2>
                                <p><?php echo $f4['produksi'] ?></p>
                                <a href="index.php?hal=film-watching&id=4"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-4.png">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php 
                            require_once 'models/Film.php';
                            $obj = new Film();
                            $f1 = $obj->getFilm1();
                            ?>
                            <div class="hero__text">
                                <div class="label"><?php echo $f1['status'] ?></div>
                                <h2><?php echo $f1['judul'] ?></h2>
                                <p><?php echo $f1['produksi'] ?></p>
                                <a href="index.php?hal=film-watching&id=1"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Live Show</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $obj = new Film();
                            //panggil fungsi menampilkan data fasilitas
                            $rs = $obj->getAll();
                            foreach($rs as $f){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/film/<?= $f['id'] ?>.jpg">
                                        <div class="ep"><?= $f['status'] ?></div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li><?= $f['idgenre']; ?>s</li>
                                        </ul>
                                        <h5><a href="index.php?hal=film-details&id=<?= $f['id'] ?>"><?= $f['judul'] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->