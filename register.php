<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
<header>
        <div class="container-fluid p-2">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
            <a class="navbar-brand" href="#">MyInfo;</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-right "></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginuser.php">LOGIN</a>
                    </li>
                </ul>
            </div></div>
        </nav>
    </div>
    <div class="container">
    <div class="row pt-4 mb-4">
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
        <div class="login-content">
            <form method="post">
                <h2 class="title">User Register</h2>
                <br>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" name="username">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-id-card-alt"></i>
                    </div>
                    <div class="div">
                        <h5>Nama</h5>
                        <input type="text" class="input" name="nama_user">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <div class="div">
                        <h5>No. Telepon</h5>
                        <input type="tel" class="input" name="telp">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-door-open"></i>
                    </div>
                    <div class="div">
                        <h5>Alamat</h5>
                        <input type="text" class="input" name="alamat">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>
                <br>
                <input type="submit" name='simpan' class="btn" value="Register">
            </form>
        </div></div>
        <div class="col-lg-4">
        <div class="img">
            <img src="img/register.png">
        </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
 <?php
include "koneksi.php";
if (@$_POST['simpan']) {
    $username = @$_POST['username'];
    $nama = @$_POST['nama_user'];
    $telp = @$_POST['telp'];
    $kelas = @$_POST['alamat'];
    $id = 3;
    $Password = @$_POST['password'];
    $pass = md5($Password);

    $query = mysqli_query($kon, "INSERT INTO tb_user (username, nama_user, telp, alamat, password) 
    VALUES ('$username', '$nama', '$telepon', '$alamat', '$pass')");

    if ($query) {
        echo "<meta http-equiv='refresh' content='0; URL=loginuser.php'>";
    } else {
        echo "<meta http-equiv='refresh' content='0; URL=register.php'>";
    }
}
?> 
</html>
