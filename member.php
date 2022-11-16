<?php

$model = new Member();

$data_member = $model->dataMember(); 

$sesi = $_SESSION['MEMBER'];
if(isset($sesi) && $sesi['role'] == 'admin' ){
?>
<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3><span class="alternate">User</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <a class="btn btn-sm btn-success" href="index.php?hal=member_form" role="button">Tambah User</a>
            <br /><br />
            <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_member as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['fullname'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['role'] ?></td>
                            <td>
                                <form action="member_controller2.php" method="POST">
                                    <a href="index.php?hal=member_form&idedit=<?= $row['id'] ?>">
                                        <button type="button" class="btn btn-sm btn-warning ">Edit</button>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                        onclick="return confirm('Anda yakin data akan dihapus?')">Hapus</button>
                                    <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                </form>
                            </td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php 
}
else{
    echo '<script>alert("Anda Terlarang Akses Halaman Ini!!!");history.back();</script>';
}
?>