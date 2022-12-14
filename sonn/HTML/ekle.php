     <?php
include "ust.php";
 include "ayarlar.php";	
                            // VERÝ TABANINA VERÝ EKLEME BÖLÜMÜ
                                if ($islem=='ekle')
                                {
                                 if($ders_id=='0' or $sinif_id=='0' or $konu_basligi=='')
                                 {echo "<font color='red'><b>Lütfen Boþluk Býrakmayýnýz</b></font>";} 
                                 if($ders_id<>'0' and $sinif_id<>'0' and $konu_basligi<>'') {
                                 $sorgu="insert into ders_adlari (ders_id,sinif_id,konu_basligi) values ('$ders_id','$sinif_id','$konu_basligi')";
                                 //echo"$sorgu";
                                 $sonuc=mysql_query($sorgu);
                                 if ($sonuc)
                                 {		 
                                 echo "<font color='green'><b>Veri Eklendi</b></font>";
                                 }
                                 if (!$sonuc)
                                 {
                                     echo "<font color='red'><b>VERÝ EKLENEMEDÝ</b></font>";
                                 }
                                 }
                                }
                            //-----------------------------------------------------------------------------------------------
                                if ($islem=='Silme')
                                {
                                 $sorgu="delete from ders_adlari where id=$id";
                                 $sonuc=mysql_query($sorgu);
                                } 
                                if ($islem=='Düzenle')
                                {
                                 $sorgu="update ders_adlari set ders_id='$duzenle_ders_id',sinif_id='$duzenle_sinif_id',konu_basligi='$duzenle_konu_basligi' where id=$id";
                                //echo"$sorgu";
                                 $sonuc=mysql_query($sorgu);
                                }
                            // ------PROGRAMIN GÖRSEL KISMI ------------
                            // Veri Ekleme Ekraný
                            echo "<form method='post' action='ekle.php?islem=ekle'>
                                <table border='1'>
                                <tr>
                                    <td colspan='2' align='center'>Ekleme</td>
                                </tr>
                                <tr>
                                    <td>Ders Adý</td>
                                    <td>		
                                    <select name='ders_id'>
                                          <option value='0' selected>Lütfen Ders Seçiniz</option>
                                          <option value='1'";if($ders_id==1){echo" selected";} echo">Türkçe</option>
                                          <option value='2'";if($ders_id==2){echo" selected";} echo">Matematik</option>
                                          <option value='3'";if($ders_id==3){echo" selected";} echo">Fen Bilimleri</option>
                                          <option value='4'";if($ders_id==4){echo" selected";} echo">Sosyal Bilgiler</option>
                                          <option value='5'";if($ders_id==5){echo" selected";} echo">Yabancý Dil</option>
                                          <option value='6'";if($ders_id==6){echo" selected";} echo">Din Kültürü ve Ahlak Bilgisi</option>
                                          <option value='7'";if($ders_id==7){echo" selected";} echo">T.C. Ýnkýlâp Tarihi ve Atatürkçülük</option>
                                          <option value='8'";if($ders_id==8){echo" selected";} echo">Dil ve Anlatým</option>
                                          <option value='9'";if($ders_id==9){echo" selected";} echo">Türk Edebiyatý</option>
                                          <option value='10'";if($ders_id==10){echo" selected";} echo">Tarih</option>
                                          <option value='11'";if($ders_id==11){echo" selected";} echo">Coðrafya</option>
                                          <option value='12'";if($ders_id==12){echo" selected";} echo">Geometri</option>
                                          <option value='13'";if($ders_id==13){echo" selected";} echo">Fizik</option>
                                          <option value='14'";if($ders_id==14){echo" selected";} echo">Kimya</option>
                                          <option value='15'";if($ders_id==15){echo" selected";} echo">Biyoloji</option>
                                          <option value='16'";if($ders_id==16){echo" selected";} echo">Saðlýk Bilgisi</option>
                                          <option value='17'";if($ders_id==17){echo" selected";} echo">Felsefe</option>
                                     </select></td>
                                </tr>
                                <tr>
                                    <td>Sýnýfý</td>
                                    <td>
                                    <select name='sinif_id'>
                                          <option value='0' selected>Lütfen Sýnýf Seçiniz</option>
                                          <option value='5'";if($sinif_id==5){echo" selected";} echo">5</option>
                                          <option value='6'";if($sinif_id==6){echo" selected";} echo">6</option>
                                          <option value='7'";if($sinif_id==7){echo" selected";} echo">7</option>
                                          <option value='8'";if($sinif_id==8){echo" selected";} echo">8</option>
                                          <option value='9'";if($sinif_id==9){echo" selected";} echo">9</option>
                                          <option value='10'";if($sinif_id==10){echo" selected";} echo">10</option>
                                          <option value='11'";if($sinif_id==11){echo" selected";} echo">11</option>
                                          <option value='12'";if($sinif_id==12){echo" selected";} echo">12</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Konu Baþlýðý</td>
                                    <td><input type='text' name='konu_basligi' ></td>
                                </tr>
                                    
                                <tr>
                                    <td colspan='2' align='center'><input type='submit' value='Ekle'></td>
                                </tr>
                                </table>
                            </form>";
                            // Veri Listeleme Ekraný
                            echo "<table>
                            <tr>
                                <td>Ders Adý</td>
                                <td>Sýnýfý</td>
                                <td>Konu Baþlýðý</td>
                                <td>Düzenle</td>
                                <td>Sil</td>
                            </tr>";
                            $sorgu="select * from ders_adlari order by id desc";
                            $sonuc=mysql_query($sorgu);
                            while ($row=mysql_fetch_array($sonuc))
                            {
                                extract($row);
                                echo"<tr>
                                <form method='post' action='ekle.php?islem=Düzenle&id=$id'>
                                    <td><select name='duzenle_ders_id'>
                                          <option value='1'";if($ders_id==1){echo"selected";} echo">Türkçe</option>
                                          <option value='2'";if($ders_id==2){echo"selected";} echo">Matematik</option>
                                          <option value='3'";if($ders_id==3){echo"selected";} echo">Fen Bilimleri</option>
                                          <option value='4'";if($ders_id==4){echo"selected";} echo">Sosyal Bilgiler</option>
                                          <option value='5'";if($ders_id==5){echo"selected";} echo">Yabancý Dil</option>
                                          <option value='6'";if($ders_id==6){echo"selected";} echo">Din Kültürü ve Ahlak Bilgisi</option>
                                          <option value='7'";if($ders_id==7){echo"selected";} echo">T.C. Ýnkýlâp Tarihi ve Atatürkçülük</option>
                                          <option value='8'";if($ders_id==8){echo"selected";} echo">Dil ve Anlatým</option>
                                          <option value='9'";if($ders_id==9){echo"selected";} echo">Türk Edebiyatý</option>
                                          <option value='10'";if($ders_id==10){echo"selected";} echo">Tarih</option>
                                          <option value='11'";if($ders_id==11){echo"selected";} echo">Coðrafya</option>
                                          <option value='12'";if($ders_id==12){echo"selected";} echo">Geometri</option>
                                          <option value='13'";if($ders_id==13){echo"selected";} echo">Fizik</option>
                                          <option value='14'";if($ders_id==14){echo"selected";} echo">Kimya</option>
                                          <option value='15'";if($ders_id==15){echo"selected";} echo">Biyoloji</option>
                                          <option value='16'";if($ders_id==16){echo"selected";} echo">Saðlýk Bilgisi</option>
                                          <option value='17'";if($ders_id==17){echo"selected";} echo">Felsefe</option>
                                     </select></td>
                                    <td>
                                    <select name='duzenle_sinif_id'>
                                          <option value='5'";if($sinif_id==5){echo"selected";} echo">5</option>
                                          <option value='6'";if($sinif_id==6){echo"selected";} echo">6</option>
                                          <option value='7'";if($sinif_id==7){echo"selected";} echo">7</option>
                                          <option value='8'";if($sinif_id==8){echo"selected";} echo">8</option>
                                          <option value='9'";if($sinif_id==9){echo"selected";} echo">9</option>
                                          <option value='10'";if($sinif_id==10){echo"selected";} echo">10</option>
                                          <option value='11'";if($sinif_id==11){echo"selected";} echo">11</option>
                                          <option value='12'";if($sinif_id==12){echo"selected";} echo">12</option>
                                    </select>
                                    </td>
                                    <td><input type='text' name='duzenle_konu_basligi' value='$konu_basligi'></td>
                                    <td><input type='submit' value='Düzenle'></td>
                                    <td><a href='ekle.php?islem=Silme&id=$id'>Sil</a></td>
                                    <td><a href='alt.php?konu_id=$id&ders_id=$ders_id&sinif_id=$sinif_id&konu_basligi=$konu_basligi'>Alt Baþlýðý Ekleme</a></td>
                                </tr></form>";
                            }
                            echo "</table>";
                            include "index_alt.php";
                            ?>