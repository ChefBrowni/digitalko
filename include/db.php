<?php
	$database_username = 'sandboxdb';
	$database_password = 'xaweebou';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=sandbox; charset=utf8;', $database_username, $database_password );
?>
<?php
/* Database connection settings */
$host = 'localhost';
$user = 'sandboxdb';
$pass = 'xaweebou';
$db = 'sandbox';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
mysqli_set_charset($mysqli,"utf8");

/* Your query */
$resultc = $mysqli->query("SELECT DISTINCT garancia FROM asd") or die($mysqli->error);
$resulta = $mysqli->query("SELECT DISTINCT nev FROM digitalko_kat") or die($mysqli->error);
$resultb = $mysqli->query("SELECT DISTINCT nev FROM digitalko_markak") or die($mysqli->error);

?>