    function isValid(){
    var flag = true;
    var id=document.forms["buy"]["id"].value;
    var name=document.forms["buy"]["name"].value;
    var amount=document.forms["buy"]["amount"].value;
    var mbank=document.forms["buy"]["mbank"].value;
    var phone=document.forms["buy"]["phone"].value;


    
    if(id ==="")
    {
        flag = false;
        document.getElementById('idErr').innerHTML=" Field can not be empty.";
    }
    if(name ==="")
    {
        flag = false;
        document.getElementById('nameErr').innerHTML=" Field can not be empty.";
        
    }
    if(amount ==="")
    {
        flag = false;
        document.getElementById('amountErr').innerHTML=" Field not be empty.";
        
    }
    if(mbank ==="")
    {
        flag = false;
        document.getElementById('mbankErr').innerHTML=" Field can not be empty.";
        
    }
    if(phone ==="")
    {
        flag = false;
        document.getElementById('phoneErr').innerHTML=" Field can not be empty.";
        
    }
    return flag;
    }