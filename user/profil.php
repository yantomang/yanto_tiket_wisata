<?php

include "bot.php";

?>

<body style="background-color:#474E68;">
    
</body>

<?php
                        include ('koneksi.php');
                        $query = "SELECT * FROM login";
                        $select = $conn->query($query);
                        $no = 1;
                        while ($data = mysqli_fetch_array($select)){
                    ?>

<div class="profil">
    <div class="container text-white">
        <div class="icon" style=" margin-top: 10px;">
            <a href="home.php"><i class="bi bi-arrow-left text-white"></i></a>
            <a href=""><div class="text-end" style="margin-top: -20px;"><i class="bi bi-three-dots text-white"></i></div></a>
        </div>
        <div class="text-center">
            <img width="200 rem" height="200 rem"style="border-radius: 100px; margin-top: 25px;" src="../img/bg5.jpg" alt="">
                <h4><?php echo $data["user_name"]?></h4>
                <h6><?php echo $data["email"]?></h6>
        </div>
        <?php
                        include ('koneksi.php');
                        $query = "SELECT * FROM tb_pemesanan";
                        $select = $conn->query($query);
                        $no = 1;
                        while ($data = mysqli_fetch_array($select)){
                    ?>
        <h3 class="mt-5">pesanan saya :</h3>
        <div class="card" style="width: 28rem;">
            <div class="card-body">
                <h6 class="card-title text-dark">Nama : <?php echo $data["nama_pemesan"]?></h6>
                <h6 class="card-title text-dark">Email : <?php echo $data["email"]?></h6>
                <h6 class="card-title text-dark">No.hp : <?php echo $data["no_hp"]?></h6>
                <h6 class="card-title text-dark">Tanggal wisata : <?php echo $data["Tanggal_wisata"]?></h6>
                <h6 class="card-title text-dark">Jumalah tiket : <?php echo $data["jumlah_tiket"]?></h6>
                <h6 class="card-title text-dark">Nama wisata : <?php echo $data["nama_wisata"]?></h6>                   
                <h6 class="card-title text-dark">total harga : Rp.<?php echo $data["harga"]?></h6>

            </div>
        </div>
        <?php }?>
    </div>
</div>

<?php }?>