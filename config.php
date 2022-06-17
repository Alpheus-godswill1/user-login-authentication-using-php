<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_NAME = "Authenticate_login";

$connect = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);

if(!$connect){
    die("Could not connect to database due to some minor errors" . mysqli_error($connect));
}

?>