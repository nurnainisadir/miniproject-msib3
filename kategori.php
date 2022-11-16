<?php
//ciptakan object dari class Divisi
$model = new Kategori();
//panggil fungsi untuk menampilkan data kategori
$data_kategori = $model->dataKategori(); 
?>

<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3><span class="alternate">Kategori</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12">
                <a class="btn btn-sm btn-success" href="index.php?hal=kategori_form" role="button">Tambah Kategori</a>
                <br /><br />
                <table class="table">
                    <thead class="table-light">
        
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_kategori as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['nama'] ?></td>
                            <td>
                                <form action="kategori_controller.php" method="POST">
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
        <br />
                <p align="right">
                    <a href="index.php?hal=home" class="btn btn-primary btn-sm">Back</a>
                </p>
    
    </div>
</section>