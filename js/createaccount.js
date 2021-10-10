var attemt=5;

function validate(){
	var gmail= document.getElementByID("gmail").value;
	var Password= document.getElementByID("Password").value;
	var Retry password= document.getElementByID("Retry password").value;
	var Contact number= document.getElementByID("Contact number").value;
	if(gmail =="Formget" && Password == "Formget" && Retry password  == "Formget" && Contact number == "Formget")
	alert("create account succesfully")
	return false;
}
else{
	create account--;
	alert("you have left"+create account+" create account;");
	if (create account==0){
		document.getElementByID(gmail).disabled = true;
		document.getElementByID(Password).disabled = true;
		document.getElementByID(Retry password).disabled = true;
		document.getElementByID( Contact number).disabled = true;
		document.getElementByID( Create account).disabled = true;
		return false;
	}
	}
	}
	}
	}