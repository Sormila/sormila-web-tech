<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Online Bookshop</title>
</head>
<body>
<?php
include 'dbdel.php';
$idErr =  "";  
$id = "";  
$successfulMessage = "";
$errorMessage = "";
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["id"])) 
    {  
        $idErr = " Information is required"; 
        $flag = True;
    } 
    if(!$flag) 
    {
      $id = input_data($_POST["id"]);


        $res = del($id);
        if($res) {
        $successfulMessage = "Successfully cancel...";
        }
        else {
        $errorMessage = "Successfully cancel...";
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

<h1>Cancel Order</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="cancel">
    <label for="id">Enter Book id for order cancellation:</label>
    <input type="text" id="id" name="id">
    &nbsp;&nbsp;&nbsp;<input type="submit" value="Cancel" id="sub"><br>
    <span id="idErr"></span>
    <span style="color: red"><?php echo $idErr; ?> </span> <br><br>
    <span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span><br><br>
</form>
</body>
</html>