<?php
include_once 'koneksi.php';
include_once 'models/Member.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$foto = $_POST['foto'];

$data = [
    $fullname, 
    $email,
    $username, 
    $password, 
    $role, 
    $foto, 
];

$model = new Member();
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
        header('Location:index.php?hal=member');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=member');