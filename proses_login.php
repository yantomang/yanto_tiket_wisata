<?php
session_start();
include 'admin/koneksi.php';
if(isset($_POST['login'])){


    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $sql = "SELECT * FROM login WHERE  email='$email' and password='$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            if($row['level'] == "admin"){
                $_SESSION['email'] = $email;
                $_SESSION['level'] = "admin";
                header("location:admin/index.php");
            }else if ($row['level'] == "user"){
                $_SESSION['email'] = $email;
                $_SESSION['level'] = "user";
                header("location:user/home.php");
            }else{
                header("location:home.php?pesan=gagal");
            }
        }
    }
    $conn->close();
}
?>