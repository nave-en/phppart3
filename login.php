<html>
	<head>
		<title>login</title>
	</head>
<?php
if(isset($_POST["qwerty"]))
{
	$user=$_POST["uname"];
	$pwd=$_POST["pwd"];
	if(!isset($_COOKIE["$user"]))
	{
		setcookie($user,$pwd,time()+86400*2,"/");
		echo"<script>alert('account created successfully')</script>";
	}
	else
	{
		echo"<script>alert('account already exist')</script>";
	}
}
?>
	<body>
	<form action="login.php" method="POST">
		<p>enter ur username</p><input type="text" name="uname" placeholder="username" required><br>
		<p>enter ur password</p><input type="password" name="pwd" placeholder="password" required><br>
		<input type="submit" value="submit" name="qwerty">
	</form>
</body>
</html>