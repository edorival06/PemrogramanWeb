<?php
session_start();

// $database = [
//     'username' => 'edo',
//     'password' => 'ytta06'
// ];

$username = $_POST['username'];

include_once('config.php');

$query = mysqli_query($conn_db,"SELECT * FROM users WHERE username='username'");
$user = mysqli_fetch_assoc($query);

// cek apakah terdapat submit yang dilakukan
if(isset($_POST['submit'])){
    // mengambil nilai yang dikirim melalui method phost ke dalam variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    // mengecek apakah username dan password sesuai dengan database
    if ($username == $user['username'] && $password_verify($_POST['password'],
    $user['password'])) {
        // set session username
        $_SESSION['username'] = $username;
        // redirect/mengarahkan menuju halaman admin
        header("location:admin.php");
    } else {
        // memunculkan pemberitahuan gagal login dan redirect ke login page
        echo '<script> alert("Username atau password salah!");
        window.location="login-page.php"; </script>';
    }
} else {
    //jika tidak ada submit mengembalikan ke login-page
    echo '<script> window.location="login-page.php"; </script>';
}
?>