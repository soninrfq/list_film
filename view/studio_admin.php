<?php
$id = $_REQUEST['id'];
$obj = new Film();
$data = $obj->getFilm($id);

$member = $_SESSION['MEMBER'];
if(isset($member)){
    if($role != 'penonton') {
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Studio</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="indeks.php?hal=home">Home</a></li>
                <li class="breadcrumb-item active">Data Studio</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <a href="indeks.php?hal=studio_form" class="btn btn-primary mb-3"><i class="fas fa-building"></i>  Tambah Studio</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:15px">#</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th style="width:120px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $a = 1;
                                    $obj = new Studio();
                                    $rs = $obj->getAll();
                                    foreach($rs as $s){
                                    ?>
                                    <tr>
                                        <td><?= $a++ ?></td>
                                        <td><?= $s['kode'] ?></td>
                                        <td><?= $s['nama'] ?></td>
                                        <td> 
                                            <div class="row">
                                                <a href="indeks.php?hal=studio_form_edit&id=<?= $s['id']; ?>"><button class="btn btn-block btn-success">Edit</button></a>
                                                &emsp;
                                                <button class="btn btn-block btn-danger col-sm-6">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php 
    } else {
        include_once 'views/terlarang_adm.php';
    }  
}
else {
    include_once 'views/terlarang_adm.php';
} 
?>