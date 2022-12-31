<!DOCTYPE html>
<html>

<head>
	<title>Leave a message</title>
</head>

<body>
<!--PHP--->
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => contact_us
		$conn = mysqli_connect("localhost", "root", "", "contact_us");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$full_name = $_REQUEST['full_name'];
		$phone_number = $_REQUEST['phone_number'];
		$email = $_REQUEST['email'];
        $county = $_REQUEST['county'];
        $msg = $_REQUEST['msg'];		
		// Performing insert query execution		

        $strQuery = "INSERT INTO contact (full_name,phone_number,email,county,msg ) 
        VALUES('$full_name','$phone_number','$email','$county','$msg')";


		if(mysqli_query($conn, $strQuery)){
			echo "<h3>We have received your message. We will contact you soon. Thank you.</h3>";
		} else{
			echo "ERROR: Hush! Sorry $strQuery. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
