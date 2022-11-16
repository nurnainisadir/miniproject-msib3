<?php

$obj_kategori = new Kategori();
$obj_produk = new Produk();

$data_kategori = $obj_kategori->dataKategori(); 

$idedit = $_REQUEST['idedit'];
$pro= !empty($idedit) ? $obj_produk->getProduk($idedit) : array() ;
?>


<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Tambah Kategori</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="container px-5 my-5">
    <form action="kategori_controller.php" method="POST" class="row">
        
        <label for="nama">Nama</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="nama" name="nama" value="<?= $pro['nama']?>" type="text" placeholder="Nama" data-sb-validations="" />
        </div>
        
        <div class="col-12 text-center">
       
        <?php
                
                if(empty($idedit)){
                ?>
                <button type="submit" name="proses" value="simpan" class="btn btn-success btn-sm">Simpan</button>
                <?php
                }
                else{
                ?>
                <input type="hidden" name="idx" value="<?= $idedit ?>">
                <?php } ?> <button type=" submit" name="proses" value="batal" class="btn btn-info btn-sm">Batal</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>