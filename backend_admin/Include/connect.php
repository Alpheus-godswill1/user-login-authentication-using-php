<?php
$Db_host = "localhost";
$Db_user = "root";
$Db_password = "";
$Db_name = "Authenticate_login";

$connect = mysqli_connect($Db_host,$Db_user,$Db_password,$Db_name);

if (!$connect) {
    die("could not connect to database due to some issues " . mysqli_error($connect));
}
?>