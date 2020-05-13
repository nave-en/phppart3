<html>
<head>
	<title>delete cookie</title>
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
	     		
	     setcookie($user,$pwd,time()-3600,"/");
	     echo"<script>alert('deleted succesfully')</script>";
	
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
	<form action="deletecookie.php" method="POST">
		<p>enter ur username</p><input type="text" name="uname" placeholder="username" required><br>
		<p>enter ur password</p><input type="password" name="pwd" placeholder="password" required><br>
		<input type="submit" value="submit" name="qwerty">
	</form>
	</body>
</html>