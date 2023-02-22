<?php
include "bot.php";
?>



<div class="container" style="margin-top: 85px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);  border-radius: 10px;  margin-left: 260px; width: 1095px"><br>
<h2 class="text-center">Table Pesanan</h2><br>
    <div class="row">
        <div class="col-md-12">
            <table id="" class="table table-striped tabel-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama pemesan</th>
                        <th>email</th>
                        <th>no.hp</th>
                        <th>Tanggal Wisata</th>
                        <th>Jumlah Tiket</th>
                        <th>Nama Wisata</th>
                        <th>Harga Total</th>
                        <th>check</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include ('koneksi.php');
                        $query = "SELECT * FROM tb_pemesanan";
                        $select = $conn->query($query);
                        $no = 1;
                        while ($data = mysqli_fetch_array($select)){
                    ?>
                    <tr>
                    
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data["nama_pemesan"]?></td>
                                <td><?php echo $data["email"]?></td>
                                <td><?php echo $data["no_hp"]?></td>
                                <td><?php echo $data["Tanggal_wisata"]?></td>
                                <td><?php echo $data["jumlah_tiket"]?></td>
                                <td><?php echo $data["nama_wisata"]?></td>
                                <td><?php echo $data["harga"]?></td>
                                <td><div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault"></label>
                                </div></td>

                            
                       
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>