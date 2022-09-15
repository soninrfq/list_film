<?php
require_once 'koneksi_db.php';
require_once 'models/Fasilitas.php';
//1. tangkap request dari form
$nama = $_POST['nama'];
$ket = $_POST['keterangan'];
$tombol = $_POST['proses'];
//2. masukkan ke data array
$data = [
  $nama, // ? 1
  $ket  // ? 2
];
//3. ciptakan object dari class Fasilitas
$obj = new Fasilitas();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        break;
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
        header('location:indeks.php?hal=fasilitas_admin');
}
//4. landing page
header('location:indeks.php?hal=fasilitas_admin');