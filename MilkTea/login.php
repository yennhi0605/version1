<?php
	require 'main.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		.container {
		  padding: 16px;
		  background-color: white;
		  width: 500px;
		  justify-content: center;
		  border-style: ridge;
		  align-items: center;
		}

		input[type=text], input[type=password] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
		}

		button {
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		}

		button:hover {
		  opacity: 0.8;
		}

		body{
		  margin-top: 50px;
		  align-items: center;
		  justify-content: center;
		  display: flex;
		}

	</style>
</head>
<body>
	<form method="post">
		<div class="container" style="background-color: brown">
			<h2 style="text-align: center">Login</h2>
			<hr>
	      	<label><b style="margin-top: 30px">Username</b></label>
	        <input type="text" placeholder="Enter Username" name="uname" required>

	        <label><b>Password</b></label>
	        <input type="password" placeholder="Enter Password" name="psw" required>
	        <hr>       
	        <button type="submit" name="login">Login</button>
	    </div>
	</form>
</body>
</html>