<?php
include('db.php');
?>
<html>
<head><title>contact list</title>
<style>
    body{
        background-color: black;
    }
    h1
    {
        width:100%;
        background-color:green; 
    }
    table,th,td
    {
        border-collapse: collapse;
        border: 1px solid black;
        padding: 15px 15px 15px 15px; 
        color:yellow;
        border-color: pink;
    }
    #two{
    height:30px;
    width:200px;
    background-color: yellow;
    margin-top: 10px;
    float:left;
    border-radius: 12px;
}
#two:hover
{
    background-color: orange;
    color:red;
}
</style></head>
<body>
    <h1>
        Your Pending Tasks
    </h1>
    <?php
    $time=Date('Y/m/d H:i');
$sql="SELECT * FROM tasks where time>'$time'";
$res=$conn->query($sql);
     if ($res->num_rows> 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>member_name</th>"; 
        echo "<th>member_email</th>"; 
        echo "<th>task_name</th>";
        echo "<th>Datetime</th"; 
        echo "</tr>"; 
        while ($row = $res->fetch_array()) { 
            echo "<tr>"; 
            echo "<td>".$row['member_name']."</td>"; 
            echo "<td>".$row['member_mail']."</td>"; 
            echo "<td>".$row['task_name']."</td>";
            echo "<td>".$row['time']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
    <input id="two" onClick="window.location.href='addremainder.php'"type="submit" value="HOME">
    </body>
</html>