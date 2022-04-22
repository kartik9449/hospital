<?
include "database.php";
?>

<!DOCTYPE html>
<html>

<center>
<head>
	<h1>	
    CAMBRIDGE UNIVERSITY HOSPITAL
    <br>
Feedback and complaint details</br>
	</h1>	
</head>
<style> body {  background-image: url('7.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;}
</style>
<body style="margin-top: 100px;">
<?php
    require('database.php');
    if (isset($_REQUEST['customer_name'])) {
       
        $customer_name    = $_REQUEST['customer_name'];
        $customer_add = $_REQUEST['customer_add'];
		$customer_tele = 	$_REQUEST['customer_tele'];
		


        $query    = "INSERT into `feedback` (customer_name, customer_feedback, customer_tele )
                     VALUES ('$customer_name', '$customer_add', '$customer_tele')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Feedback submitted.</h3><br/>
                  <p class='link'>Click here to <a href='home.php'>Home</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='home.php'>Home</a> again.</p>
                  </div>";
        }
    } else {
?>
<form action= "" method = "post">
<h2> World class treatment available here </h2>
	Your Name: <input type="text" class="login-input" name="customer_name" placeholder="Name"><br></br>
	Feedback : <input type="text" class="login-input" name="customer_add" placeholder="feedback"><br></br>
	Your Telephone Number: <input type="text" class="login-input" name="customer_tele" placeholder="Telephone Number"><br></br>
  
	
	<input type= "submit"> 
	<p class="link"><a href="home.php">Click to Home</a></p>

	
	
</form>
<?php
	}
	
	?>

</body>
</center>
</html>


