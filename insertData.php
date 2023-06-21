
<?php
include "dbconnect.php";

$name=$_POST['f_name'];
$description=$_POST['f_description'];
$purchase_price=$_POST['f_pp'];
$quantity=$_POST['f_quantity'];

$sql = "INSERT INTO product (ID, Name, Description, Purchase_price, Quantity)
		VALUES (NULL, '$name', '$description', '$purchase_price','quantity')";

		
		if($conn->query($sql))
		{
			header('location:crud.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

