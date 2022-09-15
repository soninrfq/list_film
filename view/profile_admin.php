<?php
include_once 'models/Member.php';
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
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="indeks.php?hal=home">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Soni Nurafiq</h3>

                <p class="text-muted text-center">Admin</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-user"></i> Fullname</strong> &ensp;:
                &emsp; <span class="text-muted">fd<?php $data['fullname'] ?></span>

                <hr>
                <strong><i class="fas fa-envelope"></i> E-mail</strong> &ensp;:
                &emsp; <span class="text-muted">Sa<?php $data['email'] ?> d</span>

                <hr>

                <strong><i class="fas fa-user"></i> Username</strong> &ensp;:
                &emsp; <span class="text-muted">Sa</span>

                <hr>

                <strong><i class="fas fa-user"></i> Role</strong> &ensp;:
                &emsp; <span class="text-muted">Sa</span>

                <hr>

                <strong><i class="fas fa-image"></i> Foto</strong> &ensp;:
                &emsp; <span class="text-muted">Sa</span>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>