<!DOCTYPE html>
<html>
<head>
<title>Online Bookshop</title>
</head>
<body>
    <?php
include '..dbbuy.php';
// define variables to empty values  
$idErr = $nameErr = $amountErr = $mbankErr = $phoneErr = "";  
$id = $name = $amount = $mbank = $phone = "";  
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["id"])) 
    {  
        $idErr = " Information is required"; 
        $flag = True;
    } 
  
    
    if (empty($_POST["name"])) 
    {  
        $nameErr = " Information is required";
        $flag = True;  
    } 
    if (empty($_POST["amount"])) 
    {  
        $amountErr = " Information is required";
        $flag = True;  
    } 
      

    if (empty($_POST["mbank"])) 
    {  
        $mbankErr = "Information is required";
        $flag = True;  
    }  

    if (empty($_POST["phone"])) 
    {  
        $phoneErr = " Information is required";
        $flag = True;  
    } 
    if(!$flag) 
    {
      $id = input_data($_POST["id"]);
      $name = input_data($_POST["name"]);
      $amount = input_data($_POST["amount"]);
      $mbank = input_data($_POST["mbank"]);
      $phone = input_data($_POST["phone"]);

        $res = buy($id, $name, $amount, $mbank, $phone);
        if($res) {
        echo "<script>alert('A link is given to your sim inbox, Confirm it to buy this book')</script>";
        }
        else {
        $errorMessage = "Error while buying.";
        }
  
    }
}

  
  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }  
?> 
<h1>Book Purchase</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="buy">
  <fieldset>
    <br>
    <label for="id">Enter Book ID:</label>
    <input type="text" id="id" name="id">
    <span id="idErr"></span>
    <span style="color: red"><?php echo $idErr; ?> </span> <br><br>
    <label for="name">Enter Book Name:</label>
    <input type="text" id="name" name="name">
    <span id="nameErr"></span>
    <span style="color: red"><?php echo $nameErr; ?> </span><br><br>
    <label for="amount">Enter Payment amount ($):</label>
    <input type="text" id="amount" name="amount">
    <span id="amountErr"></span>
    <span style="color: red"><?php echo $amountErr; ?> </span><br><br>
    <label for="mbank">Select your mobile bank :</label>
    <select name="mbank" id="mbank">
    <option></option>
    <option value="Bkash">Bkash</option>
    <option value="Nagad">Nagad</option>
    <option value="Rocket">Rocket</option>
    </select>
    <span id="mbankErr"></span>
    <span style="color: red"><?php echo $mbankErr; ?> </span><br><br>
    <label for="phone">Enter your Mobile Bank number:</label>
    <input type="tel" id="phone" name="phone" >
    <span id="phoneErr"></span>
    <span style="color: red"><?php echo $phoneErr; ?> </span> <br><br>
  </fieldset>
  <br><div style="text-align : center"><input type="submit" value="Buy" id="subb"></div>
<br><br>
<span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>
</form>
 <br>


</body>
</html>
 

