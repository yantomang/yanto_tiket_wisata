<?php 
session_start ();
include "bot.php"; 
?>

<body style="background-color:#474E68;">
    

<div class="profil">
    <nav class="navbar bg-dark fixed-top">
        <form class="container justify-content-start">
            <a href="home.php"><i class="bi bi-arrow-left text-white"></i></a>
            <a href="proses_logout.php"><button type="button" class="btn btn-danger" style="margin-left: 62rem;" href="">logout <i class="bi bi-box-arrow-right"></i></button></a> 
        </form>
    </nav>
        <div class="text-center text-white mt-5">
            <img width="200 rem" height="200 rem" class="border border-dark" style="border-radius: 100px; margin-top: 25px;" src="../img/bg8.jpg" alt="">
            <h2><?php echo $_SESSION['email']; ?></h2>
            <h3><?php echo $_SESSION['name']; ?></h3>
        </div>


        <ul class="nav nav-tabs mt-5">
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#biodata"  style="background: white; color: purple; text-decoration: none; border: 3px solid purple; margin-right: 1rem; padding-left: 1rem; padding-right: 1rem;">biodata</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pesanan" style="background: white; color: purple; border: 3px solid purple; margin-right: 1rem; padding-left: 1rem; padding-right: 1rem;">pesanan saya</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="biodata">
                <div class="row border g-0 rounded shadow-sm">
                    <div class="col p-4" style="height: 24rem;">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        <div class="tab-pane active" id="pesanan">
            <div class="row  border g-0 rounded shadow-sm">
                <div class="col p-4" style="height: 24rem;">pesanan</div>
            </div>
        </div>
        </div>
    </div>
</div>

</body>