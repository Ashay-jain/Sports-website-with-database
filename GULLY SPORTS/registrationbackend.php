
<html> </html>


<?php

session_start(); 


$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'user_registration');

$name = $_POST['username'];
$pass = $_POST['password'];
$first_name = $_POST['first_name'];
$lastname=$_POST['lastname'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];

$s =" select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num    = mysqli_num_rows($result);

if($num  == 1)   {

	echo'<script>alert(" user name already taken")</script>';
	
	
}
else {

	
	$reg="insert into usertable(name, password,first_name,lastname,mobileno,email) values('$name','$pass','$first_name','$lastname','$mobileno','$email'  )";
	mysqli_query($con, $reg);
	echo'<script>alert(" registation successful")</script>';
	
	
	
}


?>

<h1> <a href="login.php">LOGIN PAGE</a></h1>
</html>