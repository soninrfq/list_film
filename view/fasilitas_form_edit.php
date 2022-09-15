<?php
$id = $_REQUEST['id'];
$obj = new Fasilitas();
$data = $obj->getFasilitas($id);
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
                <h3 class="card-title">Input Data Studio</h3>
              </div>
              <div class="card-body">
                <form action="fasilitasController.php" method="post">
                    <div class="input-group mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                        <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                        </div>
                    <input type="text" name="nama" class="form-control" placeholder="<?php echo $data['nama'] ?>">
                    </div>

                    <div class="input-group mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                        </div>
                    <input type="text" name="keterangan" class="form-control" placeholder="<?php echo $data['keterangan'] ?>">
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