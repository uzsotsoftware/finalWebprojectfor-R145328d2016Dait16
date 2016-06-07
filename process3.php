<DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$conn = new mysqli("localhost","cbl","cblion","medbasezim");
if ($conn->connect_error)
	{
    die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		$fname=$_POST['username'];
		$fpassword=$_POST['password'];
		echo "hello ".$fname." ".$fpassword."from inside medbasezim"."<br>";
		$sql = "SELECT name,password FROM clients";
		$result = $conn->query($sql);

		if ($result->num_rows >0) 
		{
			while($row = $result->fetch_assoc())
			{
				$row = $result->fetch_assoc();
				$name=$row['name'];
				$password=$row['password'];
				echo $name." he ".$password;
				if(($fname==$name)&&($fpassword==$password))
				{
					?>
							<meta http-equiv="refresh" content="0;URL=profile.php?username=<?php echo $_POST['username'] ?>" />	
							</a>
 

							<?php
				}
				else
				{
								?>	
							<a href="index.php">Login failure go to home</a>
								<?php
				}
				
			}
			
		} 
		else
		{
			echo "0 results";
		}
	}	
	$conn->close();
?> 
</body>
</html>
