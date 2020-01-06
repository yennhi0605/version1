<?php
	require 'database.php';

	if (isset($_POST["logout"])) {
		unset($uname);
	}

	if(isset($_POST["delete"])){
	$btn = $_POST["delete"];

	$sql = "DELETE from MilkTeas where id = " .$btn;
	$db->query($sql);
	}

	$sql = "SELECT * from MilkTeas";
	$result = $db->query($sql)->fetch_all();

	$sql = "SELECT * FROM Users";
	$result2 = $db->query($sql)->fetch_all();
	
	/*====================Log in==========================*/

	if (isset($_POST["login"])) {
		$uname = $_POST["uname"];
		$pass = $_POST["psw"];
		for ($i = 0; $i <count($result2) ; $i++) { 
			if ($uname == $result2[$i][1] && $pass == $result2[$i][2]) {
				if ($result2[$i][4] == "admin") {
					header ("location:indexAdmin.php") ;
				}			
			}elseif ($uname == $result2[$i][1] && $pass == $result2[$i][2]) {
				if ($result2[$i][4] == "user") {
					header ("location:indexUser.php");
				}				
			}else{
				echo "Please enter user again";
			}
		}
		
	}

	//Admin add product //

    if(isset($_POST["add"])){
      $image=$_POST["img"];
      $name=$_POST["name"];
      $type=$_POST["type"];
      $price=$_POST["price"];   
      $sql = "INSERT into milkteas values(null,'".$image."',".$name.",'".$type."','".$price."','image/".$image."')";
      $db->query($sql);
    } 
?>
 	