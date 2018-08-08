<!DOCTYPE html>
<html>
<head>
	<title>1</title>
</head>
<body>
	<form method="POST">
<?php
$con=mysqli_connect("localhost","root","root","mete");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM asd");
mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age) 
VALUES ('Glenn','Quagmire',33)");

mysqli_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset="utf-8"" />
<title>Update multiple rows in mysqli with checkbox</title>

<script type="text/javascript">
<!--
function un_check(){
for (var i = 0; i < document.frmactive.elements.length; i++) {
var e = document.frmactive.elements[i];
if ((e.name != 'allbox') && (e.type == 'checkbox')) {
e.checked = document.frmactive.allbox.checked;
}}}
//-->
</script>

</head>
<body>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="frmactive" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1">
<tr>
<td colspan="5"><input name="activate" type="submit" id="activate" value="Activate" />
<input name="deactivate" type="submit" id="deactivate" value="Deactivate" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td colspan="4"><strong>Update multiple rows in mysqli with checkbox</strong> </td>
</tr><tr>
<td align="center"><input type="checkbox" name="allbox" title="Select or Deselct ALL" style="background-color:#ccc;"/></td>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Firstname</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>Status</strong></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<tr>
<td align="center"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $rows['id']; ?>"></td>
<td><? echo $rows['id']; ?></td>
<td><? echo $rows['name']; ?></td>
<td><? echo $rows['lastname']; ?></td>
<td><? echo $rows['status']; ?></td>
</tr>
<?php
}
?>
<tr>
<td colspan="5" align="center">&nbsp;</td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</body>
</html>
</form>
</body>
</html>