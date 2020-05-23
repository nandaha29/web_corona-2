<?php
include 'koneksi.php';
$username = ($_POST['username']);
$password = ($_POST['password']);

$query = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";
$sql = mysqli_query($kon, $query);

if($sql->num_rows > 0){
    session_start();
    $_SESSION['username'] = $username;
    header("Location: admin.php");
} else {
    echo "<h1> Wrong Username or Password </h1>";
    echo "<div class = 'form'> <h3>
    <br/> <a href = 'logadmin.php'> Retry </a></h3> </div>";
}
?>