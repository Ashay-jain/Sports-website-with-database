<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
<link rel="stylesheet" type="text/css" href="log,reg.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	
	
<div class="header">
	<h2>Registration Form</h2>
</div>
<form method="post" action="registrationbackend.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="" required>
	</div>
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" value=""  required >
	</div>
	
	<div class="input-group">
		<label>First name</label>
		<input type="text" name="first_name" value=""  required >
	</div>
	
	
	<div class="input-group">
		<label>Last name</label>
		<input type="text" name="lastname" value=""  required >
	</div>
	
	
	<div class="input-group">
		<label>Mobile no.</label>
		<input type="tel" name="mobileno" value=""  required >
	</div>
	
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value=""  required >
	</div>
	
	
	
	
	<div class="input-group">
		<button type="submit" class="btn btn-primary" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
		
	</p>
	

	
</form>
</body>
</html>


