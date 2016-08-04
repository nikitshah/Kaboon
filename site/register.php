<!doctype html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/style3.css"> 

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
        			</div><!--row-->
				 </div><!--container-->
			</nav>

		</header>
<main>
	<div class="container">
	<div class="page">
	<p>Back to <a href="login.php">Login</a></p>
	<h3>Registration Form</h3>
	<form action="" method="POST">
	Username: <input type="text" name="user" id="text"><br />
	Password: <input type="password" name="pass" id="text"><br />	
	<input type="submit" value="Register" name="submit" id="button"/>
	</form>
	</div>
	</div>
</main>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('user_registration') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>

</body>
</html>