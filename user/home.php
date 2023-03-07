<?php
session_start();
include "bot.php";
?>


<!--- awal navbar -->
<nav class="navbar navbar-expand bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand text-white" href="#"><i class="bi bi-amd"></i> Go Bandung</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#paket wisata">Paket Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#Akomodasi">Akomodasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#galeri">Galeri</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link text-white" href="#about">About</a>
        </li>
      </ul>
    </div>
        <li class="nav-item" style=" margin-left: 30px;">
        <a href="profil.php"><img width="40 rem" height="40 rem"style="border-radius: 50px; margin-left: -30px;" src="../img/bg8.jpg" alt=""></a>
        </li>
  </div>
</nav>


<?php 
    if (!empty($_GET['user'])) {
        if ($_GET['user'] == "beranda") {
            include "beranda.php";
        }elseif($_GET['user'] == "tiket-detail"){
            include "tiket_detail.php";
        }elseif ($_GET["user"] == "tiket-pesan"){
            include "tiket_pesan.php";
        }elseif ($_GET["user"] == "siswa-add"){
            include "siswa_add.php";
        }elseif ($_GET["user"] == "guru-add"){
            include "guru_add.php";
        }else{
            echo "halman tidak ditemukan";
        }
    }else{
        include "beranda.php";
    }
  ?>



    
    