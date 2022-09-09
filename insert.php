<!DOCTYPE html>
<html>

<head>
	<title>Insert  page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "myshop");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all all values from the form data(input)
		$id='';
		$name = $_REQUEST['name'];
		$description = $_REQUEST['description'];
		$quantity = $_REQUEST['quantity'];
		$price = $_REQUEST['price'];
		$expire_date = $_REQUEST['expire_date'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO product VALUES ('$id','$name',
			'$description','$quantity','$price','$expire_date')";
		
		if(mysqli_query($conn, $sql)){
			header("Location:http://localhost/CRUD_ASS/index.php");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
