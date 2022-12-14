<?php
session_start();
$message="";
if(count($_POST)>0) 
{
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("site",$conn);
	$result = mysql_query("SELECT * FROM users WHERE kullanici_adi='" . $_POST["kullanici_adi"] . "' and sifre = '". $_POST["sifre"]."'");
	$row  = mysql_fetch_array($result);
	if(is_array($row))
	{
		$_SESSION["kullanici_id"] = $row[kullanici_id];
		$_SESSION["kullanici_adi"] = $row[kullanici_adi];
	} 
	else 
	{
		$message = "Yanlýþ Kullanýcý Adý veya Þifresi";
	}
}
if(isset($_SESSION["kullanici_id"])) 
{
	header("Location:index.php");
}
?>
<html>
<head>
<title>Sistem Giriþi</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Sistem Giriþi</td>
</tr>
<tr class="tablerow">
<td align="right">Kullanýcý Adý</td>
	<td><input type="text" name="kullanici_adi"></td>
</tr>
<tr class="tablerow">
<td align="right">Þifre</td>
	<td><input type="password" name="sifre"></td>
</tr>
<tr class="tableheader">
	<td align="center" colspan="2"><input type="submit" name="submit" value="Giriþ"></td>
</tr>
</table>
</form>
</body></html>