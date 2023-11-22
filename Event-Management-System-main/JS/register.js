function validatee(){
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    var confirmpassword=document.getElementById("confirmpassword").value;
    var contactnumber=document.getElementById("phonenumber").value;

    if(username==""){
        alert("Please enter username");
        return false;
    }

    if(password==""){
        alert("Please enter password");
        return false;
    }

    if(confirmpassword==""){
        alert("Please enter confirm password");
        return false;
    }

    if(contactnumber==""){
        alert("Please enter contact number");
        return false;
    }

    const username_regex=/^usr[0-9]+$/;
    if(!username_regex.test(username)){
        alert("Please enter valid username");
        return false;
    }

    const password_regex=/^[a-z A-Z 0-9]+$/;
    if(!password_regex.test(password)){
        alert("Please enter valid password");
        return false;
    }

    if(password!=confirmpassword){
        alert("Password and confirm password should be same");
        return false;
    }

    const contactnumber_regex=/^[0-9]{10}$/;
    if(!contactnumber_regex.test(contactnumber)){
        alert("Please enter valid contact number");
        return false;
    }
}
