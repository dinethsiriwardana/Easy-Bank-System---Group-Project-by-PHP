function validateForm(){
    var prefix =document.getElementById("prefix").value;
    var fname = document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var Password=document.getElementById("Password").value;
    var NIC=document.getElementById("NIC").value;
    var Phone_Number=document.getElementById("Phone_Number").value;
    var Email=document.getElementById("Email").value;
    var Street_Address=document.getElementById("Street_Address").value;
    var Street_Address_Line_2=document.getElementById("Street_Address_Line_2").value;
    var City=document.getElementById("City").value;
    var Province=document.getElementById("Province").value;
    var Country=document.getElementyId("Country").value;

    if((!prefix.match(/^[A-Za-z]+$/)) || (!fname.match(/^[A-Za-z]+$/)) || (!lname.match(/^[A-Za-z]+$/))) {
       alert("Please Enter the correct Name for Name Fields");
    }

    else if((!Password.match(/^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{8,20}$/))){
        alert("Must have at least one numeric character. <br> Must have at least one lowercase character. <br> Must have at least one uppercase character. <br> Must have at least one special symbol among @#$%. </br> Password length should be between 8 and 20.");
    }

    else if(!NIC.match(/^[0-9]+$/)){
        alert("Please Enter numbers only");
    }

    else if(!Phone_Number.match(/^[0-9]+$/)){
        alert("Please Enter numbers only");
    }

    else if(!Email.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)){
        alert("Please Enter the valied Email Address");
    }

    else if((!Street_Address.match(/^[A-Za-z]+$/)) || (Street_Address_Line_2.match(/^[A-Za-z]+$/))){
        alert("Please Enter characters only");
    }
}


