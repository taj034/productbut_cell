<?php
	include "dbconnect.php";
	$id=$_GET['del_id'];
	
	$sql="DELETE FROM product WHERE id='$id'";
	
	if($conn->query($sql))
	{
		header('location:crud.php');
		//echo "Successfully deleted.";
	}
	else
	 "Failed delete!";


$conn->close();
?>