<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">BusBD</span> Ltd</h1>
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

    <section id="newsletter">
      <div class="container">
        <h1>You can visit our market</h1>
        <nav>
          <form>
            <button type="nav" class="button_1" ><a href="allcars.php">View Market</a></button>
          </form>
        </nav>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">3 Bus Companies</h1>
          <ul id="services">
            <li>
              <h3>Bangladesh Bus Service Ltd</h3>
              <p>First time intercity online bus ticket booking system in Bangladesh </p>
            </li>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Login to your Account</h3>
            <form class="quote" action="check.php" method="POST">
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Email Address" name="email" required>
  						</div>
              <div>
                <label>Password</label><br>
                <input type="text" placeholder="Password" name="password" required>
              </div>
  			  		             
              <div>
                <h5> </h5>
              </div>
  						<button class="button_1" type="submit">login</button>
			</form>
          </div>
        </aside>
      </div>
    </section>
</body>
</html>