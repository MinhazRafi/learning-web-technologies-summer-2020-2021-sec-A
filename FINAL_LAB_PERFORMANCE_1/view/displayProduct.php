<?php

require_once('../model/userModel.php');
$products = getAllUser();

?>

<html>
<head>
	<title>Display</title>
</head>
<body>
<fieldset>
	<legend>DISPLAY</legend>
	<table border="1">
		<tr>
			<td>NAME</td>
			<td>PROFIT</td>
			<td colspan="2">Action</td>
		</tr>

		<?php 
		for ($i=0; $i<count($products) ; $i++) 
			{ ?>
			<tr>
				<td><?=$products[$i]['name']?></td>
				<td><?=$products[$i]['selling_price'] - $products[$i]['buying_price']?></td>
				<td>
					<a href="editProduct.php?id=<?=$products[i]['id']?>">edit </a>
				</td>
				<td>
					<a href="deleteProduct.php?id=<?=$products[i]['id']?>">delete </a>
				</td>
			</tr>
		    <?php}?> 

	</table>
</fieldset>
</body>
</html>