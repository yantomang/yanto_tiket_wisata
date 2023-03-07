


<!--- awal home -->

<session id="home">
    <div class="card text-bg-light">
        <img src="../img/bg9.jpg" class="card-img" alt="..." style="height: 650px;">
    <div class="card-img-overlay text-center text-white">
            <div class="container">
                <h5 class="mt-5"><marquee>Selamat Datang!! <?php echo $_SESSION['email']; ?></marquee></h5>
            </div>
        </div>
        <div class="container text-center">
            <h1 style="margin-top: -530px; color: white;">PAKET</h1>
            <h1 class="text-white">wisata bandung</h1>
            <div class="text-white">-Profesional -Pengalaman -Pelayanan ramah -Mengutamakan kenyamanan -Destinasi lengkap -Lebih hemat</div>
        </div>
    </div>
</session>

<!--- akhir home -->




    
    <!--- awal about -->
    
    <section class="mt-5 about" id=about>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col">
                    <h2 style="margin-top: 70px;">About</h2>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 150px;">
                <div class="col-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem fugit accusamus incidunt labore vel quisquam repudiandae vitae officiis. Quasi necessitatibus labore sequi eum dolores quas amet sapiente aspernatur. Ut, deserunt.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem fugit accusamus incidunt labore vel quisquam repudiandae vitae officiis. Quasi necessitatibus labore sequi eum dolores quas amet sapiente aspernatur. Ut, deserunt.</p>
                </div>
                <div class="col-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas enim accusamus id unde eos. Dignissimos modi unde nostrum possimus temporibus quod, nisi aperiam soluta. Culpa exercitationem nulla a nobis nemo.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem fugit accusamus incidunt labore vel quisquam repudiandae vitae officiis. Quasi necessitatibus labore sequi eum dolores quas amet sapiente aspernatur. Ut, deserunt.</p>
                </div>
            </div>
        </div>
    </section>

    <!--- akhir about -->




    <!--- awal paket -->
    
    <section id="paket wisata">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h2 style="margin-top: 80px;">Paket Wisata</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">

                <?php
                include ('koneksi.php');
                $query = "SELECT * FROM tambah_data_wisata";
                $select = $conn->query($query);
                $no = 1;
                while ($data = mysqli_fetch_array($select)){
                ?>
                    
                    <div class="row row-cols-1 row-cols-md-4 g-2">
                        <a href="home.php?user=tiket-detail&id=<?php echo $data['id'] ?>" style="text-decoration: none;">
                            <div class="col">
                                <div class="card" style="width: 250px; height: 350px; border-color: white;">
                                        <img width="248 rem" height="200 rem"style="border-radius: 5px;" src="../img/<?php echo $data['gambar']?>" alt="">
                                    <div class="card-body text-dark text-start">
                                        <h5 class="card-title"><?php echo $data["Nama_wisata"]?></h5>
                                        <h5 class="text-start" style="color: orange;">Rp. <?php echo $data["harga"]?></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                    ?>
                </div>
            </div>
        </div>
    </section>
    

    <!--- akhir paket -->




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
                            <img src="../img/g34.jpg" class="card-img-top" style="padding: 1px;">
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
                            <img src="../img/g12.jpg" class="card-img-top" style="padding: 1px;">
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
                            <img src="../img/g13.jpg" class="card-img-top" style="padding: 1px;">
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
                            <img src="../img/g14.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="../img/g15.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="../img/g16.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="../img/g17.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="../img/g18.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="../img/g19.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="../img/g20.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
                        </div>
                    </div>
                    <div class="col md-4 mb-3">
                        <div class="card">
                            <img src="../img/g21.jpg" class="card-img-top" alt="..." style="padding: 1px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8)">
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


