<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name 
$database = 'myshop';

$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM product ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html>

<head>

	<title>View data</title>
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		
		}
		
	a{
		text-decoration:none;
	}
	h5{
		display: block;
		text-align: center;

	}
	button {
	display: block;
	width: 30%;
	border: none;
	background-color: #2ed573;
	padding: 14px 28px;
	font-size: 18px;
	cursor: pointer;
	text-align: center;
	margin:auto;
	color:#fff;
	}
	</style>
</head>

<body>
	<section>
		<h1>Products</h1>
		<!-- TABLE CONSTRUCTION product(id, name, description, quantity, price, expire_date)-->
		<table>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>description</th>
				<th>quantity</th>
				<th>price</th>
				<th>expire_date</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['description'];?></td>
				<td><?php echo $rows['quantity'];?></td>
				<td><?php echo $rows['price'];?></td>
				<td><?php echo $rows['expire_date'];?></td>
				<td>
				<a href="update.php?id='<?php echo($rows['id']);?>' ">Updare</a>
				</td>
				<td>
				<a href="delete.php?id='<?php echo($rows['id']);?>' ">Delete</a>
				</td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
	</br>
	<p>
	 <a href="form.php"><button type="button">Insert new item</button></a>
	 <h5>Click here to insert new product
	 </h5></p>
	 
</body>

</html>
