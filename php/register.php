<?php
		//2.save regist info into database
		//2.1. insert user data into database
		include_once "db_connect.php";
		
		//check if form or submit button is submitted
		if (isset($_POST['signup'])) {
			//get data in variable
			$name = $_POST['user-name'];
			$email = $_POST['user-email'];
			$passwd = $_POST['user-password'];
			$cpasswd = $_POST['user-cpassword'];
			
			//insert into users table
			$sql = "INSERT INTO users(user_name, user_email, user_passwd)
			VALUE('". $name . "', '". $email . "','" . $passwd . "')";

			mysqli_query($con, $sql);

			// INSERT INTO users(user_name,user_email,user_passwd) 
			// VALUES('Tanaporn','6210513007@psu.ac.th','123456')




		}
		



		//2.2. validate user data

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">PHP Simple CRUD</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login.php">Login</a></li>
				<li class="active"><a href="register.php">Sign Up</a></li>
				<li><a href="admin_login.php">Admin</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER ['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<legend>Sign Up</legend>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="user-name" placeholder="Enter Full Name" required value="" class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="user-email" placeholder="Email" required value="" class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="user-password" placeholder="Password" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Confirm Password</label>
						<input type="password" name="user-cpassword" placeholder="Confirm Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<!--3.display message -->

		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
		Already Registered? <a href="login.php">Login Here</a>
		</div>
	</div>
</div>
</body>
</html>
