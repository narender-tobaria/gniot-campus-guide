<?php
$username = "root";
$password = "";
$dbname = "gcg_db";
$host = "localhost";

$connect = mysqli_connect($host,$username,$password,$dbname);

if(!$connect){
    echo mysqli_connect_error();
}
?>