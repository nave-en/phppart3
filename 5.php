<html>
	<head>
		<title>login</title>
	</head>
<?php
if(isset($_POST["qwerty"]))
{
	$user=$_POST["uname"];
	$pwd=$_POST["pwd"];
	if(isset($_COOKIE["$user"]))
	{
		if(isset($_COOKIE["$pwd"]))
		{
	     echo"<script>alert('welcome $_COOKIE[$user]')</script>";		
		}
		else
		{
	     echo"<script>alert('incorrect password')</script>";		
		}
	}
	else
	{
		echo"<script>alert('account not found')</script>";
	}
}
?>
	<body>
	<form action="greet.php" method="POST">
		<p>enter ur username</p><input type="text" name="uname" placeholder="username" required><br>
		<p>enter ur password</p><input type="password" name="pwd" placeholder="password" required><br>
		<input type="submit" value="submit" name="qwerty">
	</form>
</body>
</html>