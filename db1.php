<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_shop";
$conn = mysqli_connect($servername, $username, $password, $dbname) ;
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>