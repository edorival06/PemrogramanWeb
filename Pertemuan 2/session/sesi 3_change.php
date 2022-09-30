<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3</title>
</head>
<body>
    <?php
    // Mengubah isi dari variabel sesi
    $_SESSION['nama'] = "Edo Rival K";

    // Mengecek perubahan variabel
    echo "Variabel session nama telah diubah menjadi " . $_SESSION['nama'];
    ?>
</body>
</html>