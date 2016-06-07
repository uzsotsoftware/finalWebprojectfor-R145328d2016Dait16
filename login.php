

<!DOCTYPE html>
<html>
<title>MedBase Medical Systems
</title>
<link rel="stylesheet" href="css/Bootstrap.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/regis.js"></script>
</head>
<body>
	<h1>MedBase Medical Systems</h1>
<div id="container">
	
	<header role="banner" id="main-header">
		<div id="logo">
		</div>
		
		<nav id="main_nav">
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="index.php">Home</a></li>
				
			</ul>
		</nav>
	</header> 
  <form action="process2.php" method="post" >

            <div class="fieldgroup">
            <label for="username" >Username :</label>
            <input type="text" name="username" id="username"><br>
            </div>
            <div class="fieldgroup">
            <label>Password:</label>
            <input type="text" name="password" id="password"><br>
            </div>
			<input type="submit" value="submit">
</form>	
</body>
</html>
