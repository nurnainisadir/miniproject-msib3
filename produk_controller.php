<?php
include_once 'koneksi.php';
include_once 'models/Produk.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$tgl_produksi = $_POST['tgl_produksi'];
$kondisi = $_POST['kondisi'];
$kategori = $_POST['idjenis'];
$foto = $_POST['foto'];
$harga = $_POST['harga'];

$data = [
    $kode, // ? 1
    $nama, // ? 2
    $stok, // ? 3
    $tgl_produksi, // ? 4
    $kondisi, // ? 5
    $kategori, // ? 6
    $foto, // ? 7
    $harga, // ? 8
];

$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':$model->simpan($data); break;

    case 'ubah':
        //tangkap hidden field idx untuk klausa where id
        // ? 10 (klausa where id = ?)
        //var_dump($_POST); die();
        $data[] = $_POST['idx']; $model->ubah($data); break;

    case 'hapus':
        unset($data);//hapus 9 ? di atas
        //panggil method hapus data disertai tangkap hidden filed idx untuk klausa where id
        $model->hapus($_POST['idx']); break;
    
    default:
        header('Location:index.php?hal=produk');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=produk');