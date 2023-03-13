<?php include "admin/bot.php"

?>

<body  background="img/bg2.jpeg">
  
</body>

<div class="container mt-5" style="width: 400px;">
  <div class="row">
    <div class=" col col-12">
    <form action="" method="POST">
        <div class="p-3 mb-2 "style="margin-top: 70px; border-radius: 10px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8); background: white;">
          <div class="text-end">
            <a href="index.php"><button type="button" data-bs-dismiss="offcanvas" class="btn-close" aria-label="Close"></button></a>
          </div>
          <h2 class="text-center">Register</h2><br>
            <div class="input-group mb-3">
                <span class="input-group-text border border-secondary" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control border border-secondary" placeholder="username" name="username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text border border-secondary" id="basic-addon2"><i class="bi bi-envelope-fill"></i></span>
                <input type="text" class="form-control border border-secondary" placeholder="email" name="email" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text border border-secondary" id="basic-addon2"><i class="bi bi-lock-fill"></i></span>
                <input type="password" class="form-control border border-secondary" placeholder="password" name="password" aria-describedby="basic-addon2">
            </div>
            <div class="text-end">
              <a href="login.php">Log in</a>
              <a href="login.php"><button type="submit" class="btn btn-primary" name="kirim">submit</button></a>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include "user/koneksi.php";

if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =md5($_POST['password']);

    $query = mysqli_query($conn, "INSERT INTO login VALUES ('', '$username', '$email', '$password', 'user')");

    if ($query) {
        header('location:login.php');
    }
}
?>
