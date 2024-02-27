<?php

$Hostname = 'localhost';
$Username = 'root';
$Password = '';
$Dbname = 'signup_forms';

$con = mysqli_connect($Hostname, $Username, $Password, $Dbname);

// $con = mysqli_connect("localhost","root","","signup_forms");

if (!$con) {
    echo (mysqli_error($con));
}

?>