//Show password
function showPwdOld(){
    var pwdOld = document.getElementById("pwdOld");
    if(pwdOld.type === "password"){
        pwdOld.type = "text";
    }
    else{
        pwdOld.type = "password";
    }
}

function showPwdNew(){
    var pwdNew = document.getElementById("pwdNew");
    if(pwdNew.type === "password"){
        pwdNew.type = "text";
    }
    else{
        pwdNew.type = "password";
    }
}

function showPwdCom(){
    var pwdCom = document.getElementById("pwdCom");
    if(pwdCom.type === "password"){
        pwdCom.type = "text";
    }
    else{
        pwdCom.type = "password";
    }
}

//show requirements
$(document).ready(function(){  
$("#pwdNew").click(function(){
        $("resetForm").animate({height: '500px'});
        $("#requires").show();       
    });    
    $("#pwdNew").focusout(function(){
        $("#requires").hide();
        $("#succeed").hide();
    });
});

var issimple =  false;
var iscapital = false;
var isnumber =  false;
var islength =  false;
var isspecial = false;
var pwdNew = document.getElementById("pwdNew");
var pwdCom = document.getElementById("pwdCom");

pwdNew.onkeyup = function myFunction(){

    var simpleLetters = /[a-z]/g;
    var capitalLetters = /[A-Z]/g;
    var numbers = /[0-9]/g;
    var spchar = /[\!\@\#\$\%\&]/; 

    //checking requirements
    var simple = document.getElementById("simple");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    var special = document.getElementById("special");


    //check for simple letters
    if((pwdNew.value).match(simpleLetters)){
        simple.classList.remove("invalid");
        simple.classList.add("valid");
        issimple = true;
    }
    else{
        simple.classList.remove("valid");
        simple.classList.add("invalid"); 
        issimple = false;
    }

    //chack for capital letters
    if((pwdNew.value).match(capitalLetters)){
        capital.classList.remove("invalid");
        capital.classList.add("valid");
        iscapital = true;
    }
    else{
        capital.classList.remove("valid");
        capital.classList.add("invalid");
        iscapital = false;
    }

    //check for numbers
    if((pwdNew.value).match(numbers)){
        number.classList.remove("invalid");
        number.classList.add("valid");
        isnumber = true;
    }
    else{
        number.classList.remove("valid");
        number.classList.add("invalid");
        isnumber = false;
    }

    //check for special character
    if((pwdNew.value).match(spchar)){
        special.classList.remove("invalid");
        special.classList.add("valid");
        isspecial = true;
    }
    else{
        special.classList.remove("valid");
        special.classList.add("invalid");
        isspecial = false;
    }

    //check the length
    if((pwdNew.value).length >= 8){
        length.classList.remove("invalid");
        length.classList.add("valid");
        islength = true;
    }
    else{
        length.classList.remove("valid");
        length.classList.add("invalid");
        islength = false;
    }
}

pwdCom.onkeyup = function myFunctions(){
     console.log("s");
    if (isnumber && iscapital && issimple && isspecial && islength && (pwdCom.value == pwdNew.value)) {
        document.getElementById("submitbtn").className = 'btn btn-outline-primary';
    }else{
        document.getElementById("submitbtn").className = 'btn btn-outline-danger disabled';

    }

}

//*************Submitting even if the requirements doesn't fulfilled*******************
//submit passwords 
function resetPwd(){
    userName = document.getElementById("uname");
    oldPassword = document.getElementById("pwdOld");
    newPassword = document.getElementById("pwdNew");
    confirmPassword = document.getElementById("pwdCom");

    if(!userName.value){
        userName.focus();
        document.getElementById("pwdOld").innerHTML = "required";
        document.getElementById("message1").innerHTML = "**Fill the user name please!";
        return false;
    }
    else if(!oldPassword.value){
        oldPassword.focus();
        document.getElementById("pwdOld").innerHTML = "required";
        document.getElementById("message2").innerHTML = "**Fill the old password please!";
        return false;
    }
    else if(!newPassword.value) {
        newPassword.focus();
        document.getElementById("pwdNew").innerHTML = "required";
        document.getElementById("message3").innerHTML = "**Fill the new password please!";
        return false;
    }
    else if(!confirmPassword.value) {
        confirmPassword.focus();
        document.getElementById("pwdCom").innerHTML = "required";
        document.getElementById("message4").innerHTML = "**Fill the confirm password please!";
        return false;
    }

    if ((newPassword.value) != (confirmPassword.value)) {
        newPassword.value = "";
        confirmPassword.value = "";
        newPassword.focus();
        document.getElementById("confirmPassword").innerHTML = "**not same";
        return false;
    }
}
function validatePassword(){
        newPassword = document.getElementById("pwdNew");
        confirmPassword = document.getElementById("pwdCom");

        if (!newPassword.value) {
            newPassword.focus();
            document.getElementById("newpw").innerHTML = "required";
            document.getElementById("message1").innerHTML = "**Fill the password please!";
            return false;
        }
        else if (!confirmPassword.value) {
            confirmPassword.focus();
            document.getElementById("cnfpw").innerHTML = "required";
            document.getElementById("message2").innerHTML = "**Fill the confirm password please!";
            return false;
        }
        if((newPassword.value).length < 8) {
            document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
            return false;
        }
        if((confirmPassword.value).length < 8) {
            document.getElementById("message2").innerHTML = "**Password length must be atleast 8 characters";
            return false;
        }
        if((newPassword.value).length > 11) {
            document.getElementById("message1").innerHTML = "**Password length must not exceed 11 characters";
            return false;
        }
        if((confirmPassword.value).length > 11) {
            document.getElementById("message2").innerHTML = "**Password length must not exceed 11 characters";
            return false;
        }
        if ((newPassword.value) != (confirmPassword.value)) {
            newPassword.value = "";
            confirmPassword.value = "";
            newPassword.focus();
            document.getElementById("confirmPassword").innerHTML = "**not same";
            return false;
    }
}