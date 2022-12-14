<?php include"ayarlar.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zine Green - CSS Templates</title>
<meta name="keywords" content="Zine Green, CSS Templates, CSS, HTML" />
<meta name="description" content="Zine Green - free website template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_wrapper">
    <div id="templatemo_header">
        <div id="site_title">
            <a href="#"><img src="images/templatmeo_logo.png" alt="css templates" /></a>
      </div>
        
        <div id="templatemo_menu">
    
            <ul>
                <li><a href="index.php" target="_parent" class="_parent">Anasayfa</a></li>
                <li><a href="arama.php" target="_parent">Arama</a></li>
                <li><a href="icerik.php" target="_parent">Tüm Konular</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
            </ul>  
        
        </div> <!-- end of templatemo_menu -->
    
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div id="templatemo_banner">
    
    	<div id="about">
        	<p>Tüm derslerin konuları , örnekleri ve formülleri sitemizde, 5.sınıftan 12.sınıfa kadar olan tüm dersler bulunmaktadır.</p>
        </div>
        
        <div id="banner">
        
        	<h1> TÜM  DERSLERİN  KONULARI,</h1>
        	<h1> ÖRNEKLERİ VE FORMÜLLERİ...</h1>
            <p>&nbsp;</p>
        </div>
    
    </div> <!-- end of templatemo_banner -->
    
    <div id="templatemo_content_wrapper">
<table width="100%" border="0">
  <tr>
    <td width="21%"><div class="templatemo_sidebar">
        
  <div class="sidebar_box">
    
    <h2>Arama</h2>
    
    <form action="#" method="get">
      <input type="text" value="Arama Bölümü..." name="q" size="10" class="inputfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
      <input type="submit" name="Search" value="ARA" alt="Search" class="submitbutton buton" title="Search" />
      </form>
    
    <div class="cleaner"></div>
    </div>
        
        <div class="sidebar_box"> 
          
          <h2>SINIFLAR</h2>
          <ul class="side_menu">
            <li><a href="icerik.php?sinif_id=5">5.SINIF</a></li>
            <li><a href="icerik.php?sinif_id=6">6.SINIF</a></li>
            <li><a href="icerik.php?sinif_id=7">7.SINIF</a></li>
            <li><a href="icerik.php?sinif_id=8">8.SINIF</a></li>
            <li><a href="icerik.php?sinif_id=9">9.SINIF</a></li>
            <li><a href="icerik.php?sinif_id=10">10.SINIF</a></li>
            <li><a href="icerik.php?sinif_id=11">11.SINIF</a></li>
            <li><a href="icerik.php?sinif_id=12">12.SINIF</a></li>
            <li></li>
            <li></li>                    
          </ul>
        </div>  
        
        <div class="sidebar_box"> 
          
          <h2>DERSLER</h2>
          <ul class="side_menu">
          <?php
		  $sorgu="SELECT adlari.ders_adi, adlari.id FROM adlari ";
		  $sonuc=mysql_query($sorgu);
		  while($row=mysql_fetch_array($sonuc))
		  { extract($row);
		  ?>
            <li><?php echo"<a href='icerik.php?ders_id=$id'>$ders_adi</a>";?></li>
            <?php } ?>
          </ul>
        </div>  
        
      </div></td>
    <td width="79%" valign="TOP">
    <div id="templatemo_content">
        
            <div class="post_section">
          
                <h2>&nbsp;</h2>
                <p>&nbsp;</p>
            </div>
    </div>
    </td>
  </tr>
</table>

       <!-- end of sidebar 1 --><!-- end of templatemo_sidebar 2 -->
        
      
        
        <div class="cleaner"></div>
    
  </div> <!-- end of templatemo_content_wrapper -->
        
</div> <!-- end of templatemo_wrapper --> 

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    
    	<div class="section_w180px">
        	<h3>Services</h3>
        	<ul class="footer_menu_list">
            	<li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Cum sociis</a></li>
                <li><a href="#">Donec quam</a></li>
                <li><a href="#">Nulla consequat</a></li>
                <li><a href="#">In enim justo</a></li>               
            </ul>
        </div>
        
        <div class="section_w180px">
	        <h3>About</h3>
        	<ul class="footer_menu_list">
                <li><a href="#">Nullam quis</a></li>
                <li><a href="#">Sed consequat</a></li>
                <li><a href="#">Cras dapibus</a></li> 
            	<li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Cum sociis</a></li>              
            </ul>
        </div>
        
        <div class="section_w180px">
			<h3>Friends</h3>        
        	<ul class="footer_menu_list">
            	<li><a href="#">Aenean vulputate</a></li>
                <li><a href="#">Etiam ultricies</a></li>
                <li><a href="#">Nullam quis</a></li>
                <li><a href="#">Sed consequat</a></li>
                <li><a href="#">Cras dapibus</a></li>                
            </ul>
        </div>
        
        <div class="section_w180px">
			<h3>Conatct Us</h3>        
        	<ul class="footer_menu_list">
                <li><a href="#">Donec quam</a></li>
                <li><a href="#">Nulla consequat</a></li>
                <li><a href="#">In enim justo</a></li>    
            	<li><a href="#">Aenean vulputate</a></li>
                <li><a href="#">Etiam ultricies</a></li>               
            </ul>
        </div>
        
        <div class="section_w180px">
			<h3>XHTML/CSS Validators</h3>        
        		<a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
                <div class="margin_bottom_10"></div>
    			<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
        </div>
        
    	<div class="margin_bottom_20"></div>
        <div class="margin_bottom_20"></div>
        
        Copyright © 2014 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></div> <!-- end of footer -->
</div> <!-- end of footer wrapper -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
