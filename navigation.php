<?php
$sesi = $_SESSION['MEMBER'];
?>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php?hal=home">Ainins</a></h1>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php?hal=home">Home</a></li>
          <li><a href="index.php?hal=about">About</a></li>        
          <li><a href="index.php?hal=contact">Contact</a></li>
        
        
          <?php
          if(!isset($sesi)){ 
          ?>
          <li><a href="login_form.php" class="nav-link">Login</a></li>
          <?php
          }
          else{
          ?>
  
          <li><a href="index.php?hal=kategori">Categori</a></li>
          <li><a href="index.php?hal=produk">Product</a></li>

          <li class="dropdown"><a href="#"><?= $sesi['fullname'] ?> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php
                  if($sesi['role'] == 'admin'){ 
                  ?>
              <li><a href="index.php?hal=member">Kelola User</a></li>
                  <?php } ?>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </nav>                  
    </div>
  </header>
