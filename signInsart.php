<?php
$userName=  $_POST['userName'];
$email=  $_POST['email'];
$password=  $_POST['password'];
$firstName=  $_POST['firstName'];
$lastName=  $_POST['lastName'];
$address=  $_POST['address'];
$phone=  $_POST['phone'];
$userType= 1;

// 
	$host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "bus_module";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	
                  	$query="select * from user where email='$email' or userName='$userName' ";
        $data=mysqli_query($conn,$query);

        if(mysqli_num_rows($data)>0){

                      echo '<script type="text/javascript">  alert("User with this username or email already exists. Try another username.") </script>';

                                     }
	else if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
	else {
		$Insert = "insert into user (userName, email, password, firstName, lastName,address,phone,userType) values('$userName', '$email', '$password', '$firstName', '$lastName', '$address', '$phone',1)";


		
		if ($conn->query($Insert) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
		header ("location: welcome.php");
		$conn->close();
		
	}


?>	