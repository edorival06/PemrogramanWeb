<?php
// memulai session
session_start();

// Membuat session dengan nama kalian
$_SESSION['nama'] = "Edo Rival Kurniawan";

//Membuat session dengan no absen kalian
$_SESSION['absen'] = "06";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1</title>
</head>
<body>
    <?php
    echo "Nama saya " . $_SESSION['nama'] . "<br>" . "Nomor absen " . $_SESSION['absen'];
    ?>
</body>
</html>