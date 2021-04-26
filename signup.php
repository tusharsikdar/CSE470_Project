<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   
    <title>Signup</title>
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
            <li class="current"><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Have a Good Day</h1>
        <nav>
          <form>
            <button type="nav" class="button_1" ><a href="allcars.php">View Bus Schedule</a></button>
          </form>
        </nav>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <article id="main-col">
          <!-- <h1 class="page-title">Be A Proud User</h1>
           -->
      <div class="dark">
          <h3 style="background-color:DodgerBlue">Sign up your Account</h3>
		 
            <form class="quote" action="signInsart.php" method="POST">
              <div>
                <label>UserName</label><br>
                <input type="text" placeholder="" name="userName" required>
              </div>
              <div>
                <label>Email</label><br>
                <input type="text" placeholder="" name="email" required>
              </div>
              <div>
                <label>Password</label><br>
                <input type="text" placeholder="" name="password" required>
              </div>
              <div>
                <label>FirstName</label><br>
                <input type="text" placeholder="" name="firstName" required>
              </div>
              <div>
                <label>LastName</label><br>
                <input type="text" placeholder="" name="lastName" required>
              </div>
			  <div>
                <label>Address</label><br>
                <input type="text" placeholder="" name="address" required>
              </div>
			  <div>
                <label>phone</label><br>
                <input type="text" placeholder="" name="phone" required>
              </div>
             
              <div>
                <h5> </h5>
              </div>
              <button class="button_1" type="submit" >Sign up</button>
           </form> 
      </div>
    </section>
  </body>
</html>