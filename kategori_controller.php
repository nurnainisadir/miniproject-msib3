<?php
include_once 'koneksi.php';
include_once 'models/Kategori.php';

$nama = $_POST['nama'];

$data = [
    $nama, // ? 1
    
];

$model = new Kategori();
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
        header('Location:index.php?hal=kategori');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=kategori');