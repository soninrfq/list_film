<?php
$id = $_REQUEST['id'];
$obj = new Member();
$data = $obj->getMember($id);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="indeks.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Member</h3>
              </div>
              <div class="card-body">
                <form action="membersController.php" method="post">
                    <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Fullname</label>
                            <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                            </div>
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="<?php echo $data['fullname'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo $data['email'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                        <input type="text" name="username" id="username" class="form-control" placeholder="<?php echo $data['username'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                        <input type="text" name="password" id="password" class="form-control" placeholder="SHA1(MD5(<?php echo $data['password'] ?>))">
                    </div>
                    
                    <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                        <input type="text" name="role" id="role" class="form-control" placeholder="<?php echo $data['username'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-image"></i></span>
                            </div>
                        <input type="text" name="foto" id="foto" class="form-control" placeholder="<?php echo $data['foto'] ?>">
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="proses" value="ubah" class="btn btn-primary justify-content-center">Ubah</button>
                        <input required name="idx" type="hidden" value="<?= $id ?>">
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->