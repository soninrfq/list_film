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
                <h1>Data Member</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="indeks.php?hal=home">Home</a></li>
                <li class="breadcrumb-item active">Data Member</li>
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
                            <a href="indeks.php?hal=member_form" class="btn btn-primary mb-3"><i class="fas fa-user"></i>  Tambah Member</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fullname</th>
                                        <th>E-mail</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $a = 1;
                                    $obj = new Member();
                                    $rs = $obj->getAll();
                                    foreach($rs as $m){
                                    ?>
                                    <tr>
                                        <td><?= $a++ ?></td>
                                        <td><?= $m['fullname'] ?></td>
                                        <td><?= $m['email'] ?></td>
                                        <td><?= $m['username'] ?></td>
                                        <td><?= $m['password'] ?></td>
                                        <td><?= $m['role'] ?></td>
                                        <td><?= $m['foto'] ?></td>
                                        <td> 
                                            <div class="row">
                                                <a href="indeks.php?hal=member_form_edit&id=<?= $m['id']; ?>"><button class="btn btn-block btn-success"><i class="fas fa-edit"></i></button></a>
                                                
                                                <button class="btn btn-block btn-danger col-sm-6"><i class="fas fa-trash"></i></button>
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