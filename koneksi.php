<?php  

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_ctq";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if(!$conn){
    die("Gagal Terhubung ke Database!". mysqli_connect_error());
}

?>