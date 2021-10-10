<?php

include_once './connection.php';

if(isset($_POST['create'])){
    $email=$_POST['gmail'];
    $pass=$_POST['password'];
    $rpass=$_POST['rpassword'];
    $number=$_POST['number'];

    if($pass!=$rpass){

        
        header('Location:../createaccount/createaccount.html');
    }
    
    $sql=
    "
    INSERT INTO user(email,password,number)
    VALUES(
        "."'".$email."'".","."'".$pass."'".","."'".$number."'"."
    )
    ";
    $result=mysqli_query($conn,$sql);
    
    if($result){

        header('Location:../login/login.php');
    }else{
        // echo mysqli_error($conn);
        header('Location:../createaccount/createaccount.html');
    }






    mysqli_close($conn);

}







?>