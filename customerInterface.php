<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Customer</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Bus BD</span>  Ltd</h1>
        </div>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
          </ul>
        </nav>
      </div>
    </header>
<!-- <section id="newsletter">
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
    

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Thank you for visiting us</h1>
          
      <div class="dark">
          <h3>Available Seats</h3>
		 
             <?php
            
$host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "bus_module";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
			$raw_results = mysqli_query($conn,"SELECT * FROM bus") or die(mysql_error());
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                echo "<p>BusName: ".$results['name']." <br/> Type:".$results['seatType']."<br/>TicketPrice: ".$results['TicketPrice']."<br/> Seats:".$results['availableSeat']." <br/> goingTo:".$results['goingTo']."<br/> date:".$results['date']."</p>" ;
				echo '<button type="nav" class="button_1" ><a href="reserve.php?Serial_Number='.$results['Serial_Number'].'"> Reserve</a></button>';
                
				echo '<div><H3></H3></div>';
            };
             
	/*CloseCon($conn);*/
     
?>
      </div>
    </section>
  </body>
</html>