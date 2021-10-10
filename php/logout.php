<?php

if(isset($_POST['logout'])){
    setcookie('id',null,time()+60*60*24*30,'/','');
    

    header("Location:../index.php");
}else{
    header("Location:../index.php");
}




?>