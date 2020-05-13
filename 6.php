<?php
session_start();
?>
<html>
<head><title>
	session example
</title></head>
<body onload=myfunction()>
	<form method="POST" action="session.php">
		<textarea rows="5"cols="100" name="one" id="one"></textarea><br>
		<input type="submit" name="qwerty" value="submit">
	</form>
</body>
<?php
if(isset($_POST["qwerty"]))
{
	$tex=$_POST["one"];
	$_SESSION["tex"]="$tex";
}
?>
<script>
	function myfunction(){
	var foo="<?php echo $_SESSION['tex'];?>";
document.getElementById("one").value=foo;
}
</script>
</html>