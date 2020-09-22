<?php
$db="p1";
$host="localhost";
$user="root";
$pass="";

$conn=mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    echo"sorry we failed ";
}   

?>