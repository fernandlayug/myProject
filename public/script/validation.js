function validate(){
    if(document.myForm.Name.value =="") {
      document.getElementById("nameErr").innerHTML="Please enter your Fullname";
        document.myForm.Name.focus();
        return false;
    }

    if(document.myForm.account.value == "-1"){
        document.getElementById("AccountErr").innerHTML="Please provide your account type!";
        return false;
    }

    if (document.myForm.Age.value == ""){
        document.getElementById("ageErr").innerHTML="Please enter your Fullname";
        document.myForm.Age.focus();
        return false;
    } else {
        var num = document.myForm.Age.value;
        if(isNaN(num)){
            alert("Please enter numeric values")
        }
    }

    if(document.myForm.Email.value == "") {
        document.getElementById("emailErr").innerHTML="Please enter your E-mail";
        document.myForm.Email.focus()
        return false;
    } else {
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(document.myForm.Email.value) == false) {
            document.getElementById("emailErr").innerHTML="Please use the proper format of e-mail";
            document.myForm.Email.focus();
            return false;
        }
    }

    var firstpassword=document.myForm.password.value;
    var secondpassword=document.myForm.password2.value;
    if(firstpassword!==secondpassword){
        document.getElementById("passErr").innerHTML="Password and Confirm Password doesn't match!";
        return false;
    } 
    
    if(document.myForm.username.value== ""){
        document.getElementById("userErr").innerHTML="Please provide your username!";
        document.myForm.username.focus();
        return false;
    }

    if(document.myForm.username.value.length < 8){
        document.getElementById("userErr").innerHTML="Username atleast 8 character";
        document.myForm.username.focus();
        return false;
    }
    var userletters = /^[a-zA-Z0-9]+$/;
    if(document.myForm.username.value.match(userletters))
    {
        return true;
        } else{
            document.getElementById("userErr").innerHTML="Username must have alphanumeric characters only!";
            document.myForm.username.focus();
            return false;
        }

 
}