<?php
//tangkap request id dari klik tombol detail
$id = $_REQUEST['id'];
//ciptakan object dari class Pegawai
$model = new Produk();
//panggil fungsi untuk menampilkan data pegawai
$produk = $model->getProduk($id); 
?>
<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Produk Detail</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                    <li class="breadcrumb-item active">Produk Detail</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?= $produk['kategori'] ?></h4>
                  <p class="price"><?= $produk['harga'] ?></p>
                </div>

                <h3><a href="course-details.html"><?= $produk['nama'] ?></a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
            
          </div> 
        </div>
        <br />
        <p align="right">
        <a href="index.php?hal=produk" class="btn btn-primary btn-sm">Back</a>
        </p>
    
      </div>
    </section>
   
   
