    function isValid(val){
    var flag = true;
    var fname=  val.fname.value
    var lname=  val.lname.value
    var gender=  val.gender.value
    var dob=  val.dob.value
    var religion=  val.religion.value
    var phone=  val.phone.value
    var email=  val.email.value
    var username=  val.username.value
    var password=  val.password.value

    
    if(fname ==="")
    {
        flag = false;
        document.getElementById('fnameErr').innerHTML=" First name can not be empty.";
    }
    if(lname ==="")
    {
        flag = false;
        document.getElementById('lnameErr').innerHTML=" Last name can not be empty.";
        
    }
    if(gender ==="")
    {
        flag = false;
        document.getElementById('genderErr').innerHTML=" Gender can not be empty.";
        
    }
    if(dob ==="")
    {
        flag = false;
        document.getElementById('dobErr').innerHTML=" Date of birth can not be empty.";
        
    }
    if(religion ==="")
    {
        flag = false;
        document.getElementById('religionErr').innerHTML=" Religion can not be empty.";
        
    }
    if(phone ==="")
    {
        flag = false;
        document.getElementById('phoneErr').innerHTML=" Phone number can not be empty.";
        
    }
    if(email ==="")
    {
        flag = false;
        document.getElementById('emailErr').innerHTML=" Email can not be empty.";
        
    }
    if(username ==="")
    {
        flag = false;
        document.getElementById('usernameErr').innerHTML=" User name can not be empty.";
        
    }

    if(password ==="")
    {
        flag = false;
        document.getElementById('passwordErr').innerHTML=" Password can not be empty.";
        
    }
    return flag;
    }
 