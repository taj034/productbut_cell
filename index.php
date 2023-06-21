

<?php
	session_start(); //this function is used to put value in $_SESSION supergolbal variable
	include "dbconnect.php";
	
	//following two variables ($msg and $x) are used to show the message if password or username wrong
	$msg=""; 
	$x=0;
	
	if(isset($_POST['login'])){  //isset is a function which is used to check whether a variable hold a value or not
	
		$name=$_POST['f_name'];
		$pass=$_POST['f_pass'];
		$sql="SELECT * FROM admin_info WHERE admin_pass='$pass'";
		
		$result=$conn->query($sql);
		$r=$result->fetch_assoc();
		//echo $result->num_rows;
		if($result->num_rows==1){
			$_SESSION['name']=$r['name'];
			$_SESSION['pass']=$r['pass'];
		

			header('location:crud.php');
			//echo "successfully logged in";
		}
		else {
			$x=1;
			$msg="<span style='color:red; font-weight:bold;'> Name  or Password is invalid!!!! </span>";
		}
	}
		


?>

<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Login</h1>
		<?php
			//if password or username wrong then this code will be executed
			if($x==1){ 
			 echo $msg;
			 }
		?>
		<form method="POST" action="index.php">
			<label>Admin_name:</label>
			<input type="text" placeholder="Enter admin_name:" name="f_name"> <br> <br>
			<label>Password:</label>
			<input type="text"  placeholder="Enter admin_password" name="f_pass" > <br> <br>
			<input type="submit" name ="login" value="Login">
		</form>
	</center>	
	
</body>
</html>