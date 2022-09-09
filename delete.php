<?php
    $product_id =$_GET['id'];
echo($product_id);
    $conn = mysqli_connect("localhost", "root", "", "myshop") or die("Connection Failed");
	
    $sql = "DELETE FROM product WHERE id = {$product_id}";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");
header("Location:http://localhost/CRUD_ASS/index.php");
   

    mysqli_close($conn);

?>