<?php
    include "bot.php";
?>
<div class="container" style="margin-top: 100px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8); border-radius: 10px; margin-left: 260px; width: 1150px;"><br>
    <div class="row">
        <div class="col-md-12">
            <table id="" class="table table-striped tabel-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Wisata</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                <?php
                include ('koneksi.php');
                $query = "SELECT * FROM tambah_data_wisata";
                $select = $conn->query($query);
                $no = 1;
                while ($data = mysqli_fetch_array($select)){
                ?>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data["Nama_wisata"]?></td>
                        <td><?php echo $data["deskripsi"]?></td>
                        <td><?php echo $data["harga"]?></td>
                        <td><img width="70" src="../img/<?php echo $data['gambar']?>" alt=""></td>
                        <td>
                            <a href="index.php?page=edit-data&id=<?php echo $data ['id']?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                            <a href="proses_delete.php?id=<?php echo $data['id']?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>