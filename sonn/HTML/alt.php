<?php
include "ust.php";
						include "ayarlar.php";
						// VERÝ TABANINA VERÝ EKLEME BÖLÜMÜ
						echo "<a href='index.php'><font size='red'>Konu Eklemek Ýçin Týklayýnýz</font></a>";
							if ($islem=='ekle')
							{
							 if($konu_formulu=='' or $konu_ornegi=='0' or $konu_alt_basligi=='0' ) 
							 {
								 echo "<font color='red'><b>Lütfen Boþluk Býrakmayýnýz</b></font>";
							 } 
							 if($konu_formulu<>'' and $konu_ornegi<>'0' and $konu_alt_basligi<>'0' )
							 {
								 $sorgu="insert into alt_konu (konu_formulu,konu_ornegi,sinif_id,ders_id,konu_basligi,konu_alt_basligi) values ('$konu_formulu','$konu_ornegi','$sinif_id','$ders_id','$konu_basligi','$yeni_konu_alt_basligi')";
								 //echo"$sorgu";
								 $sonuc=mysql_query($sorgu);
								 if ($sonuc)
								 {
								 echo "<font color='green'><b>Veri Eklendi</b></font>";
								 }
								 else
								 {
									 echo "<font color='red'><b>VERÝ EKLENEMEDÝ</b></font>";
								 }
							 }
							}
							if ($islem=='Silme')
							{
							 $sorgu="delete from alt_konu where id=$id";
							 $sonuc=mysql_query($sorgu);
							} 
						// ------PROGRAMIN GÖRSEL KISMI ------------
						// Veri Ekleme Ekraný
						echo "<form method='post' action='alt.php'>
							<table border='1'>
							<tr>
								<td colspan='2' align='center'>Ekleme</td>
							</tr>
							<tr>
								<td>Ders</td>
								<td> ";if($ders_id==1){echo"Türkçe";} echo"
									 ";if($ders_id==2){echo"Matematik";} echo"
									 ";if($ders_id==3){echo"Fen Bilimleri";} echo"
									 ";if($ders_id==4){echo"Sosyal Bilgiler";} echo"
									 ";if($ders_id==5){echo"Yabancý Dil";} echo"
									 ";if($ders_id==6){echo"Din Kültürü ve Ahlak Bilgisi";} echo"
									 ";if($ders_id==7){echo"T.C. Ýnkýlâp Tarihi ve Atatürkçülük";} echo"
									 ";if($ders_id==8){echo"Dil ve Anlatým";} echo"
									 ";if($ders_id==9){echo"Türk Edebiyatý";} echo"
									 ";if($ders_id==10){echo"Tarih";} echo"
									 ";if($ders_id==11){echo"Coðrafya";} echo"
									 ";if($ders_id==12){echo"Geometri";} echo"
									 ";if($ders_id==13){echo"Fizik";} echo"
									 ";if($ders_id==14){echo"Kimya";} echo"
									 ";if($ders_id==15){echo"Biyoloji";} echo"
									 ";if($ders_id==16){echo"Saðlýk Bilgisi";} echo"
									 ";if($ders_id==17){echo"Felsefe";} echo"
							</td>
							</tr>
							<tr>
								<td>Sýnýfý</td>
								<td>
									  ";if($sinif_id==5){echo"5";} echo"
									  ";if($sinif_id==6){echo"6";} echo"
									  ";if($sinif_id==7){echo"7";} echo"
									  ";if($sinif_id==8){echo"8";} echo"
									  ";if($sinif_id==9){echo"9";} echo"
									  ";if($sinif_id==10){echo"10";} echo"
									  ";if($sinif_id==11){echo"11";} echo"
									  ";if($sinif_id==12){echo"12";} echo"
								</td>
							</tr>
							<tr>
								<td>Konu Baþlýðý</td>
								<td>$konu_basligi</td>
							</tr>
							<tr>
							<tr>
								<td>Konu Alt Baþlýðý</td>
								<td><input type='text' name='yeni_konu_alt_basligi' ></td>
							</tr>
								<td>Konu Örneði</td>
								<td><textarea name='konu_ornegi' cols='25' rows='5'></textarea></td>
							</tr>
								<tr>
								<td>Konu Formülü</td>
								<td><textarea name='konu_formulu' cols='25' rows='5'></textarea></td>
							</tr>	
							<tr>
								<td colspan='2' align='center'><input type='submit' value='Ekle'></td>
							</tr>
							</table>
							<input type='hidden' name='konu_alt_basligi' value='$konu_alt_basligi'>
							<input type='hidden' name='islem' value='ekle'>
							<input type='hidden' name='ders_id' value='$ders_id'>
							<input type='hidden' name='sinif_id' value='$sinif_id'>
							<input type='hidden' name='konu_basligi' value='$konu_basligi'>
						</form>";
						// Veri Listeleme Ekraný
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
								<td>$ders_id</td>
								<td>$sinif_id</td>
								<td>$konu_basligi</td>
								<td>$konu_alt_basligi</td>
								<td>$konu_ornegi</td>
								<td>$konu_formulu</td>
								<td><input type='submit' value='Düzenle'></td>
								<td><a href='alt.php?konu_id=$id&ders_id=$ders_id&sinif_id=$sinif_id&konu_basligi=$konu_basligi&islem=Silme&id=$id'>Sil</a></td>
							</tr>
								<input type='hidden' name='sinif_id' value='$sinif_id'>
								<input type='hidden' name='ders_id' value='$ders_id'>
								<input type='hidden' name='konu_basligi' value='$konu_basligi'>
								<input type='hidden' name='konu_alt_basligi' value='$konu_alt_basligi'>
								<input type='hidden' name='konu_ornegi' value='$konu_ornegi'>
								<input type='hidden' name='konu_formulu' value='$konu_formulu'>
							</form>";
						}
						echo "</table>";
						include "index_alt.php";
						?>
                      