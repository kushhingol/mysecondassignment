function matchpass(){  
var firstpassword=document.f1.user_password.value;  
var secondpassword=document.f1.user_password2.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("password must be same!");
document.f1.user_password.value = null;
document.f1.user_password2.value = null;
return false;  
}  
}  