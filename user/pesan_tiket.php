<?php
$id=$_GET['id'];

    include "bot.php";
    include "koneksi.php";
    if(isset($_POST['add'])){
        $nama_pemesan = $_POST['nama_pemesan'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $Tanggal_wisata = $_POST['Tanggal_wisata'];
        $jumlah_tiket = $_POST['jumlah_tiket'];
        $nama_wisata = $_POST['nama_wisata'];
        $harga = $_POST['harga'];
        
        $add = $conn->query("INSERT INTO tb_pemesanan VALUE ('', '$nama_pemesan', '$email', '$no_hp', '$Tanggal_wisata', '$jumlah_tiket', '$nama_wisata', '$harga')");

        if($add){
          header('location:../user/lebel.php');
        }
    }
?>


<body background="../img/bg9.jpg" style="background-repeat: no-repeat; background-size:  100%;">
  
</body>


<!--- awal forms -->
<form action="" method="post" class="container"style=" background: white; width: 500px; padding: 50px; margin-top: 5px;border-radius: 10px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);">
    <h2 class="text-center">Pesan tiket</h2>
      <div class="mb-2">
          <label for="exampleInputname1" class="form-label">Name</label>
          <input type="text" name="nama_pemesan" class="form-control border border-secondary" id="exampleInputname1" placeholder="name" required>
      </div>
      <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">address email</label>
          <input type="email" name="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@gmail.com" required>
      </div>
      <div class="mb-2">
          <label for="exampleInputtelepon1" class="form-label">No.phone</label>
          <input type="textr" name="no_hp" class="form-control border border-secondary" id="exampleInputtelepon1" placeholder="number" required>
      </div>
      <div class="mb-2">
          <label for="exampleInputtanggal1" class="form-label">date</label>
          <input type="date" name="Tanggal_wisata" class="form-control border border-secondary" id="exampleInputtanggal1" required>
      </div>
      <div class="mb-2">
          <label for="exampleInputjumlah1" class="form-label">Jumlah tiket</label>
          <input type="number" name="jumlah_tiket" class="form-control border border-secondary" id="exampleInputjumlah1" required>
      </div>
          <label for="exampleInputjumlah1" class="form-label">Name tour</label>
            <select class="form-control border border-secondary" name="nama_wisata" aria-label="Default select example" required>
               <?php
                $pesan=$conn->query("select Nama_wisata,harga from tambah_data_wisata where id='$id'");
                $p=$pesan->fetch_array();
               ?>
            <option selected> <?=$p['Nama_wisata'] ?></option>
            </select>
    <div class="mb-3">
        <label for="exampleInputtelepon1" class="form-label">harga</label>
        <input type="text" name="harga" value="<?php echo $p['harga'] ?>" class="form-control border border-secondary" id="exampleInputtelepon1" placeholder="number" required>
    </div>
    <div class="text-end" style="margin-top: 30px;">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary text-white"  data-bs-toggle="modal" data-bs-target="#exampleModal">kembali</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Wisata Bandung</h1>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin membatalkan pemesanan!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">tidak</button>
            <a href="home.php#paket%20wisata"><button type="button" class="btn btn-primary">Ya</button></a>
          </div>
        </div>
      </div>
    </div>
      <button name="add" type="submit" class="btn btn-primary text-white">Pesan sekarang</button>
</form>
<!--- awal forms -->

