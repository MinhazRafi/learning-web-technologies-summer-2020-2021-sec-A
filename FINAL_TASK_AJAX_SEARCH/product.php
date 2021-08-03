<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form method="POST" action="">
			<table>
				<tr>
					<td>
						<fieldset>
							<legend>DISPLAY</legend>
<?php 

	$conn = mysqli_connect('localhost', 'root', '', 'product_db');

	$sql = 'select * from products';
                    
	$result = mysqli_query($conn, $sql);

	
	echo "<table border=1> 
			<tr>
				<td> Name </td>
				<td> Profit </td>
			</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
 		$name =$row['name'];
		$buy = $row['buying_price'];
		$sell = $row['selling_price'];
		$profit = $sell - $buy;
		
		echo 	"<tr>
					<td>{$row['name']}</td>
					<td>$profit</td>
					<td>
					<a href=editProduct.php>Edit</a>
					</td>
					<td>
						<a href=deleteProduct.php?name=$name>Delete</a>
					</td>	
				</tr>";


	}
	

	echo "</table>";
	
?>
						</fieldset>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html