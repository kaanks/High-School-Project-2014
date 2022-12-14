<?php
include"ust.php";
extract($_POST);
include "ayarlar.php";
echo "<a href='alt.php'><font size='red'>Konu Alt Baþlýðý Eklemek Ýçin Týklayýnýz</font></a>";
if ($islem=='duzenle')
	{
     $sorgu="update alt_konu set konu_formulu='$duzenle_konu_formulu',ders_id='$ders_id',sinif_id='$sinif_id',konu_ornegi='$duzenle_konu_ornegi',konu_alt_basligi='$duzenle_konu_alt_basligi' where id=$id";
	 //echo"$sorgu";
	 $sonuc=mysql_query($sorgu);
		$konu_alt_basligi=$duzenle_konu_alt_basligi;
		$konu_ornegi=$duzenle_konu_ornegi;
		$ders_id=$ders_id;
		$sinif_id=$sinif_id;
		$konu_formulu=$duzenle_konu_formulu;
	}
	$sorgu_ders="SELECT adlari.ders_adi,adlari.id FROM adlari where id='$ders_id'";
	$sonuc_ders=mysql_query($sorgu_ders);
echo "<form method='post' action='duzenle.php?id=$id&islem=duzenle'>
	<table border='1'>
	<tr>
		<td colspan='2' align='center'>Düzenleme</td>
	</tr>
	<tr>
		<td>Sinif</td>
		<td>$sinif_id</td>
	</tr>
	<tr>
			<td>Ders Adi</td>";
		while($row_ders=mysql_fetch_array($sonuc_ders))
		{
			extract($row_ders);
			echo"<td>$ders_adi</td>";
		}
		echo"
	</tr>
	<tr>
		<td>Konu Baþlýðý</td>
		<td>$konu_basligi</td>
	</tr>
    <tr>
		<td>Konu Alt Baþlýðý</td>
		<td><input type='text' name='duzenle_konu_alt_basligi' value='$konu_alt_basligi'></td>
	</tr>
	<tr>
		<td>Konu Örneði</td>
		<td><textarea name='duzenle_konu_ornegi' cols='25' rows='5'>$konu_ornegi</textarea></td>
	</tr>
	<tr>
		<td>Konu Formülü</td>
		<td><textarea name='duzenle_konu_formulu' cols='25' rows='5'>$konu_formulu</textarea></td>
	</tr>		
	<tr>
		<td colspan='2' align='center'><input type='submit' value='Düzenle'></td>
	</tr>
	</table>
	<input type='hidden' name='ders_id' value='$ders_id'>
	<input type='hidden' name='sinif_id' value='$sinif_id'>
	<input type='hidden' name='konu_basligi' value='$konu_basligi'>
	</form>";
	echo "<table>
<tr>
    <td>Ders</td>
	<td>Sýnýf</td>
	<td>Konu Baþlýðý</td>
	<td>Konu Alt Baþlýðý</td>
	<td>Konu Formülü</td>
	<td>Konu Örneði</td>
	<td>Düzenle</td>
	<td>Sil</td>
</tr>";
$sorgu="SELECT alt_konu.id,alt_konu.konu_formulu,alt_konu.konu_ornegi,alt_konu.sinif_id,alt_konu.konu_basligi,alt_konu.konu_alt_basligi,adlari.ders_adi
FROM alt_konu INNER JOIN adlari ON alt_konu.ders_id = adlari.id
WHERE
alt_konu.ders_id = '$ders_id' AND
alt_konu.konu_basligi = '$konu_basligi'
order by id desc";
	//echo"$sorgu";
$sonuc=mysql_query($sorgu);
while ($row=mysql_fetch_array($sonuc))
{
	extract($row);
	echo"<tr>
	<form method='post' action='duzenle.php?id=$id'>
		<td>$ders_adi</td>
		<td>$sinif_id</td>
		<td>$konu_basligi</td>
		<td>$konu_alt_basligi</td>
		<td>$konu_ornegi</td>
		<td>$konu_formulu</td>
		<td><input type='submit' value='Düzenle'></td>
		<td><a href='duzenle.php?konu_id=$id&ders_id=$ders_id&sinif_id=$sinif_id&konu_basligi=$konu_basligi&islem=Silme&id=$id'>Sil</a></td>
	</tr>
	</form>";
	}
echo "</table>";
include"index_alt.php";
?> 
