<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Data</title>
</head>

<body>
<?php
include_once("pdoCrud.php");

$obj=new pdoCrud();

if(isset($_POST['a_url'])){
	$a_url = $_POST['a_url'];
	$s_url = $_POST['s_url'];
	if($obj->insert($a_url,$s_url)){
		echo "Data inserted successfully!";
	}
}
?>
<div class="container">
	<h3>Insert Your Data</h3>
	<form action="insert.php" method="post">
		<table width="400" class="table-borderd">
			<tr>
				<th scope="row">Actual URL</th>
				<td><input type="text" name="a_url"></td>
			</tr>
			<tr>
				<th scope="row">Short URL</th>
				<td><input type="text" name="s_url"></td>
			</tr>
			<tr>
				<th scope="row">&nbsp;</th>
				<td><input type="submit" name="insert" value="Insert" class="btn"></td>
			</tr>
		</table>
	</form>
</div>


</body>
</html>
