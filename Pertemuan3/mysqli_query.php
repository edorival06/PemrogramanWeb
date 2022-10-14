<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}   echo "Connection Successfully to Project1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TTL, NIP,
JURUSAN) VALUES('','Edo Rival K','Bibis Luhur 01/22,Nusukan','2005-09-06','9299837','RPL')");
IF(!$query_insert) {
    ECHO ("Error query " . mysqli.error($connection));
}
mysqli_close($connection);
?>