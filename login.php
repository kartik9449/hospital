<?
include "database.php";
?>

<!DOCTYPE html>
<html>

<center>
<head>
	<h1>	
		Login Details
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
    if (isset($_POST['id'])) {
      
       
      $id    = $_POST['id'];
      $name = $_POST['name'];
		  $password = $_POST['password'];
		

        $query    = "INSERT into `login` (id, name2, password2 )
                     VALUES ('$id', '$name', '$password')";
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
<h1> Book your appointment online</h1>
<h2> World class treatment available here</h2>
	Login ID: <input type="int" class="login-input" name="id" placeholder="ID"><br></br>
	Patient Name: <input type="text" class="login-input" name="name" placeholder="Name"><br></br>
  Password: <input type="int" class="login-input" name="password" placeholder="password"><br></br>
  
	<input type= "SUBMIT"> 
	<p class="link"><a href="home.php">Click to Home</a></p>

	
	
</form>
<?php
	}
	
	?>

</body>
</center>
</html>


