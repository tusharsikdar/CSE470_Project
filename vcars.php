<?php
 
$host = "localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname= "bus_module";
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Bus BD</span> Ltd</h1>
        </div>
		<nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="insert.php">Insert New Record</a></li>
          </ul>
        </nav>
      </div>
    </header>

  <!--   <section id="newsletter">
	<div class="container">
      <div class="container">
        <h1>You can search</h1>
        <nav>
		   <div class="search-container">
				<form action="http://localhost/project3/search.php" method="GET">
					<input type="text" placeholder="Search" name="query">
					<button type="submit" class="button_1">Search</button>
				</form>
			</div>
		</nav>
	  </div>
	</div>
	</section> -->
	<div class="dark">
		<div class="form">
		<h5></h5>
		<h2>View Database Of Seats</h2>
		<table width="100%" border="1" style="border-collapse:collapse;">
		<thead>
		<tr><th><strong>name</strong></th><th><strong>seatType</strong></th><th><strong>TicketPrice</strong></th><th><strong>availableSeat</strong></th><th><strong>goingTo</strong></th><th><strong>goingFrom</strong></th><th><strong>station</strong></th><th><strong>date</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
		</thead>
		</div>
    </div>
  </body>
<?php
$count=1;
$sel_query="Select * from bus ORDER BY name;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["seatType"]; ?><td align="center"><?php echo $row["TicketPrice"]; ?></td></td><td align="center"><?php echo $row["availableSeat"]; ?></td><td align="center"><?php echo $row["goingTo"]; ?></td><td align="center"><?php echo $row["goingFrom"]; ?></td><td align="center"><?php echo $row["terminal"]; ?></td><td align="center"><?php echo $row["date"]; ?></td><td align="center"><a href="edit.php?Serial_Number=<?php echo $row["Serial_Number"]; ?>">Edit</a></td><td align="center"><a href="delete.php?Serial_Number=<?php echo $row["Serial_Number"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
<!-- <div class="form">
<p><a href="home.php">Home</a></p> -->

</div>


</html>
