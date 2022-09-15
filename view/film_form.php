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
                <h3 class="card-title">Input Data Film</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Film</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                    </div>
                  <input type="text" class="form-control" placeholder="Judul Film">
                </div>

                <div class="form-group">
                  <div class="input-group mb-3">
                    <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Genre</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                      <option>Horror</option>
                      <option>Drama</option>
                      <option>Action</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-3">
                    <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Studio</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                      <option>Studio 1</option>
                      <option>Studio 2</option>
                      <option>Studio 3</option>
                      <option>Studio 4</option>
                      <option>Studio 5</option>
                    </select>
                  </div>
                </div>

                <div class="input-group mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Produksi</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                    </div>
                  <input type="email" class="form-control" placeholder="Produksi">
                </div>

                <div class="input-group mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-images"></i></span>
                    </div>
                  <input type="email" class="form-control" placeholder="Foto">
                </div>

                <div class="input-group mb-3">
                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                    <!-- textarea -->
                    <textarea class="form-control" rows="3" placeholder="Deskripsi"></textarea>
                </div>

                <div class="input-group mb-3">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <!-- textarea -->
                    <textarea class="form-control" rows="3" placeholder="Keterangan"></textarea>
                </div>
                
                <div class="input-group mb-3">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <select class="form-control select2">
                        <option>Trending</option>
                        <option>Popular</option>
                        <option>Coming Soon</option>
                    </select>
                </div>

                <div class="card-footer">
                    <button type="submit" name="proses" value="simpan" class="btn btn-primary justify-content-center">Submit</button>
                </div>
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