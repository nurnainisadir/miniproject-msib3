<?php
session_start(); 
error_reporting(0);
include_once 'koneksi.php';
//------sertakan models------
include_once 'models/Kategori.php';
include_once 'models/Produk.php';
include_once 'models/Member.php';

include_once 'header.php';
include_once 'navigation.php';
echo '<br/>';

$hal = $_REQUEST['hal'];

if(!empty($hal)){
    include_once $hal.'.php';
}
else{
    include_once 'home.php';
}

include_once 'footer.php';