<?php

include "bot.php";

?>

<body style="background-color:#474E68;">
    


<?php
    include ('koneksi.php');
    $query = "SELECT * FROM tb_user";
    $select = $conn->query($query);
    $no = 1;
    while ($data = mysqli_fetch_array($select)){
?>

<div class="profil">
    <div class="container text-white">
        <div class="text-start mt-3">
            <a href="home.php"><i class="bi bi-arrow-left text-white"></i></a>
                <div class="text-end">
                    <a href="proses_logout.php"><button type="button" class="btn btn-danger" href="">logout <i class="bi bi-box-arrow-right"></i></button></a> 
                </div>
        <div class="text-center">
            <img width="200 rem" height="200 rem" class="border border-dark" style="border-radius: 100px; margin-top: 25px;" src="../img/bg8.jpg" alt="">
                <h4><?php echo $data["user_name"]?></h4>
                <h6><?php echo $data["email"]?></h6>
        </div>


        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#biodata"  style="background: white; color: purple; text-decoration: none; border: 3px solid purple; margin-right: 2rem; padding-left: 3rem; padding-right: 3rem;">biodata</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pesanan" style="background: white; color: purple; border: 3px solid purple; margin-right: 2rem; padding-left: 3rem; padding-right: 3rem;">pesanan saya</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="biodata">
                <div class="row border g-0 rounded shadow-sm">
                    <div class="col p-4" style="height: 30rem;">
                    <?php 
                        include "bot.php";
                        include "koneksi.php";
                        if(isset($_POST['simpan'])){
                            $nama = $_POST['nama'];
                            $email = $_POST['email'];
                            $no_tlp = $_POST['no_tlp'];
                            
                            $add = $conn->query("INSERT INTO tb_biodata VALUE ('', '$nama', '$email', '$no_tlp')");

                            if($add){
                            header('location:');
                            }
                        }

                    ?>

<div class="container">
    <form  action="" method="post" class="border border-secondary" style="width: 40rem; padding: 3rem; border-radius: 1rem;">
        <div class="text-center">
        <h5>isi data diri</h5>
        </div>
        <div class="mb-3">
            <label for="exampleInputnama1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control border border-secondary" id="exampleInputnama1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputno.tlp1" class="form-label">No.tlp</label>
            <input type="text" name="no_tlp" class="form-control border border-secondary" id="exampleInputno.tlp1">
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
        </div>
    </form>
</div>

<div class="container mt-5">
    <table class="border border-secondary" style="width: 30rem; margin-left: 45rem; margin-top: -29rem;">
        <thead>
            <?php
                include ('koneksi.php');
                $query = "SELECT * FROM tb_biodata";
                $select = $conn->query($query);
                $no = 1;
                while ($data = mysqli_fetch_array($select)){
            ?>
                <tr>
                    <th scope="row">Nama:</th>
                    <td><?php echo $data["username"]?></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Email:</th>
                    <td><?php echo $data["email"]?></td>
                </tr>
                <tr>
                    <th scope="row">No.tlp:</th>
                    <td><?php echo $data["no_tlp"]?></td>
                </tr>
            </tbody>
        <?php}?>
    </table>
</div>
        </div>
    </div>
</div>
<div class="tab-pane" id="pesanan">
    <div class="row  border g-0 rounded shadow-sm">
        <div class="col p-4">
        <?php
            include "bot.php";
        ?>





<?php
    include ('koneksi.php');
    $query = "SELECT * FROM tb_pemesanan";
    $select = $conn->query($query);
    $no = 1;
    while ($data = mysqli_fetch_array($select)){
?>
<div class="card" style="width: 28rem;">
    <div class="card-body">
        <h6 class="card-title text-dark">Nama : <?php echo $data["nama_pemesan"]?></h6>
        <h6 class="card-title text-dark">Email : <?php echo $data["email"]?></h6>
        <h6 class="card-title text-dark">No.hp : <?php echo $data["no_hp"]?></h6>
        <h6 class="card-title text-dark">Tanggal wisata : <?php echo $data["Tanggal_wisata"]?></h6>
        <h6 class="card-title text-dark">Jumalah tiket : <?php echo $data["jumlah_tiket"]?></h6>
        <h6 class="card-title text-dark">Nama wisata : <?=$p['nama_wisata']?></h6>                   
        <h6 class="card-title text-dark">total harga : Rp.<?php echo $data["harga"]?></h6>

    </div>
</div>
<?php }?>
</div>
</div>

            </div>
        </div>
    </div>
</div>

<?php 
}?>

</body>