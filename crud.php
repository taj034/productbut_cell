<?php
	session_start();
	include "dbconnect.php";
	
	$s="SELECT * FROM product";
	$result=$conn->query($s);
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body>	
		<h2 style="text-align:right;">Welcome <?php echo $_SESSION['name'];?></h2>
		<h4 style="text-align:right;"><a href='logout.php'>Logout </a></h2>
		<center>
			
			<h1> Product List</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Description, </th>
					<th>Purchase_price, </th>
					<th>Quantity</th>
	
				</tr>
				<?php
				//$i=1;
				while($r = $result->fetch_assoc())
				{
					$idd=$r['ID'];
					$nam=$r['Name'];
					$des=$r['Description'];
					$qnt=$r['Quantity'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $qnt . "</td>";
						echo "<td> <a href='editForm.php?edit_id=$idd'>Edit</a></td>";
						echo "<td> <a href='delete.php?del_id=$idd'>Delete</a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="5"><a href="insertForm.php">Insert Record</a></td>
				</tr>
			</table>
		</center>
	
</body>
</html>




