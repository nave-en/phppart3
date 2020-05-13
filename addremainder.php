<?php
include("db.php");
?>
<html>
<head>
	<title>Add Remainder</title>
</head>
<style type="text/css">
	body{
		background-color: black ;
	}
	#one
	{
	 border-width:10px; 
     border-style: solid;
     border-color: crimson;
     margin-top: 50px;
     margin-left: 300px;
     padding: 30px;
     height: 400px;
     width:500px;
     background-color: khaki;
	}
	label{
		font-weight: bold;
	}
	input{
		border-radius: 12px;
		background-color: lightgrey;
		font-size: 16px;
	}
	input[type="text"]{
   width:100%;
   padding:10px 15px;
	}
	input[type="mail"]{
   width:100%;
   padding:10px 15px;
	}
	input[type="datetime-local"]
	{
   width:100%;
   padding:10px 15px;
	}
	input[type="submit"]
	{
		margin-top: 5%;
		width: 40%;
		height:10%;
		border-radius: 12px;
	}
	input[type="submit"]:hover{
		background-color: limegreen;
		border-color: red;
		color: red;
	}
	input:hover{
		background-color:ghostwhite;
	}
	input:focus{
		background-color:ghostwhite;
		border-color:red;
		color:black;
	}
	button
{

	height:10%;
	width:40%;
	background-color: darkorange;
	color:solid black;
	border-radius: 12px;
}
button:hover
{
	background-color: orange;
	border-color: red;
	color: red;
}
</style>
<script type="text/javascript">
	function  myfunction(){
    location.replace("remainder.php");
    
	}
</script>
<body>
	<div id="one">
		<h3>Add Remainder to the List</h3>
  <form action="addremainder.php" method="POST">
  <label for="Team member">Member Name:</label><br>
  <input type="text" name="member" placeholder="team member assigned to task"><br>
  <label for="member mail">Member e-mail:</label><br>
  <input type="mail" name="mail" placeholder="team member assigned to task"><br>
  <label for="task name">Task name:</label><br>
  <input type="text" name="tname" placeholder="task name"><br>
  <label for="Completion Time">Completion-time:</label><br>
  <input type="datetime-local" name="complete" placeholder="date=dd:mm:yy:hh:mm"><br>
  <center><input type="submit" name="qwerty"></center>
</form>
<center><button id="delete" onclick="myfunction()">Home</button></center><br>
</div>
</body>
<?php
if(isset($_POST["qwerty"]))
{
	$member=$_POST["member"];
	$mail=$_POST["mail"];
	$tname=$_POST["tname"];
	$complete=$_POST["complete"];
	$sql="INSERT into tasks values('$member','$mail','$tname','$complete')";
   if ($conn->query($sql) === true)
{
    echo "<script>alert('Task added successfully')</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
</html>