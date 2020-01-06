<?php
	require 'main.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="milktea.css">
</head>
<body>
	<form action="index.php" method="post">
		<div class="container" style="background-color: brown">
			<h2 style="text-align: center">ADD PRODUCT</h2>
			<hr>
			<input type="file" name="img">
	      	<label><b style="margin-top: 30px">Name Product</b></label>
	        <input type="text" placeholder="Enter Product Name" name="namePr">

	        <label><b>Type Product</b></label>
	        <input type="text" placeholder="Enter Product Type" name="type">
	        <hr> 
	        <label><b>Price Product</b></label>
	        <input type="text" placeholder="Enter Product Price" name="type">
	        <hr>             
	        <button type="submit" name="add">ADD</button>
	    </div>
	</form>
</body>
</html>