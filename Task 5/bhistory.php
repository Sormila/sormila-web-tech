<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Online Bookshop</title>
</head>
<body>
<?php
include 'dbhistory.php';
if(!empty($_GET["listID"]))
{
    $del = delete($_GET["listID"]);
    if($del)
    {
        $users = getAllUsers();
    }
    else
    {
        $users = getAllUsers();
    }
}
?>
<?php
include 'dbhistory.php';

if(empty($_GET['Search']) or empty(input_data($_GET["bookid"])))
{
    $users = getAllUsers();
}
else
{
    $users = getUsers(input_data($_GET["bookid"]));
}

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

echo "<table id='customers'>";
echo "<tr>";
echo "<th>Book_Id</th>"; 
echo "<th>Book_Name</th>"; 
echo "<th>Amount</th>";
echo "</tr>";
for($i = 0; $i < count($users); $i++)
{
    echo "<tr>";
    echo "<td>" . $users[$i]["id"] . "</td>";
    echo "<td>" . $users[$i]["name"] . "</td>";
    echo "<td>" . $users[$i]["amount"] . "</td>";
    echo "</tr>";
}
?>

<h1>Total Added Books:</h1>
<form method="GET" name ="hView">
    <label for="bookid">Enter book Id:</label>
    <input type="text" id="bookid" name="bookid">    
    &nbsp;&nbsp;&nbsp;<input type="submit" name="Search" value="Search" id="button">
    
    <span id="bookidErr"></span>
    <br><br>
</form>
<fieldset style="background-color: #FBE5C8">

</fieldset>
</body>
</html>