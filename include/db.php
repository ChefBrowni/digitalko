<?php
	$database_username = 'root';
	$database_password = 'root';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=mete; charset=utf8;', $database_username, $database_password );
?>
<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'mete';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
mysqli_set_charset($mysqli,"utf8");

/* Your query */
$result = $mysqli->query("SELECT DISTINCT garancia FROM asd") or die($mysqli->error);
$resultc = $mysqli->query("SELECT DISTINCT garancia FROM asd") or die($mysqli->error);
$resulta = $mysqli->query("SELECT DISTINCT nev FROM digitalko_kat") or die($mysqli->error);
$resultb = $mysqli->query("SELECT DISTINCT nev FROM digitalko_markak") or die($mysqli->error);

?>