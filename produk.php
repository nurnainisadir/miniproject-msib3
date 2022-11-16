<?php
//ciptakan object dari class Produk
$model = new Produk();
//panggil fungsi untuk menampilkan data produk
$data_produk = $model->dataProduk();

?>
<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3><span class="alternate">Produk</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-sm btn-success" href="index.php?hal=produk_form" role="button">Tambah Produk</a>
                <br /><br />
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_produk as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['kode'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['harga'] ?></td>
                            <td><?= $row['stok'] ?></td>
                            <td><?= $row['kondisi'] ?></td>
                            <td><?= $row['idjenis'] ?></td>
                            <td>
                                <form action="produk_controller.php" method="POST">
                                    <a href="index.php?hal=produk_detail&id=<?= $row['id'] ?>">
                                        <button type="button" class="btn btn-sm btn-primary">Detail</button>
                                    </a>
                                    <a href="index.php?hal=produk_form&idedit=<?= $row['id'] ?>">
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