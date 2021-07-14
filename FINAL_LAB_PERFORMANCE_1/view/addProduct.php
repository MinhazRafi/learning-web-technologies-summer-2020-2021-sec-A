<!DOCTYPE html>
<html>
<head>
	<title> Add</title>
</head>
<body>
	<form method="post" action="../controller/productControl.php">
     <fieldset>
     	<legend>ADD PPRODUCT</legend><br>
	      <table>
		      <tr>
		      	<td>Name</td>
		          <tr>
		          	 <td><input type="text" name="name"></td>
		          </tr>
		      </tr>
              <tr>
		      	<td>Buying Price</td>
		          <tr>
		          	 <td><input type="text" name="buying_price"></td>
		          </tr>
		      </tr>
		      <tr>
		      	<td>Selling Price</td>
		          <tr>
		          	 <td><input type="text" name="selling_price"></td>
		          </tr>
		      </tr>

              <tr>
		      	<td><hr></td>
		      </tr>

		      <tr>
		          	 <td><input type="checkbox" name="Display" value="Display">Display</td>
		      </tr>

		      <tr>
		      	<td><hr></td>
		      </tr>

		      <tr>
		          	 <td><input type="submit" name="Save" value="Save"></td>
		      </tr>

	      </table>
     </fieldset>
    </form> 
</body>
</html>