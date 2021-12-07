<?php 
	session_start();

	$username = "";

	if(isset($_SESSION['username'])) 
	{
		$username = $_SESSION['username'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Homepage</title>
<link rel="stylesheet" href="Home.css"></link>
</head>
<body>
<?php	
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

session_unset();
session_destroy();

header("location:Login.php");

}
	
?>

<?php
include 'Header.html';
include 'Body.php';
include 'Footer.html';
?>



<div>
</div>
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<div id="m1"><input type="submit" value="Logout" id="sub"></div>
</form>
<br><br>
</body>
</html>