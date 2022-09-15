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
                <form action="studioController.php" method="post">
                  <div class="input-group mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Studio</label>
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                    <input type="text" name="kode" id="kode" class="form-control" placeholder="Kode">
                  </div>

                  <div class="input-group mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Studio</label>
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                  </div>

                  <div class="card-footer">
                      <button type="submit" name="proses" value="simpan" class="btn btn-primary justify-content-center">Simpan</button>
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