<?php 
session_start ();
include "bot.php"; 
?>

<body style="background-color:#474E68; height: 100%;">
    

<div class="profil">
    <nav class="navbar bg-dark fixed-top">
        <form class="container justify-content-start">
            <a href="home.php"><i class="bi bi-arrow-left text-white"></i></a>
            <a href="proses_logout.php"><button type="button" class="btn btn-danger" style="margin-left: 74rem;" href="">logout <i class="bi bi-box-arrow-right"></i></button></a> 
        </form>
    </nav>
        <div class="text-center text-white mt-5">
        <i class="bi bi-person-circle" style="font-size: 12rem;"></i>
            <h2><?php echo $_SESSION['email']; ?></h2>
        </div>

        <div class="container mt-5">
            <h2 class="text-white">pesanan saya</h2>
        <div class="tab-content" style="background: grey;">
        <div class="tab-pane active" id="pesanan">
            <div class="row  border g-0 rounded shadow-sm">
                <div class="col p-3" style="height: 22rem;">
                    <table class="text-white" style="padding: 200px;">
                        <tbody>
                        <?php
                        include ('koneksi.php');

                    ?>
                    <?php
                                $query = "SELECT tb_user.id, tb_user.user_name, tb_user.email, tb_pemesanan.id, tb_pemesanan.Tanggal_wisata, tambah_data_wisata.Nama_wisata, tb_pemesanan.jumlah_tiket, tb_pemesanan.wisata_id, tb_pemesanan.harga FROM tb_pemesanan INNER JOIN tb_user ON tb_user.id=tb_pemesanan.user_id INNER JOIN tambah_data_wisata ON tb_pemesanan.wisata_id=tambah_data_wisata.id";
                                $select = $conn->query($query);
                                while ($data = mysqli_fetch_array($select)){
                                    ?>
                               
                            <tr>
                                <th scope="row">Nama :</th>
                                <td><?php echo $data["user_name"]?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email :</th>
                                <td><?php echo $data["email"]?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama wisata :</th>
                                <td colspan="2"><?php echo $data["Nama_wisata"]?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal wisata :</th>
                                <td colspan="2"><?php echo $data["Tanggal_wisata"]?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jumlah tiket :</th>
                                <td colspan="2"><?php echo $data["jumlah_tiket"]?></td>
                            </tr>
                            <tr>
                                <th scope="row">Harga :</th>
                                <td><?php echo $data["harga"]?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

</body>