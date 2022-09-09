<!DOCTYPE html>
<html>

<head>
	<title>Update page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "myshop");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		//if($_GET['id']){
		//$id=$_GET['id'];}
		// Taking all 5 values from the form data(input)
		$id = $_REQUEST['id'];
		echo $id;
		$name = $_REQUEST['name'];
		echo $name;
		$description = $_REQUEST['description'];
		$quantity = $_REQUEST['quantity'];
		$price = $_REQUEST['price'];
		$expire_date = $_REQUEST['expire_date'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "UPDATE  product
			SET name='$name',description='$description',quantity='$quantity',
			price='$price',expire_date='$expire_date' WHERE id='$id' ";
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