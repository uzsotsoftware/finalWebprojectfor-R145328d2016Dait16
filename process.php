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
		$sname=$_POST['demail'];
		$fgender=$_POST['dgender'];
		$fmedaid=$_POST['dmedicalaidinsurer'];
		$fmedshc=$_POST['dMedicalAidscheme'];
		$fjob=$_POST['occupation'];
		$fpassword=$_POST['password'];
		//echo "hello ".$fname." ".$sname."from inside medbase4"."<br>";
		
		$con="CREATE TABLE clients
		(
		name varchar(256),
		email varchar(256),
		gender varchar(256),
		medical_aid_insurer varchar(256),
		medical_aid_scheme varchar(256),
		occupation varchar(256),
		password varchar(256)
		)";
		if($conn->query($con)===TRUE)
		{
			echo "Table created clients"."<br>";
			
			
		}
		else
		{
			echo "failure 1".$conn->error."<br>";
		}
		
		$con2="INSERT INTO clients(name,email,gender,medical_aid_insurer,medical_aid_scheme,occupation,password)
			VALUES('$fname','$sname','$fgender','$fmedaid','$fmedshc','$fjob','$fpassword')
			";
			if($conn->query($con2)===TRUE)
			{
				 echo "data inserted"."<br>";
				 ?>
							<meta http-equiv="refresh" content="0;URL=login.php?username=<?php echo $_POST['username'] ?>" />	
							</a>
 

							<?php
				 
			}
			else
			{
					echo "failure 2".$conn->error;
					?>
							<meta http-equiv="refresh" content="3;URL=login.php?username=<?php echo $_POST['username'] ?>" />	
							</a>
 

							<?php
				
			}	
			
	}
	
		
	$conn->close();
?> 
</body>
</html>
