<?php
require_once 'koneksi_db.php';
require_once 'models/Studio.php';
//1. tangkap request dari form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tombol = $_POST['proses'];
if(strlen($_POST['kode'])>5){
    echo "KODE yang Diinput Terlalu Panjang, Harap Isi Kode dengan 5 karakter";
} else {}
    
//2. masukkan ke data array
$data = [
  $kode, // ? 1
  $nama  // ? 2
];
//3. ciptakan object dari class Studio
$obj = new Studio();
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
        header('location:indeks.php?hal=studio_admin');
}
//4. landing page
header('location:indeks.php?hal=studio_admin');