<html>
	<h1> <a href="login.php">LOGIN HERE</a></h1>
	<h1> <a href="registration.php">REGISTER HERE </a></h1>
</html>
</html>

</html>



<?php

session_start(); 


$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'user_registration');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password ='$pass'";
$result = mysqli_query($con, $s);
$num    = mysqli_num_rows($result);

if($num  == 1)   {
	$_SESSION['username'] = $name;
	
	header('location:index.php');
}

else {
	
echo '<script>alert(" you have a entered a wrong user name or password")</script>';
	
	

	
	
}

	
	
	


?>