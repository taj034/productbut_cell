<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM product where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['Name'];
	$des=$arr['Description'];
	$pp=$arr['Purchase_price'];
	$qnt=$arr['Quantity'];
?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id?>">
			<label>Name</label>
			<input type="text" value="<?php echo $nam ?>" name="f_name"> <br> <br>
			<label>Description</label>
			<input type="text" value="<?php echo $des ?>" name="f_description"> <br> <br>
			<label>Purchase_price</label>
			<input type="email"  value="<?php echo $pp ?>" name="f_pp" > <br> <br>
			<label>Quantity</label>
			<input type="email"  value="<?php echo $qnt ?>" name="f_quantity" > <br> <br>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>
