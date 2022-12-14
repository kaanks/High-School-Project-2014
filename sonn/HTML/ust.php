<?php
session_start();
error_reporting(0);
if($_SESSION["kullanici_adi"]) 
{
	}
else
{
	header("Location:anasayfa.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>Konu Ekleme Böülümü</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
    
    <!--[if lte IE 7]>        
        <script type='text/javascript' src='js/other/lte-ie7.js'></script>
    <![endif]-->    
    
    <script type='text/javascript' src='js/jquery/jquery-2.0.0.min.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-ui-1.10.3.custom.min.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='js/jquery/globalize.js'></script>
    
    <script type='text/javascript' src='js/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='js/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js'></script>
    <script type='text/javascript' src='js/charts/excanvas.min.js'></script>    
    <script type='text/javascript' src='js/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='js/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='js/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='js/charts/jquery.flot.resize.js'></script>    

    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>    
</head>
<body>    
    
    <div id="wrapper">
        
        <div id="header">
            
            <div class="wrap">
                
                <a href="index.php" class="logo"></a>
                
                <div class="buttons fl">
                    <div class="item">
                        <a href="#" class="btn btn-primary btn-small c_layout">
                            <span class="i-layout-8"></span>                            
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="btn btn-primary btn-small c_screen">
                            <span class="i-stretch"></span>                            
                        </a>
                    </div>                    
                </div>
                
                <div class="buttons">
                    <div class="item">
                        <a href="#" class="btn btn-primary btn-small">
                            <span class="i-cog"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="btn btn-primary btn-small">
                            <span class="i-chat"></span>
                        </a>
                        <div class="popup">
                            <div class="head">
                                <h2>Messages</h2>
                            </div>
                            <div class="content npb messages minify" id="messages"></div>
                            <div class="footer">
                                <div class="side fl">
                                    <button class="btn btn-link">Show all</button>
                                </div>
                                <div class="side fr">
                                    <button class="btn btn-primary popup-close">Close</button>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="item">                        
                        <div class="btn-group">                        
                            <a href="logout.php" class="btn btn-primary btn-small dropdown-toggle" data-toggle="dropdown">
                                <span class="i-forward"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="i-profile"></span> Profile</a></li>
                                <li><a href="#"><span class="i-tools"></span> Controls</a></li>                                
                                <li><a href="#"><span class="i-locked"></span> Lock</a></li>
                                <li><a href="cikis.php"><span class="i-forward"></span> Logout</a></li>
                            </ul> 
                        </div>
                    </div>                
                </div>
                
            </div>
            
        </div>
        
        <div id="layout">
        
            <div id="sidebar">

              <div class="user"></div>

                <ul class="navigation">
                    <li class="active">
                        <a href="index.php">Ana Sayfa</a>
                    </li>
                    <li>
                        <a href="ekle.php">Ekleme Bölümü</a>
                    </li>
                </ul>

            </div>

            <div id="content">                        
                <div class="wrap">
                  <div class="content">
                    <div class="row-fluid">                      
                        
                        <div class="row-fluid">
                            
                            <div class="span12">