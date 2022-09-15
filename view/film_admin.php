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
                <h1>Data Film</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="indeks.php?hal=home">Home</a></li>
                <li class="breadcrumb-item active">Data Film</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    
                    <a href="indeks.php?hal=film_form" class="btn btn-primary mb-3"><i class="fas fa-film"></i>  Tambah Film</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Judul</th>
                                <th>ID Genre</th>
                                <th>Studio</th>
                                <th>Produksi</th>
                                <th>Foto</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = 1;
                            $obj = new Film();
                            $rs = $obj->getAll();
                            foreach($rs as $f){
                            ?>
                            <tr>
                                <td width="10px"><?= $a++ ?></td>
                                <td><?= $f['judul'] ?></td>
                                <td><?= $f['idgenre'] ?></td>
                                <td><?= $f['idstudio'] ?></td>
                                <td><?= $f['produksi'] ?></td>
                                <td><?= $f['foto'] ?></td>
                                <td><?= $f['deskripsi'] ?></td>
                                <td><?= $f['status'] ?></td>
                                <td>
                                    <a href="indeks.php?hal=film_form_edit&id=<?= $f['id']; ?>"><button class="btn btn-block btn-success">Edit</button></a>
                                    <hr>
                                    <button class="btn btn-block btn-danger">Delete</button>
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