function passwordCheck(){
    var register= document.getElementById("register");
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirmPassword").value;
    if (password === confirm_password){
    alert("password confirm success");
    }
    else{
        alert ("fail to confirm");
    }
}
