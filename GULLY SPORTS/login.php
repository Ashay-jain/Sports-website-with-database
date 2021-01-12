<htmL>
	<head>
	<title>User Login And Registration
		</title>
		<link rel="stylesheet" type="text/css" href="log,reg.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	</head>
	<body>
		
		
		<div class="header">
	<h2>Log in</h2>
</div>
<form method="post" action="validation.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="" required>
	</div>
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" value=""  required >
	</div>
	
	<div class="input-group">
		<button type="submit" class="btn btn-primary" name="register_btn">Log in</button>
	</div>
	          <p>
			 New member?
				 <a href="registration.php">  Register here</a>
			 </p>

	</body>
</htmL>