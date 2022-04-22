<?
include "database.php";
?>

<!DOCTYPE html>
<html>

<center>
<head>
	<h1>	
		PRESCRIPTION
	</h1>	
</head>
<style> body {  background-image: url('13.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;}
</style>
<body style="margin-top: 100px;">
<?php
    require('database.php');
    if (isset($_GET['age'])) {
       
        $id    = $_GET['age'];
        $date2 = $_GET['date2'];
        $name = $_GET['name'];
		$diagnosis = $_GET['diagnosis'];
		


        $query    = "INSERT into `record` (age, date2, name2, diagnosis )
                     VALUES ('$age', '$date2', $name', '$diagnosis')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Log in Successfully.</h3><br/>
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
<h2> World class treatment available here</h2>
	Age: <input type="int" class="login-input" name="age" placeholder="age"><br></br>
	Date: <input type="text" class="login-input" name="date" placeholder="Date"><br></br>
 Name: <input type="text" class="login-input" name="name" placeholder="name"><br></br>
 Diagnosis: <input type="text" class="login-input" name="diagnosis" placeholder="diagnosis"><br></br>
  
  
	<input type= "SUBMIT"> 
	<p class="link"><a href="home.php">Click to Home</a></p>

	
	
</form>
<?php
	}
	
	?>

</body>
</center>
</html>


