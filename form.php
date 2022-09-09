<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store Data</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
			
			<p>
			<label for="name">Product Name:</label>
			<input type="text" name="name" id="name">
			</p>

			
			<p>
			<label for="description">description:</label>
			<input type="text" name="description" id="description">
			</p>

			
			<p>
			<label for="quantity">quantity:</label>
			<input type="text" name="quantity" id="quantity">
			</p>

			
			<p>
			<label for="price">price:</label>
			<input type="text" name="price" id="price">
			</p>

			
			<p>
			<label for="expire_date">expire_date:</label>
			<input type="expire_date" name="expire_date" id="expire_date">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
