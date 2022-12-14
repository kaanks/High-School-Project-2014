<?php
extract($_POST);
extract($_GET);
$sunucu="localhost";
$kul_adi="root";
$sifre="";
$database="site";
$sunucu_baglanti=mysql_connect($sunucu,$kul_adi,$sifre);
$database_baglanti=mysql_select_db($database);

?>