<?php
include_once 'models/Film.php';
//tangkap request di url
$id = $_REQUEST['judul'];
//ciptakan object
$obj = new Film();
$rs = $obj->getFilm($id); //panggil fungsi detail
// looping
?>
<!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/cinema.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Movie Watch</h2>
                        <p>Welcome to the official Movie Watch</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/film/2.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 19 Maret 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=2">Jakarta vs Everybody</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/film/3.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 19 Mei 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=3">Cinta Subuh</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/film/8.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 17 Februari 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=8">Pelangi Tanpa Warna</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/film/4.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 8 Juni 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=4">Jurassic World Dominion</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/film/15.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 23 Juni 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=15">Keluarga Cemara 2</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/film/11.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 28 Januari 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=11">The Ice Age Adventures of Buck Wild</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/film/1.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 30 April 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=1">KKN di Desa Penari</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/film/7.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 30 April 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=7">Kuntilanak 3</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/film/14.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 8 Juli 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=14">Thor: Love and Thunder</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/film/19.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 27 Januari 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=19">Ben & Jody</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/film/10.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 2 Maret 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=10">The Batman</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/film/9.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 5 Mei 2022</p>
                                    <h4><a href="index.php?hal=film-details&id=9">Doctor Strange in the Multiverse of Madness</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
