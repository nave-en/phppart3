<?php
include('db.php');
if(isset($_POST["qwerty"])){
$to      = 'naveenajohncena@gmail.com';
$subject = 'regarding Work';
$message = 'Complete your task soon';
$time=date('Y/m/d H:i');
$t = date('Y-m-d');
$sql="SELECT * FROM tasks where time>'$time'";
$res=$conn->query($sql);
     if ($res->num_rows> 0) { 
        while ($row = $res->fetch_array()) {  
            $to=$row['member_mail']; 
            $tasktime=$row['time'];
            $t1=strtotime($tasktime);
           $newformat = date('Y-m-d',$t1);
            if($t==$newformat){
            	echo"<script>alert('Mail Send successfully')</script>";
            	echo"<script>location.replace('remainder.php')</script>";
            	mail($to,$subject,$message);
        }   
        }  
    }
    else {
     	echo"<script>alert('There is no pending Task')</script>";
     } 
}
?>
<html>
	<head><title>Mail Sending</title></head>
	<body>
		<form action="/test.php" method="POST">
			<label>Click here to send mail for pending task</label><br>
			<input type="submit" name="qwerty" value="Submit">
		</form>
	</body>
</html>