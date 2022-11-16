<?php

$obj_member = new Member();

$data_member = $obj_member->dataMember(); 

$idedit = $_REQUEST['idedit'];
$mem= !empty($idedit) ? $obj_member->getMember($idedit) : array() ;
?>


<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Tambah User</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="container px-5 my-5">
    <form action="member_controller2.php" method="POST" class="row">
        
        <label for="nama">Fullname</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="fullname" name="fullname" value="<?= $mem['fullname']?>" type="text" placeholder="Fullname" data-sb-validations="" />
        </div>
        <label for="nama">Email</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="email" name="email" value="<?= $mem['email']?>" type="text" placeholder="Email" data-sb-validations="" />
        </div>
        <label for="nama">Username</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="username" name="username" value="<?= $mem['username']?>" type="text" placeholder="Username" data-sb-validations="" />
        </div>
        <label for="nama">Password</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="password" name="password" value="<?= $mem['password']?>" type="text" placeholder="Password" data-sb-validations="" />
        </div>
        <label for="nama">Role</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="username" name="role" value="<?= $mem['role']?>" type="text" placeholder="Role" data-sb-validations="" />
        </div>
        <label for="nama">Foto</label>
        <div class="form-floating mb-3">
            <input class="form-control" id="foto" name="foto" value="<?= $mem['foto']?>" type="text" placeholder="Foto" data-sb-validations="" />
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
                <button type="submit" name="proses" value="ubah" class="btn btn-warning btn-sm">Ubah</button>
                <input type="hidden" name="idx" value="<?= $idedit ?>">
                <?php } ?> <button type=" submit" name="proses" value="batal" class="btn btn-info btn-sm">Batal</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>