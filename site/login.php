
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Kaboon</title>
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/styles.css"> 
    	
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<!--the grey border in the background is because navbar-default which gets activated by bootstrap.min-->
				<div class="container">
					<div class="row">
					<div class="navbar-header">
						<div class="navbar-brand pull-left col-xs-4">
							<h1 id="brand">Kaboon</h1>
						</div> <!--navbar-brand-->  
						
						
						</div>
        			<!--navbar-header-->
        				
        				<form class="page nav navbar-nav navbar-right" action="" method="POST">
						Username: <input type="text" name="user" id="text">
						Password: <input type="password" name="pass" id="text">	
						<input type="submit" value="Log In" name="submit" id="button">
						</form>
						
        			</div><!--row-->
				 </div><!--container-->
			</nav>

		</header>
		<main>
				<div class="container">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<h2>Not a member yet?</h2>
							<p>Click<a href="register.php"> here </a>to register</p>	
							<p>It's free and always will be</p>
	    				</div>
			
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('user_registration') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: index.php");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>
<img src="main.jpg" style="width:100%;height:700px;">
					</div>
				</div>
		</main>

		<!--<div class="page">
<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
<h3>Login Form</h3>
</div>-->

			
	</body>
</html>
