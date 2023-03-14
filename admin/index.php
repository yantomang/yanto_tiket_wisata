<?php
include "bot.php";
?>



    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom bg-secondary fixed-top">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <div class="container">
            <h2 class="text-white text-center">Halaman admin</h2>
        </div>
      </a>
      <div class="col-md-4">
       <a href="proses_logout.php"><button type="button" class="btn btn-danger" href="" style="margin-left:23rem;">logout <i class="bi bi-box-arrow-right"></i></button></a> 
      </div>
    </header>

    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-secondary fixed-top" style="width: 250px; height: 690px; margin-top: 70px;">
        <hr>
            <ul class="nav nav-pills flex-column">
            <li class="nav-item text-center">
                <a href="index.php?page=data" class="nav-link text-white" aria-current="page">
                <i class="bi bi-clipboard-plus-fill"></i>
                Tambah wisata
                </a>
            </li>
            <li style="margin-left: 30px;">
                <a href="index.php?page=tabel" class="nav-link text-white">
                <i class="bi bi-clipboard-data-fill"></i>
               data
                </a>
            </li>
            <li style="margin-left: 30px;">
                <a href="index.php?page=user" class="nav-link text-white">
                <i class="bi bi-person-circle"></i>
                user
                </a>
            </li>
            <li style="margin-left: 30px;">
                <a href="index.php?page=pesanan" class="nav-link text-white">
                <i class="bi bi-envelope-check-fill"></i>
                Pesan
                </a>
            </li>
            </ul>
        <hr>
    </div>
   

    <?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
		 
				switch ($page) {
					case 'data':
						include "tambah_data.php";
						break;
					case 'user':
						include "table_user.php";
						break;
                        case 'edit-data':
                            include "proses_edit_form.php";
                            break;
                        case 'tabel':
                            include "tabel_data.php";
                            break;
					case 'pesanan':
						include "table_pesanan.php";
						break;			
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			}else{
				include "tambah_data.php";
			}
	 ?>


