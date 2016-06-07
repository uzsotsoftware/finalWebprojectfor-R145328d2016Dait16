


<!DOCTYPE html>
<html>
<title>MedBase Medical Systems
</title>
<link rel="stylesheet" href="css/Bootstrap.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/regis.js"></script>
</head>
<body>
	<body>
	<h1>MedBase Medical Systems</h1>
<div id="container">
	
	<header role="banner" id="main-header">
		<div id="logo">
		</div>
		
		<nav id="main_nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Login</a></li>
				
			</ul>
		</nav>
	</header> 
  <form action="process.php" method="post" id="register-form" novalidate="novalidate">

			<h4>User Registration</h4>
			<div id="form-content">
			<fieldset>

            <div class="fieldgroup">
            <label for="username" >Name :</label>
            <input type="text" name="username" id="username"><br>
            </div>
            <div class="fieldgroup">
            <label>Email :</label>
            <input type="text" name="demail" id="email"><br>
            </div>
            <div class="fieldgroup">
            <label>Gender :</label>
            <input type="text" name="dgender" id="gender"><br>
            </div>
            <div class="fieldgroup">
            <label>Medical aid insurer :</label>
            <input type="text" name="dmedicalaidinsurer" id="medicalaidinsurer"><br>
            </div>
            <div class="fieldgroup">
            <label>Medical Aid scheme :</label>
            <input type="text" name="dMedicalAidscheme" id="MedicalAidscheme"><br>
            </div>
            <div class="fieldgroup">
            <label>Occupation :</label>
			<input type="text" name="occupation" id="occupation"><br>
            </div>
            <div class="fieldgroup">
            <label>Nationa ID Number :</label>
            <input type="text" name="nationaIDNumber" id="nationaIDNumber"><br>
            </div>
            <div class="fieldgroup">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password"><br>
            </div>
			<div class="fieldgroup">
			<label>Confirm Password :</label>
			<input type="password" name="cpassword" id="cpassword">
			<input type="submit" name="register" id="register" value="submit">
            </div>

   </fieldset>
</div>

        <div class="fieldgroup">
            <p>Already registered? <a href="login.php">Sign in</a></p>
        </div>
</form>	
</p>     
</body>
</html>

