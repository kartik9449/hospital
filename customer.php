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
	END TO END SOLUTION OF DIAGNOSIS FOR THE PATIENTS.</br>
	<br>
		Patient details </br>
	</h1>	
</head>
<style> body {  background-image: url('14.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;}
</style>
<body style="margin-top: 100px;">
<?php
    require('database.php');
    if (isset($_REQUEST['name'])) {
       
        $name    = $_REQUEST['name'];
        $add = $_REQUEST['add'];
		$tele = $_REQUEST['tele'];
		$age = $_REQUEST['age'];
        $course = $_REQUEST['course'];
       
        $query    = "INSERT into `register` ( name1, address1, telephone, age, problem)
                     VALUES ('$name', '$add', '$tele', '$age', '$course')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Registration Done.</h3><br/>
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
Your Name: <input type="text" class="login-input" name="name" placeholder="Name"><br></br>
Your Address : <input type="text" class="login-input" name="add" placeholder="Address"><br></br>
Your Telephone Number: <input type="text" class="login-input" name="tele" placeholder="Telephone Number"><br></br>
Your Age: <input type="text" class="login-input" name="age" placeholder="age"><br></br>
Your Problem: <input type="text" class="login-input" name="course" placeholder="problem"><br></br>

	
	<input type= "submit"> 
	<p class="link"><a href="home.php">Click to Home</a></p>

	
	
</form>
<?php
	}
	
	?>

</body>
</center>
</html>


