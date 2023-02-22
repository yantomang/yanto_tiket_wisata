<?php
include "bot.php";
?>



<div class="container" style="margin-top: 85px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);  border-radius: 10px; margin-left:260px; width: 1095px;"><br>
<h2 class="text-center">Table User</h2><br>
    <div class="row">
        <div class="col-md-12">
            <table id="" class="table table-striped tabel-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>email</th>
                        <th>Password</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                        include ('koneksi.php');
                        $query = "SELECT * FROM login";
                        $select = $conn->query($query);
                        $no = 1;
                        while ($data = mysqli_fetch_array($select)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data["user_name"]?></td>
                        <td><?php echo $data["email"]?></td>
                        <td><?php echo $data["password"]?></td>
                        <td><?php echo $data["level"]?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>