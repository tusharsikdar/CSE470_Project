<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
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
            <li><a href="signup.php">Signup</a></li>
            <li class="current"><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>
<!-- 
    <section id="newsletter">
      <div class="container">
        <h1>You can visit our market</h1>
        <nav>
          <form>
            <button type="nav" class="button_1" ><a href="allcars.php">View Market</a></button>
          </form>
        </nav>
      </div>
    </section> -->

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 style="background-color:DodgerBlue" class="page-title">Bangladesh Bus Companies</h1>
          <ul id="services">
            <li>
              <h3>Bangladesh Bus Service Ltd</h3>
              <p>First time intercity online bus ticket booking system in Bangladesh </p>
              <li>
              <h3>Green Line Paribahan Ltd.</h3>
              <p>Green Line Paribahan is apparently a family owned transport company specializing in transportation of passenger bus services since 1990. From a humble beginning of local services, our transport system encompasses all reachable areas of Bangladesh and also beyond the border, extending our reach to Kolkata in India.</p>
              </li>
              <li>
              <h3>Ena Transport Ltd.</h3>
              <p>Welcome to the official business site of Ena Transport Pvt. Ltd.
Ena Transport Pvt. Ltd. was established in 1984, aimed to serve people and their need to commute with comfort. Today after 30 plus years of perseverance it has become one of the countries largest providers of transport country wide.</p>
</li>
            </li>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h2 style="background-color:DodgerBlue">Login to your account</h2>
            <form class="quote" action="check.php" method="POST">
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="" name="email" required>
  						</div>
              <div>
                <label>Password</label><br>
                <input type="text" placeholder="" name="password" required>
              </div>
  			  		             
              <div>
                <h4> </h4>
              </div>
  						<button class="button_1" type="submit">Log In</button>
			</form>
          </div>
        </aside>
      </div>
    </section>
</body>
</html>