<?php

if(isset($_COOKIE['id'])){
	$login=true;
}else{
	$login=false;
}


?>


<!DOCKTYPE html>
<html>
<head>

    <title>Online Grocery</title>
    <link rel="stylesheet" href="../css/category.css">

    <style>
        .logoutbtn{
            background-color: transparent;
            color: white;
            font-size:30px ;
            border: none;
            font-family: 'Times New Roman', Times, serif;
            margin-top: 10px;
        }
        .logoutbtn:hover{
            background-color:#3f8b49;
    
            color:black;
            cursor: pointer;
        }
        .loginbtn{
            background-color: transparent;
            color: white;
            font-size:30px ;
            border: none;
            font-family: 'Times New Roman', Times, serif;
            margin-top: 10px;
            text-decoration: none;
        }
        .loginbtn:hover{
            background-color:#3f8b49;
    
            color:black;
            cursor: pointer;
        }
        
    </style>

</head>
<body>
    <div class="main">

        <div class="headbox">
                                <p class="headtext">easy shopping quality products</p>
                </div>

                <div class="headbase">
                            <div class="logodiv">
                                    <img class="logo" src="../images/logoo.jpg" alt="logo"/>
                            </div> 

                            <div class="shopname" >
                                    <lable>Groserie</lable>
                            </div>                
                </div>

                <div class="menu"> 
                    <form action="../php/logout.php" method="POST">                   
                            <a href="../index.php" class="button"> Home     </a>
                            <a href="" class="button"> Category </a>
                            <a href="../aboutus/aboutus.html" class="button"> About us </a>
                            <!-- show login btn if not log in -->
                            <?php
                            if($login){
                                echo '
                                
                                <button type="submit" class="logoutbtn" name="logout">Logout</button>';
                                
                            }else{
                                echo '<a href="../login/login.php" class="loginbtn" >Login</a>';
                            }
                        ?>
                    </form>
                            
                </div>
        </div>
    


        <div class="catdiv">

            <div class="catbox">
                <div class="imgdiv">
                    <img class="catimg" src="../images/vegitables.jpg" alt="Vegitable"/>
                </div>
                    <a href="../items/vegetable.html" class="catname"> Vegitables </a>
            </div>


            <div class="catbox">
                <div class="imgdiv">
                    <img class="catimg" src="../images/fruit.jpg" alt="Fruit"/>
                </div>
                    <a href="../items/fruits.html" class="catname"> Fruits </a>
            </div>

            <div class="catbox">
                <div class="imgdiv">
                    <img class="catimg" src="../images/drinks.jpg" alt="Juice Item"/>
                </div>
                    <a href="../items/juices.html" class="catname"> Juice Item </a>
            </div>

            <div class="catbox">
                <div class="imgdiv">
                    <img class="catimg" src="../images/snacks.jpg" alt="Snack Item"/>
                </div>
                    <a href="../items/snacks.html" class="catname"> Snacks Item </a>
            </div>

            <div class="catbox">

                <div class="imgdiv">
                    <img class="catimg" src="../images/grocery.jpg" alt="Grocery Item"/>
                </div>
                    <a href="../items/Grocery.html" class="catname"> Grocery Item </a>
            </div>
        </div>

    </div>
    <br>
            <div class="conandmail">
                <div class="contact">
                    <a href="" class="textcontact">contact numbers</a>

                </div>
                <div class="mail">
                    <a href="../cart/cart.html" class="textmail"> emails</a>

                </div>
            <div>   
</body>
</html>