<?php
session_start();
require_once 'koneksi_db.php';
require_once 'models/Member.php';
//1. tangkap request dari form
$user = $_POST['username'];
$pass = $_POST['password'];
//2. masukkan ke data array
$data = [
  $user, // ? 1
  $pass  // ? 2
];
//3. ciptakan object dari class Fasilitas
$obj = new Member();
$rs = $obj->cekLogin($data);
$mr = $obj->getMembers();
$_SESSION['MEMBER'] = $rs;

  if($rs['role']=='admin' || $rs['role']=='manager'){ //sukses login
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "admin" || "manager";
    header('location:indeks.php?hal=home&id='.$mr["id"]);
  } else if($rs['role']=='penonton'){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "penonton";
    header('location:index.php?hal=film');
  } else{ //gagal login
    header('location:index.php?hal=gagal_login');
  }    
