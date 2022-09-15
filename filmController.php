<?php
require_once 'koneksi_db.php';
require_once 'models/Film.php';
//1. tangkap request dari form
$judul = $_POST['judul'];
$studio = $_POST['genre'];
$tayang = $_POST['idstudio'];
$durasi = $_POST['produksi'];
$status = $_POST['foto'];
$foto = $_POST['deskripsi'];
$keterangan = $_POST['keterangan'];
$st = $_POST['status'];
$tombol = $_POST['proses'];
//2. masukkan ke data array
$data = [
  $judul, $studio,  $tayang,
  $durasi, $status, $foto,
  $keterangan, $st
];
//3. ciptakan object dari class Gedung
$obj = new Film();
switch ($tombol) {
  case 'ubah':
    $data[] = $_POST['idx']; // ? ke-4 where id=?
    $obj->ubah($data);
    break;
    case 'hapus':
        unset($data);
        $data[] = $_POST['idx']; // ? ke-4 where id=?
        $obj->hapus($data);
        break;
    default:
        header('location:indeks.php?hal=film_admin');
}
//4. landing page
header('location:indeks.php?hal=film_admin');