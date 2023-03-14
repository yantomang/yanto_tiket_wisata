<?php
include "bot.php";
?>



<div class="container" style="margin-top: 85px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);  border-radius: 10px;  margin-left: 260px; width: 1095px"><br>
<div style="margin-left: 90%;">
<button class="btn btn-dark" onclick="printDiv('print')"><i class="bi bi-printer"></i></button>
</div>
<h2 class="text-center">Table Pesanan</h2><br>
    <div class="row">
        <div class="col-md-12">
        <fieldset id="print">
            <table id="myTable" class="table table-striped tabel-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama pemesan</th>
                        <th>email</th>
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
                        $query = "SELECT tb_user.id, tb_user.user_name, tb_user.email, tb_pemesanan.id, tb_pemesanan.Tanggal_wisata, tambah_data_wisata.Nama_wisata, tb_pemesanan.jumlah_tiket, tb_pemesanan.wisata_id, tb_pemesanan.harga FROM tb_pemesanan INNER JOIN tb_user ON tb_user.id=tb_pemesanan.user_id INNER JOIN tambah_data_wisata ON tb_pemesanan.wisata_id=tambah_data_wisata.id";
                        $select = $conn->query($query);
                        $no = 1;
                        while ($data = mysqli_fetch_array($select)){
                    ?>
                    <tr>
                    
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data["user_name"]?></td>
                                <td><?php echo $data["email"]?></td>
                                <td><?php echo $data["Tanggal_wisata"]?></td>
                                <td><?php echo $data["jumlah_tiket"]?></td>
                                <td><?php echo $data["Nama_wisata"]?></td>
                                <td><?php echo $data["harga"]?></td>
                                <td><div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">komfirmasi</label>
                                </div></td>

                            
                       
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            </fieldset>
        </div>
    </div>
</div>
<script type="text/javascript">
  function printDiv(el) {
    var a = document.body.innerHTML;
    var b = document.getElementById(el).innerHTML;

    document.body.innerHTML = b;
    window.print();
    dokument.body.innerHTML = a;
  }
</script>