<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store Data</title>
</head>
<body>
<?php

		$conn = mysqli_connect("localhost", "root", "", "myshop");
		if($_GET['id']){
			$get_id=$_GET['id'];
		
		$sql="SELECT * FROM product WHERE id=$get_id";
		$query=mysqli_query($conn, $sql);
		$data=mysqli_fetch_assoc($query);
		$id=$data['id'];
		$name = $data['name'];
		$description = $data['description'];
		$quantity = $data['quantity'];
		$price =$data['price'];
		$expire_date = $data['expire_date'];
		}

		
		
		
		
?>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="up_done.php" method="get">
			<p>
			<input type="text" name="id" id="id" value="<?php echo $id; ?>" hidden>
			</p>
			<p>
			<label for="name">Product Name:</label>
			<input type="text" name="name" id="name" value="<?php echo $name; ?>">
			</p>

			
			<p>
			<label for="description">description:</label>
			<input type="text" name="description" id="description" value="<?php echo $description; ?>">
			</p>

			
			<p>
			<label for="quantity">quantity:</label>
			<input type="text" name="quantity" id="quantity" value="<?php echo $quantity; ?>">
			</p>

			
			<p>
			<label for="price">price:</label>
			<input type="text" name="price" id="price" value="<?php echo $price; ?>">
			</p>

			
			<p>
			<label for="expire_date">expire_date:</label>
			<input type="expire_date" name="expire_date" id="expire_date" value="<?php echo $expire_date; ?>">
			</p>
			
			<input type="submit" name="edit" value="Edit">
		</form>
	</center>
</body>
</html>
