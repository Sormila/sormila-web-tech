<!DOCTYPE html>
<html>
<head>
<title>Online Bookshop</title>
<script src="reg.js"></script>
<link rel="stylesheet" href="reg.css"></link>
<style>
#cd{
 background-color:navy;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 8px 5px 0 rgba(0, 0, 0, 0.24)
 }
 #cd a{
 float:right;
 display:block;
 color:white;
 text-align:center;
 padding:18px 16px;
 text-decoration:none;
 opacity: 0.8;
 transition: 0.8s;
 cursor: pointer;
 }
 #cd a:hover
 { opacity: 1;
 background-color:red;
 color:white;}
}
</style>
</head>
<body>
<div id="cd">
<span style="color: blue"></span><a href="Login.php">Go Back</a>
<br><br><br></div>
<br><br><br>

<form method="POST" name ="registration" onsubmit="add(this); return false;">
  <h1 style="text-align: center;">Registration form</h1>
  <hr>
  <fieldset>
    <legend><h3>Personal Information</h3></legend>
    <label for="fname">Enter your first name:</label>
    <input type="text" id="fname" name="fname">
    <span id="fnameErr"></span>
     <br><br>
    <label for="lname">Enter your Last name:</label>
    <input type="text" id="lname" name="lname">
    <span id="lnameErr"></span>
    <br><br>
    <label for="gender">Gender :</label>
    <select name="gender" id="gender">
    <option></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
    </select>
    <span id="genderErr"></span>
    <br><br>
    <label for="DOB">Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <span id="dobErr"></span>
    <br><br>
    <label for="religion">Choose your Religion:</label>
    <select name="religion" id="religion">
    <option></option>
    <option value="Islam">Islam</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Christianity">Christianity</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Sikhism">Sikhism</option>
    </select>
    <span id="religionErr"></span>
    <br><br>
    
  </fieldset>
  <fieldset>
    <legend><h3>Account Information</h3></legend>
    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" >
    <span id="phoneErr"></span>
     <br><br>
    <label for="email">Enter your Email:</label>
    <input type="email" id="email" name="email">
    <span id="emailErr"></span>
    <br><br>
    <label for="username">Enter your Username:</label>
    <input type="text" id="username" name="username">
    <span id="usernameErr"></span>
    <br><br>
    <label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password">
    <span id="passwordErr"></span>
    <br><br>
  </fieldset>
  <br><br><input type="submit" value="Register" id="subb">
</form>
 <br>
<div id="reg"></div>
 
</body>
</html>