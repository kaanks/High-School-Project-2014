<?php
session_start();
unset($_SESSION["kullanici_id"]);
unset($_SESSION["kullanici_adi"]);
header("Location:anasayfa.php");
?>