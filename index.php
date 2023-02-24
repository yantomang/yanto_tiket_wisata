<?php
include "user/bot.php";

?>


<body>
</body>


<nav class="navbar fixed-top bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <h4 class="text-white"><i class="bi bi-amd"></i> Go Bandung</h4>
      <div class="text-end">
        <a href="login.php"><button type="button" class="btn btn-info" style="background: transparent; color: white;">LOGIN</button></a>
      </div>
    </a>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg9.jpg" class="d-block w-100" alt="..." style="height: 625px;">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="margin-top: -500px;"><marquee>WELCOME TO BANDUNG</marquee></h1>
        <p class="fs-5">hi everyone, we privode varicus kind of tour packages with the best facilities and services, and also at affordable prices. we wiil amaze you with the beauty of bandung with an unforgettable exprience.</p>
      </div>
    </div>
  </div>
</div>


<!--- awal about -->
    
<section class="mt-5 about" id=about>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col">
                    <h2 style="margin-top: 70px;">About</h2>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 150px;">
                <div class="col-4">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem fugit accusamus incidunt labore vel quisquam repudiandae vitae officiis. Quasi necessitatibus labore sequi eum dolores quas amet sapiente aspernatur. Ut, deserunt.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem fugit accusamus incidunt labore vel quisquam repudiandae vitae officiis. Quasi necessitatibus labore sequi eum dolores quas amet sapiente aspernatur. Ut, deserunt.</p>
                </div>
                <div class="col-4">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas enim accusamus id unde eos. Dignissimos modi unde nostrum possimus temporibus quod, nisi aperiam soluta. Culpa exercitationem nulla a nobis nemo.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem fugit accusamus incidunt labore vel quisquam repudiandae vitae officiis. Quasi necessitatibus labore sequi eum dolores quas amet sapiente aspernatur. Ut, deserunt.</p>
                </div>
            </div>
        </div>
    </section>

    <!--- akhir about -->



<div class="container">
  <h1 class="text-center mt-5">wisata</h1>
    <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                include ('user/koneksi.php');
                $query = "SELECT * FROM tambah_data_wisata";
                $select = $conn->query($query);
                $no = 1;
                while ($data = mysqli_fetch_array($select)){
                ?>
                <a href="login.php" style="text-decoration: none;">
                    <div class="col mt-5">
                      <div class="card" style="width: 250px; height: 350px; border-color: white;">
                      <img width="248 rem" height="200 rem"style="border-radius: 5px;" src="img/<?php echo $data['gambar']?>" alt="">
                        <div class="card-body text-black">
                          <h5 class="card-title"><?php echo $data["Nama_wisata"]?></h5>
                          <h3 class="text-start"  style="color: orange;">Rp. <?php echo $data["harga"]?></h3>
                            <div class="text-end">
                            </div>
                        </div>
                      </div>
                    </div>
                    </a>
                    <?php
                }
                    ?>
      </div>
</div>


<!--- awal akomodasi -->

<session id="Akomodasi">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 style="margin-top: 80px;">Akomodasi</h2>
                </div>
                <div class="row box-shadow" style="margin-top: 50px; margin-left: 40px; padding: 50px; ">
                    <div class="col md-4 mb-3">
                        <div class="card" style="width: 18rem; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                            <img src="img/g34.jpg" class="card-img-top" style="padding: 1px;">
                            <div class="card-body">
                                <h4 class="card-title">InterContinental Bandung Dago Pakar</h4>
                                <p class="card-text">Tersedia : Hotel InterContinental Bandung Dago Pakar</p>
                                <div class="text-center text-warning">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col md-4 mb-3">
                        <div class="card" style="width: 18rem; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                            <img src="img/g12.jpg" class="card-img-top" style="padding: 1px;">
                            <div class="card-body">
                                <h4 class="card-title"> ChavaMinerva Bambu Yang Ramah Lingkungan</h4>
                                <p class="card-text">Tersedia : villa ChavaMinerva Bambu Yang Ramah Lingkungan</p>
                                <div class="text-center text-warning">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card" style="width: 18rem; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                            <img src="img/g13.jpg" class="card-img-top" style="padding: 1px;">
                            <div class="card-body">
                                <h4 class="card-title">Apartemen The Suites @ Metro Bandung</h4>
                                <p class="card-text">Tersedia : Apartemen The Suites @ Metro Bandung</p>
                                <div class="text-center text-warning">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <session>

    <!--- akhir akomodasi -->



    <!--- awal galeri -->
    <session id="galeri">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 style="margin-top: 80px;">Galeri</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="img/g14.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="img/g15.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="img/g16.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="img/g17.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="img/g18.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="img/g19.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="img/g20.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="img/g21.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </session>
    <!--- akhir galeri -->

    <div class="card text-center" style="margin-top: 50px;">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
