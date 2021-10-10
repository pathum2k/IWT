<?php

include_once './connection.php';

if(isset($_POST['submitbtn'])){
    
    $mail=$_POST['gmail'];
    $pass=$_POST['password'];

    $sql="SELECT password,id FROM user WHERE email="."'".$mail."'";
    $found=false;
    $re=mysqli_query($conn,$sql);
    if($re){
        $row=mysqli_fetch_assoc($re);

        echo $row['password'].'///';
        echo $pass;
        
        
        
        if($pass==$row['password']){
            setcookie('msg','Welcome',time()+2,'/');
            setcookie('id',$row['id'],time()+60*60*24*30,'/','');
            header('Location:../index.php');
                    
                    
        }
        else{
            
            setcookie('msg','Not Fount',time()+2,'/');
            header("Location:../login/login.php");
        }
    }else{
        setcookie('msg','Database Error',time()+2,'/');
        header("Location:../login/login.php");       

    }
}else{
     header("Location:../login/login.php");       
}











?>