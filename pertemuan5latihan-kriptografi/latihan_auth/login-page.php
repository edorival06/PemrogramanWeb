<?php
session_start();
//cek apakah ada username
if(isset($_SESSION['username'])){
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Halaman Login <br/>Silahkan Isi</h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="index.php" method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email .."/>
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .."/>
 
			<button name="submit" class="tombol_login" value="LOGIN">Login</button>
 
			<br/>
			<br/>
			
		</form>
		
	</div>

</body>
</html>