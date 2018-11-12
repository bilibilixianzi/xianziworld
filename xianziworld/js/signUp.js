function validateForm(){
    		var username=document.forms["myForm"]["username"].value;
    		var password1=document.forms["myForm"]["password"].value;
    		var password2=document.forms["myForm"]["conpassword"].value;
    		var email=document.forms["myForm"]["email"].value;
    		var ss="";
    		if (username==null || username==""){
    			ss="Please enter Username";
    			window.alert(ss);
    			return false;
    		}
    		if (password1==null || password1=="" ||password1!=password2){
    			ss="Passwords are different";
    			window.alert(ss);
    			return false;
    		}
    		var atpos=email.indexOf("@");
 			var dotpos=email.lastIndexOf(".");
    		if ( atpos<1 || dotpos<atpos+2 || dotpos>=email.length){
    			ss="E-mail format Error";
    			window.alert(ss);
    			return false;
    		}
    	}