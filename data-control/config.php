<?php
// $username = "posccplm_gcd_user";
// $password = "Poscal@gcd";
// $dbname = "posccplm_gcd";
// $host = "localhost";

$username = "root";
$password = "";
$dbname = "gcd";
$host = "localhost";

$connect = mysqli_connect($host,$username,$password,$dbname);

if(!$connect){
    echo mysqli_connect_error();
}
?>