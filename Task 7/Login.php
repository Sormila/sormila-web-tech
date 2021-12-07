<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Online Bookshop</title>
<link rel="stylesheet" href="loginn.css"></link>
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
<?php 
include 'dblogin.php';
$usernameErr = $passwordErr = "";
$login = "";
$flag = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 


if (empty($_POST["username"])) 
    {  
       $usernameErr = " Username is required";
       $flag = True;  
    } 

if (empty($_POST["password"])) 
    {  
       $passwordErr = " Password is required";
       $flag = True;  
    } 
 
if(!$flag) 
    {

    $username = input_data($_POST["username"]);
    $password = input_data($_POST["password"]); 
    
    $res = login($username,$password);
    if($res)
    {
    setcookie("uname", $username, time() + 60*60*24);
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../Home.php");
    }
    else 
    {
    $login =  "Username/Password doesn't match";
    }
    }


}
  function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

?>


<div id="cd">
<span style="color: blue"></span><a href="Home.php">Create New Account</a>
<br><br><br></div>
<br><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="login" onsubmit="return isValid();">
        <div style= "text-align:center"><h1>Login Form</h1></div>
        <fieldset id="fd">
            <legend><h3>User Info</h3></legend>
            <label for="username">User Name:</label>
            <input type="text" name="username" id="username" >
            <span id="usernameErr"></span>
            <span style="color: red"><?php echo $usernameErr; ?> </span><br><br>
            </span><label for="password">Password:</label>
            <input type="password" name="password" id="password" >
            <span id="passwordErr"></span>
            <span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
            <input type="submit" name="submit" value="Login" id="subb">
             <div style= "text-align:center"><span style="color: red"><?php echo "<h1>". $login . "</h1>"?> </span></div>
        </fieldset>
    </form> 

</body>
</html>
             
