
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php?hal=home"><i class="fa fa-home"></i> Home</a>
                        <a href="./index.php?hal=kategori">Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <a href="#horror"><h4>Horror</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="horror">
                            <?php
                            // ciptakan object dari class kategori ruangan
                            $obj = new Film();
                            //panggil fungsi menampilkan data kategori ruangan
                            $rs = $obj->getFilmGenre1();
                            foreach($rs as $k){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/film/<?= $k['id'] ?>.jpg">
                                        <div class="ep"><?= $k['status'] ?></div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="index.php?hal=film-details&id=<?= $k['id'] ?>"><?= $k['judul'] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <a href="#comedy"><h4>Comedy</h4></a>
                                    </div>
                                </div>>
                            </div>
                        </div>
                        <div class="row" id="comedy">
                            <?php
                            // ciptakan object dari class kategori ruangan
                            $obj = new Film();
                            //panggil fungsi menampilkan data kategori ruangan
                            $rs = $obj->getFilmGenre2();
                            foreach($rs as $k){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/film/<?= $k['id'] ?>.jpg">
                                        <div class="ep"><?= $k['status'] ?></div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="index.php?hal=film-details&id=<?= $k['id'] ?>"><?= $k['judul'] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <a href="#action"><h4>Action</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="action">
                            <?php
                            // ciptakan object dari class kategori ruangan
                            $obj = new Film();
                            //panggil fungsi menampilkan data kategori ruangan
                            $rs = $obj->getFilmGenre3();
                            foreach($rs as $k){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/film/<?= $k['id'] ?>.jpg">
                                        <div class="ep"><?= $k['status'] ?></div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="index.php?hal=film-details&id=<?= $k['id'] ?>"><?= $k['judul'] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <a href="#drama"><h4>Drama</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="drama">
                            <?php
                            // ciptakan object dari class kategori ruangan
                            $obj = new Film();
                            //panggil fungsi menampilkan data kategori ruangan
                            $rs = $obj->getFilmGenre4();
                            foreach($rs as $k){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/film/<?= $k['id'] ?>.jpg">
                                        <div class="ep"><?= $k['status'] ?></div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="index.php?hal=film-details&id=<?= $k['id'] ?>"><?= $k['judul'] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <a href="#romance"><h4>Romance</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="romance">
                            <?php
                            // ciptakan object dari class kategori ruangan
                            $obj = new Film();
                            //panggil fungsi menampilkan data kategori ruangan
                            $rs = $obj->getFilmGenre5();
                            foreach($rs as $k){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/film/<?= $k['id'] ?>.jpg">
                                        <div class="ep"><?= $k['status'] ?></div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="index.php?hal=film-details&id=<?= $k['id'] ?>"><?= $k['judul'] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <a href="#keluarga"><h4>Keluarga</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="keluarga">
                            <?php
                            // ciptakan object dari class kategori ruangan
                            $obj = new Film();
                            //panggil fungsi menampilkan data kategori ruangan
                            $rs = $obj->getFilmGenre6();
                            foreach($rs as $k){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/film/<?= $k['id'] ?>.jpg">
                                        <div class="ep"><?= $k['status'] ?></div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="index.php?hal=film-details&id=<?= $k['id'] ?>"><?= $k['judul'] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <a href="#adventure"><h4>Adventure</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="adventure">
                            <?php
                            // ciptakan object dari class kategori ruangan
                            $obj = new Film();
                            //panggil fungsi menampilkan data kategori ruangan
                            $rs = $obj->getFilmGenre7();
                            foreach($rs as $k){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/film/<?= $k['id'] ?>.jpg">
                                        <div class="ep"><?= $k['status'] ?></div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="index.php?hal=film-details&id=<?= $k['id'] ?>"><?= $k['judul'] ?></a></h5>
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