<?php
	error_reporting(E_ALL);
	$r = [];
	$conn = new mysqli("localhost", "sandboxdb", "xaweebou", "sandbox");
	mysqli_set_charset($conn,"utf8");
	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}else{
	
	// ALL CRITERIUM ENTERED

	    if(isset($_POST["min"]) && !empty($_POST["min"]) && isset($_POST["max"]) && !empty($_POST["max"]) && isset($_POST["rak"]) && isset($_POST["gar"])){
			$tol = $_POST["min"];
			$ig = $_POST["max"];
		//	$rak = $_POST["rak"];
			$gar = $_POST["gar"];
			if($gar == ""){
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `ar` <= ".(int)$ig." && `keszlet` != ''");
			}else{
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `ar` <= ".(int)$ig." && `keszlet` != '' && `garancia` = '".$gar."'");
			}
			include_once "writeIn.php";
		}

	// 3 CRITERIUM ENTERED

		else if(isset($_POST["min"]) && !empty($_POST["min"]) && isset($_POST["max"]) && !empty($_POST["max"]) && isset($_POST["rak"])){
			$tol = $_POST["min"];
			$ig = $_POST["max"];
		//	$rak = $_POST["rak"];
			$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `ar` <= ".(int)$ig." && `keszlet` != '' && `keszlet` != '0'");
			include_once "writeIn.php";
		}else if(isset($_POST["min"]) && !empty($_POST["min"]) && isset($_POST["max"]) && !empty($_POST["max"]) && isset($_POST["gar"])){
			$tol = $_POST["min"];
			$ig = $_POST["max"];
			$gar = $_POST["gar"];
			if($gar == ""){
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `ar` <= ".(int)$ig."");
			}else{
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `ar` <= ".(int)$ig." && `garancia` = '".$gar."'");
			}
			include_once "writeIn.php";
		}else if(isset($_POST["min"]) && !empty($_POST["min"]) && isset($_POST["rak"]) && isset($_POST["gar"])){
			$tol = $_POST["min"];
		//	$rak = $_POST["rak"];
			$gar = $_POST["gar"];
			if($gar == ""){
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `keszlet` != '' && `keszlet` != '0'");
			}else{
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `keszlet` != '' && `keszlet` != '0' && `garancia` = '".$gar."'");
			}
			include_once "writeIn.php";
		}else if(isset($_POST["max"]) && !empty($_POST["max"]) && isset($_POST["rak"]) && isset($_POST["gar"])){
			$max = $_POST["max"];
		//	$rak = $_POST["rak"];
			$gar = $_POST["gar"];
			if($gar == ""){
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `ar` <= ".(int)$ig." && `keszlet` != '' && `keszlet` != '0'");
			}else{
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `ar` <= ".(int)$ig." && `keszlet` != '' && `keszlet` != '0' && `garancia` = '".$gar."'");
			}
			include_once "writeIn.php";
		}

	// 2 CRITERIUM ENTERED

		// MINIMUM PRICE

	    else if(isset($_POST["min"]) && !empty($_POST["min"]) && isset($_POST["max"]) && !empty($_POST["max"])){
			$tol = $_POST["min"];
			$ig = $_POST["max"];			
			$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `ar` <= ".(int)$ig."");
			include_once "writeIn.php";
		}else if(isset($_POST["min"]) && !empty($_POST["min"]) && isset($_POST["rak"])){
			$tol = $_POST["min"];
		//	$rak = $_POST["rak"];
			$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `keszlet` != '' && `keszlet` != '0'");
			include_once "writeIn.php";
		}else if(isset($_POST["min"]) && !empty($_POST["min"]) && isset($_POST["gar"])){
			$tol = $_POST["min"];
			$gar = $_POST["gar"];
			if($gar == ""){
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol."");
			}else{
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol." && `garancia` = '".$gar."'");
			}
			include_once "writeIn.php";
		}

		// MAXIMUM PRICE

		else if(isset($_POST["max"]) && !empty($_POST["max"]) && isset($_POST["rak"])){
			$ig = $_POST["max"];
		//	$rak = $_POST["rak"];
			$result = $conn->query("SELECT * FROM `asd` WHERE `ar` <= ".(int)$ig." && `keszlet` != '' && `keszlet` != '0'");
			include_once "writeIn.php";
		}else if(isset($_POST["max"]) && !empty($_POST["max"]) && isset($_POST["gar"])){
			$ig = $_POST["max"];
			$gar = $_POST["gar"];
			if($gar == ""){
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` <= ".(int)$ig."");
			}else{
				$result = $conn->query("SELECT * FROM `asd` WHERE `ar` <= ".(int)$ig." && `garancia` = '".$gar."'");
			}
			include_once "writeIn.php";
		}

		// IN STORE WITH GUARANTEE

		else if(isset($_POST["rak"]) && isset($_POST["gar"])){
		//	$rak = $_POST["rak"];
			$gar = $_POST["gar"];
			if($gar == ""){
				$result = $conn->query("SELECT * FROM `asd` WHERE `keszlet` != '' && `keszlet` != '0'");
			}else{
				$result = $conn->query("SELECT * FROM `asd` WHERE `keszlet` != '' && `keszlet` != '0' && `garancia` = '".$gar."'");
			}
			include_once "writeIn.php";
		}

	// 1 CRITERIUM ENTERED

		else if(isset($_POST["min"]) && !empty($_POST["min"])){
			$tol = $_POST["min"];
			$result = $conn->query("SELECT * FROM `asd` WHERE `ar` >= ".(int)$tol."");
			include_once "writeIn.php";
		}else if(isset($_POST["max"]) && !empty($_POST["max"])){
			$ig = $_POST["max"];
			$result = $conn->query("SELECT * FROM `asd` WHERE `ar` <= ".(int)$ig."");
			include_once "writeIn.php";
		}else if(isset($_POST["rak"])){
			$rak = $_POST["rak"];
			$result = $conn->query("SELECT * FROM `asd` WHERE `keszlet` != '' && `keszlet` != '0'");
			include_once "writeIn.php";
		}else if(isset($_POST["gar"])){
			$gar = $_POST["gar"];
			if($gar == ""){
				if($result = $conn->query("SELECT * FROM `asd`")){
					include_once "writeIn.php";
				}
			}else{
				if($result = $conn->query("SELECT * FROM `asd` WHERE `garancia` = '".$gar."'")){
					include_once "writeIn.php";
				}
			}
		}
	}
?>