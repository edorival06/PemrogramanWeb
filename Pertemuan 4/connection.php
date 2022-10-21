<?php

$connection = mysqli_connect("localhost", "root", "", "sekolah_edo");
if(!$connection){
    echo mysqli_connect_error();
}