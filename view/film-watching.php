<?php
include_once 'models/Film.php';
$member = $_SESSION['MEMBER'];
if(isset($member)){
//tangkap request di url
$id = $_REQUEST['id'];
//ciptakan object
$obj = new Film();
$rs = $obj->getFilm($id); //panggil fungsi detail
// looping
?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php?hal=home"><i class="fa fa-home"></i> Home</a>
                        <a href="./index.php?hal=film">Film</a>
                        <a href="index.php?hal=film-details&id=<?= $rs['id'] ?>">Watch</a>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="anime__video__player">
                        <?php echo $rs['keterangan']; ?>
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