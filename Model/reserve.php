<?php
 
 
$host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "bus_module";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$Serial_Number=$_REQUEST['Serial_Number'];
$query = "SELECT * from bus where Serial_Number='".$Serial_Number."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Reserve Seat</title>
<link rel="stylesheet" href="css/style1.css" />
</head>
<body>
<div class="form">
<p><a href="home.php">Home</a> |</p>
<h1 align="center">Reserve Seat</h1>
<?php
$status = "";
if(isset($_POST['email']) )
{
$date = $_REQUEST['date'];
$transactionId = $_REQUEST['transactionId'];
$price = 0;
$type= $_POST['type']; 
$reportingPlace =$_REQUEST['reportingPlace'];
$trainName = $_REQUEST['busName'];
$seatType = $_REQUEST['seatType'];
$email = $_REQUEST['email'];
if($seatType=="Bc")
{
	$price=1000;
}
else if($seatType=="Ec")
{
	$price=700;
}

$insert="insert into ticket (date,price,reportingPlace,busName,seatType) values ('$date','$price','$reportingPlace','$trainName','$seatType')";
$update="update bus set availableSeat=availableSeat-1 where Serial_Number='".$Serial_Number."'";


mysqli_query($conn, $insert) or die(mysqli_error($conn));
mysqli_query($conn, $update) or die(mysqli_erroticketIdr($conn));
$balfetchkor = mysqli_query($conn,"SELECT MAX(ticketId) FROM ticket");
$ticketIdArray = mysqli_fetch_assoc($balfetchkor);
$ticketId=$ticketIdArray['MAX(ticketId)'];
$update2="update user set ticketId='".$ticketId."',transactionId='".$transactionId."' where email='".$email."'";

mysqli_query($conn, $update2) or die(mysqli_error($conn));

if($type=='b'){	
	$dhuka= "update user set paymentMethod='bkash' where email='".$email."'";
    mysqli_query($conn, $dhuka) or die(mysqli_error($conn));		
}
else{	
	$dhuka= "update user set paymentMethod='rocket' where email='".$email."'";
    mysqli_query($conn, $dhuka) or die(mysqli_error($conn));	
}

$status = "Reservaton Successful. </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> <center>
<p><input type="text" name="date" placeholder="Enter date" required value="<?php echo $row['date'];?>"/></p>
<p><input type="text" name="reportingPlace" placeholder="Enter reportingPlace" required value="<?php echo $row['goingFrom'];?>"/></p>
<p><input type="text" name="busName" placeholder="Enter busName" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="seatType" placeholder="Enter seatType" required value="<?php echo $row['seatType'];?>" /></p>
<p><input type="text" name="TicketPrice" placeholder="" required value="<?php echo $row['TicketPrice'];?>" /></p>
<p><input type="text" name="email" placeholder="Enter email" required value /></p>
<p><input type="text" name="transactionId" placeholder="Enter transactionId" required value /></p>
<div>
					<input type="radio" name="type" value="b" required>Bkash
					<input type="radio" name="type" value="r" required>Rocket
</div>


<p><input name="submit" type="submit" value="Submit" /></p>
</center>
</form>
<?php } ?>

</div>
</div>
</body>
</html>