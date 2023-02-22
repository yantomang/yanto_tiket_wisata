<?php
include "bot.php";
?>



<div class="container" style="margin-top: 85px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);  border-radius: 10px; width: 1095px"><br>
    <h2 class="text-start">Pesanan</h2><br>
  <table class="table">

    <?php
    $id=$_GET['id'];
                            include ('koneksi.php');
                            $query = "SELECT * FROM tb_pemesanan where id='$id'";
                            $select = $conn->query($query);
                            $no = 1;
                            while ($data = mysqli_fetch_array($select)){
                        ?>
                                <thead>
                                  <tr>
                                    <th scope="row">nama :</th>
                                    <td><?php echo $data["nama_pemesan"]?></td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Email :</th>
                                    <td><?php echo $data["email"]?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">No.hp :</th>
                                    <td><?php echo $data["no_hp"]?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">tanggal wisata :</th>
                                    <td colspan="2"><?php echo $data["Tanggal_wisata"]?></td>
                                  </tr>
                                </tbody>
                                <?php }
                                ?>
  </table>
</div>