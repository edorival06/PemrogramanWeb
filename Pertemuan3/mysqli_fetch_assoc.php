<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}   echo "Connection Successfully to Project1 <br>";

$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");

if(!$query) {
    echo ("Error query " . mysqli_error($connection));   
}
$data = mysqli_fetch_assoc($query);
print_r($data);

mysqli_close($connection);
?>