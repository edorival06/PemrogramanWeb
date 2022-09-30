<?php
session_start();
// cek apakah ada username
if(isset($_SESSION['username'])){
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <!-- pastikan action menuju ke auth.php dan method POST/post -->
    <form action="index_no_db.php" method="POST">
    <label for="username">Username</label>
    <input name="username" type="text" />
    <br />
    <label for="password">Pasword</label>
    <input name="password" type="password" />
    <br />
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>