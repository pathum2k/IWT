<?php

if(isset($_COOKIE['id'])){
	$login=true;
}else{
	$login=false;
}


?>

<!DOCTYPE html>
<html lang="en"> 
<head>
<link rel="stylesheet" href="css/home.css">
    <meta charset="UTF-8">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<border="1" cellpadding="0">
    <link rel="stylesheet" href="css/homepage.css"/>
	<title>Home Page</title>
<script>
.back
{
	width:100%;
}
function stickyMenu(){
     var sticky=document.getElementById('sticky');
	 if(widow.pageYOffset > 220){
	     sticky.classList.add('sticky');
		 }
		 else{
		     sticky.classList.remove('sticky');
		 }	 
}

window.onscroll = function()
{
     stickyMenu();
}


</script>	 

</head>
<body>


<center>
     <div class="parallax">
	     <div class="page-title">Online Grocery Delivery</div>
	 </div>
</center>	 
 <img class="logo" src="images/photo.jpg" height="100" width="100"> 
     <div class="menu" id="sticky">
         <ul class="menu-ul">
            <a href="" class="a-menu" ><li>Home</li></a>
            <a href="./category/category.php" class="a-menu"><li>category</li></a>
            <a href="./aboutus/aboutus.html"="a-menu"><li>About Us</li></a>
			<?php
				if($login){
					echo '
					<form action="./php/logout.php"method="post" >
					<li><button type="submit" class="a-menu" name="logout">Logout</button></li></form>';
					
				}else{
					echo '<a href="./login/login.php" class="a-menu" ><li>Login</li></a>';
				}
			?>
			</br>
			<img id="back" src="./images/homee.jpg">
            
         </ul>
         <div class="">
     </div>
</body>
	 
	 <center>
	     <p>Contact Number</p>
		 <a href="0112345678">Contact Us</a>
     </center>
</html> 