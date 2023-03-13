<?php include "admin/bot.php"

?>

<body background="img/bg2.jpeg">
  
</body>

<div class="container mt-5" style="width: 400px;">
  <div class="row">
    <div class=" col col-12">
    <form action="proses_login.php" method="post">
        <div class="p-3 mb-2 "style="margin-top: 80px; border-radius: 10px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8); background: white;">
          <div class="text-end">
            <a href="index.php"><button type="button" data-bs-dismiss="offcanvas" class="btn-close" aria-label="Close"></button></a>
          </div>
          <h2 class="text-center">Login</h2><br>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="text" class="form-control border border-secondary" id="email" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control border border-secondary" id="password" name="password" required>
            </div>
            <div class="text-end">
              <a href="reg.php">Sig up</a>
              <button type="submit" class="btn btn-primary" name="login">submit</a></button>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>


