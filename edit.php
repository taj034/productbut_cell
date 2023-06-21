<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
      $name=$_POST['f_name'];
     $description=$_POST['f_description'];
      $purchase_price=$_POST['f_pp'];
       $quantity=$_POST['f_quantity'];
	
	$sql="UPDATE student SET Name='$name', Description='$description' ,
	Purchase_price='$purchase_price' where Quantity='$quantity'";
	
	if($conn->query($sql)){
		
		header('location:crud.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>