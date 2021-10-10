<?php


?>

<!DOCTYPE html>
<html>

    <head>
	    <title>Login Page</title>
		
		<link rel="stylesheet" href="../css/log&item.css">
	</head>
	
	<body>
	
	    <div class="main">
		
		        <div class="headbox">
			        <p class="headtext">easy shopping qulity products</p>
			    </div>
				
			<div class="header">
			
			    <div class="logoo">

                    <img class="logo" src="../images/logoo.jpg" height="100" width="100">
                </div>

                <div class="delivername">
                    <lable>Grocery</lable>
                </div>
            </div>

		    <ul class="topmenu">
		
	            <li class="topmenuli"><a class="menu" href="../index.php">Home</a></li>
		        <li class="topmenuli"><a class="menu" href="../category/category.php">Category</a></li>
		        <li class="topmenuli"><a class="menu" href="../aboutus/aboutus.html">About us</a></li>
		        <li class="topmenuli"><a class="menu" href="">Login</a></li>
			
	        </ul>
        </div>			
			
	<h1><center>Login Page</center></h1>
	
	<?php
	if(isset($_COOKIE['msg'])){
		echo '<h3>'.$_COOKIE['msg'].'</h3><br>';
	}





?>
	<div class="start">
	
	<form action="../php/loginuser.php" method="POST">
	    <center>
		    <b>gmail:</b><br><br>
			<input type="gmail" id="mygmail" name="gmail" ><br><br>
			
			<b>password:<b><br><br>
			<input type="password" id="myInput" name="password" ><br><br>
			
			<input type="submit" value="login" name="submitbtn">
			
			<h3><b> OR </b></h3>
			</center>
		</br>

		<a class="create" href="../createaccount/createaccount.html">create account</a>
			
	
	    </center>
	</form>
	</div>
	
	</body>


</html>


