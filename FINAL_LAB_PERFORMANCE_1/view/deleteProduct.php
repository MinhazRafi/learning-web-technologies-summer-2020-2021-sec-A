<?php

require_once('../model/userModel.php');
$id = $_GET['id'];
$product = getUserByID($id);

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="../controller/productControl">
		<fieldset>
			<legend> DELETE PROFILE</legend>
             <br>

             <table>
           	<tr>
           		<td>Name</td>
           		<tr>
           			<td><input type="text" name="" value="<?=$product['name']?>"></td>
           		</tr>
           	</tr>

           	<tr>
           		<td>Buying Price</td>
           		<tr>
           			<td><input type="text" name="name" value="<?=$product['buying_price']?>"></td>
           		</tr>
           	</tr>

           	<tr>
           		<td>Selling Price</td>
           		<tr>
           			<td><input type="text" name="selling_price" value="<?=$product['selling_price']?>"></td>
           		</tr>
           	</tr>

           	 <tr>
		      	<td colspan="2"><hr></td>
		      </tr>

		      <tr>
		          	 <td colspan="2"><input type="submit" name="delete" value="Delete"></td>
		      </tr>

           </table>

</fieldset>
</form>
</body>
</html>