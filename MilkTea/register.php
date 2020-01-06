<?php
	require 'database.php';
	$sql2 = "SELECT * from Users";
	$result2 = $db->query($sql2)->fetch_all();
	$check=true;

	// session_start();

	 /*====================Log up==========================*/

	 if (isset($_POST["register"])) {
	 	$fName = $_POST["nameLogup"];
	 	$uname = $_POST["unameLogup"];
	 	$password = $_POST["pswLogup"];
	 	$password1 = $_POST["pswLogup1"];
	 	for ($i = 0; $i  < count($result2); $i++) { 
	 		if ($uname == $result2[$i][1] && $password == $result2[$i][2] && $fName == $result2[$i][3]) {
	 			echo "Account exist. Please retry!";
	 		}else{
	 			$pos = "user";
            $sql2 = "INSERT into Users values(null,'".$uname."','".$password."','".$fName."','".$pos."')";
            $db->query($sql2);
            echo "Register successful!<a href='login.php'>Log in your account</a>";
	 		}
	 	}
	 	
	 }

    // if (isset($_POST['register'])){
    //     $fullname = addslashes($_POST['nameLogup']);
    //     $uname = addslashes($_POST['unameLogup']);
    //     $password = addslashes($_POST['pswLogup']);
    //     $password1 = addslashes($_POST['pswLogup1']);

    //     if (!$uname || !$fuulname || !$password) {
    //         echo "Please input all information. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //         exit;
    //     }

    //     for($i = 0; $i < count($result2); $i++) { 
    //         if($uname==$result2[$i][1]&& $password==$result2[$i][2] && $fullName==$result2[$i][3] ){
    //             $check=true;
    //             echo "Account exit! Log in!<a href='javascript: history.go(-1)'>Trở lại</a>";
    //             exit;
    //         }
    //         else{
    //             $check=false;
    //         }

    //     }

    //     if ($check==false) {
    //         $pos="user";
    //         $sql2 = "INSERT into Users values(null,'".$uname."','".$password."','".$fullName."','".$pos."')";
    //         $db->query($sql2);
    //         echo "Log up successful!<a href='javascript: history.go(-1)'>Log in your account</a>";
    //         exit;
    //     }

    // } 
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
	<form action="" method="post">
		<div class="container" style="background-color: brown">
			<h2 style="text-align: center">Register</h2>
			<hr>
			<label><b style="margin-top: 30px">Full Name</b></label>
			 <input type="text" placeholder="Enter FullName" name="nameLogup" required>

	      	<label><b style="margin-top: 30px">Username</b></label>
	        <input type="text" placeholder="Enter Username" name="unameLogup" required>

	        <label><b>Password</b></label>
	        <input type="password" placeholder="Enter Password" name="pswLogup" required>

	        <label><b>Enter Password Again</b></label>
	        <input type="password" placeholder="Enter Password Again" name="pswLogup1" required>
	        <hr>       
	        <button type="submit" name="register">Register</button>
	    </div>
	</form>
</body>
</html>