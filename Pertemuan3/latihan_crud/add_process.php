<?php
include_once("config.php");
if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:s");

    

    $result = mysqli_query($conn_db, "INSERT INTO customer(name,email,phone,created) VALUES('$name','$email','$phone','$created')");

    echo "Customer ". $name ." added succesfully. <a href='index.php'>View Customers</a>";
}
?>
