<?php

$user='root';
$pass='';
$host='localhost';
$dbname='shop';

$conn=mysqli_connect($host,$user,$pass,$dbname);

if(!$conn){
    header('Location:../index.php');
}




?>