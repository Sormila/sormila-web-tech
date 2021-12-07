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
</head>
<body>
<?php	
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

session_unset();
session_destroy();

header("location:../sormila/Controller/Login.php");

}
	
?>

<?php
<div>
<a href="profile.php">Edit Profile </a>

<a href="Home.php">Home </a>
<br><br><br></div>
<br><br><br>

?>
<h1 style="color:black;text-align:center">Welcome, Mr. / Mrs.  <?php echo $username; ?></h1>
<hr>


<p> <b>OVERVIEW: </b>
The present General Sales Conditions have as their object the purchase of products made remotely via computer network at shop.webtech.it site. Each purchase transaction will be governed by the provisions of LD. 185/99, LD. 206/05; the information for the conclusion of the contract will be submitted art. 12 of Legislative Decree. 70/03 and, as regards the protection of confidentiality, will be submitted to the rules under LD. 196/03.
<br><br>
<b>PRIVACY POLICY: </b>
Webtech in accordance with art. 13 of Legislative Decree 196/2003, informs that the personal and fiscal data acquired also verbally in relation to our business relationship, provided directly by the interested parties, or otherwise acquired as part of the company, they will be handled in compliance with the above law including the confidentiality requirements provided by these In relation to these may be exercised its right under Article 7 LD. 196/2003.
<br><br>
<b>CUSTOMER OBLIGATIONS: </b>
The customer is required, before submitting your purchase order, carefully read these general conditions of sale. The forwarding of the purchase order involves their full knowledge and acceptance. The Customer must, finally, once concluded the on-line purchase procedure, to print and keep these general conditions of sale, already examined and accepted during the conclusion of the contract.
<br><br>
<b>PAYMENT: </b>
The customer can make the payment had to choose one of the following methods listed. Payment by credit card: If the consumer wishes to pay by credit card, it may use the Bkash payment process, likely to ensure the confidentiality of data provided by customers. For any further information and Legal Agreements please see the customer to consult the www.paypal.com website. cash on delivery: cash on delivery is only accepted if made by cash or check; consequently, pursuant to art. 1197 of the Civil Code, will not accept payments by check. This surcharge is due solely and exclusively to the Courier chosen and used by Webtech.</p>
<br><br>


<div>
</div>
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<div id="m1"><input type="submit" value="Logout" id="sub"></div>
</form>
<br><br>
</body>
</html>