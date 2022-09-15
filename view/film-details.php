<?php
include_once 'models/Film.php';
//tangkap request di url
$id = $_REQUEST['id'];
//ciptakan object
$obj = new Film();
$rs = $obj->getFilm($id); //panggil fungsi detail
// looping
$member = $_SESSION['MEMBER'];
if(isset($member)){
?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php?hal=home"><i class="fa fa-home"></i> Home</a>
                        <a href="./index.php?hal=film">Film</a>
                        <span><?php echo $rs['judul']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="img/film/<?php echo $rs['id']; ?>.jpg">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?php echo $rs['judul']; ?></h3>
                                <span><?php echo $rs['produksi'] ?></span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p><?php echo $rs['deskripsi']; ?></p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> TV Series</li>
                                            <li><span>Studios:</span> <?php echo $rs['idstudio']; ?></li>
                                            <li><span>Status:</span> <?php echo $rs['status']; ?></li>
                                            <li><span>Genre:</span> <?php echo $rs['genre']; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <?php
                                        $obj = new Film();
                                        $fs = $obj->getFilms($id);
                                        ?>
                                        <ul>
                                            <li><span>Tayang:</span> <?php echo $fs['tayang']; ?></li>
                                            <li><span>Duration:</span> <?php echo $fs['durasi']; ?></li>
                                            <li><span>Quality:</span> HD</li>
                                            <li><span>Views:</span> 131,541</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="index.php?hal=film-watching&id=<?= $rs['id'] ?>" class="watch-btn"><span>Watch Now </span> <i
                                    class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Anime Section End -->
<?php 
}
else {
    include_once 'view/terlarang.php';
} 
?>