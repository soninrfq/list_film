<?php
session_start();
require_once 'koneksi_db.php';
require_once 'models/Member.php';
//1. tangkap request dari form
$full = $_POST['fullname'];
$mail = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['role'];
$foto = $_POST['foto'];
//2. masukkan ke data array
$data = [
  $full, $mail, $user, 
  $pass, $role, $foto
];
//3. ciptakan object dari class Member
$obj = new Member();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx']; // ? ke-4 where id=?
        $obj->ubah($data);
        break;
    case 'del':
        unset($data);
        $data[] = $_POST['idg'];
        $obj->hapus($data);
        break;
    default:
        header('location:indeks.php?hal=member_admin');
}
//4. landing page
header('location:indeks.php?hal=member_admin');