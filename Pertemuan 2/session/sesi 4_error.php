<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4</title>
</head>
<body>
    <?php
        echo "Isi dari variabel session alamat adalah " . $_SESSION['alamat'];
        ?>
</body>
</html>