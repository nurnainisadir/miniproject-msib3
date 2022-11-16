<?php

$obj_kategori = new Kategori();
$obj_produk = new Produk();
$ar_kondisi = ['Baru', 'Second'];
$data_kategori = $obj_kategori->dataKategori(); 

$idedit = $_REQUEST['idedit'];
$pro= !empty($idedit) ? $obj_produk->getProduk($idedit) : array() ;
?>


<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Tambah Produk</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                    <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="container px-5 my-5">
    <form action="produk_controller.php" method="POST" class="row">

        <label for="kode">Kode</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="kode" name="kode" value="<?= $pro['kode']?>" type="text" placeholder="Kode" data-sb-validations="" />
        </div>
        <label for="nama">Nama</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="nama" name="nama" value="<?= $pro['nama']?>" type="text" placeholder="Nama" data-sb-validations="" />
        </div>
        <label for="stok">Stok</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="stok" name="stok" value="<?= $pro['stok']?>" type="text" placeholder="Stok" data-sb-validations="" />
        </div>
        <label for="tanggalProduksi">Tanggal Produksi</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="tanggalProduksi" name="tgl_produksi" value="<?= $pro['tgl_produksi']?>" type="text" placeholder="Tanggal Produksi" data-sb-validations="" />
        </div>
        <div class="mb-3">
        <label class="form-label d-block">Kondisi</label>
            <?php  
            $no = 0;
            foreach($ar_kondisi as $kondisi => $k) {
                $cek = $pro['kondisi'] == $k ?'checked': '';
            ?>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="kondisi <?= $no ?>" type="radio" name="kondisi" value="<?= $k ?>" <?= $cek ?> data-sb-validations="" />
                <label for="kondisi" class="form-check-label"><?= $k ?></label>
            </div>
                <?php 
                $no++; 
                } ?>
        </div>
        <label for="kategori">Kategori</label>
        <div class="form-floating mb-3">
            <select class="form-select" id="kategori" name="idjenis" aria-label="Kategori">
                <option selected disabled>-- Pilih Kategori --</option>
                <?php 
                foreach ($data_kategori as $j) {
                    $cekk = $pro['idjenis'] == $j['id'] ? 'selected' : '';
                ?>
                <option value="<?= $j['id'] ?>" <?=$cekk ?>>  <?= $j['nama'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <label for="foto">Foto</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="foto" name="foto" value="<?= $pro['foto']?>" type="text" placeholder="Foto" data-sb-validations="" />
        </div>
        <label for="harga">Harga</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="harga" name="harga" value="<?= $pro['harga']?>" type="text" placeholder="Harga" data-sb-validations="" />
        </div>

        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>

        <div class="col-12 text-center">
        <?php
                //----------modus entri data baru, form dlm keadaan kosong-------------
                if(empty($idedit)){
                ?>
                <button type="submit" name="proses" value="simpan" class="btn btn-success btn-sm">Simpan</button>
                <?php
                }
                //----------modus edit data lama, form terisi data lama -------------
                else{
                ?>
                <button type="submit" name="proses" value="ubah" class="btn btn-warning btn-sm">Ubah</button>
                <!-- hidden field untuk klausa where id=? -->
                <input type="hidden" name="idx" value="<?= $idedit ?>">
                <?php } ?> <button type=" submit" name="proses" value="batal" class="btn btn-info btn-sm">
                    Batal</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>