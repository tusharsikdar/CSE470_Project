<?php

$host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "bus_module";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$Serial_Number=$_REQUEST['Serial_Number'];
$query = "DELETE FROM bus WHERE Serial_Number=$Serial_Number"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());

$status = "Record Deleted Successfully. </br></br><a href='vcars.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';

/*CloseCon($conn);*/
?>