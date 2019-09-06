<?php 
$host="localhost";
$user="root";
$pass="";
$db="clientes";

$coneccion=mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($coneccion,"utf8");
?>