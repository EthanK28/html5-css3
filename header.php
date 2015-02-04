<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Senop - shopping mall</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/stickysidebar.jquery.js"></script>
<script type="text/javascript" src="scripts/tabs.js"></script> 
<script type="text/javascript" src="scripts/carousel.js"></script>
<!--[if lt IE 9]> 
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js" type="text/javascript"></script> 
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>    
<![endif]-->
<script>
 $(function () {
    $("#sticky").stickySidebar({
       timer: 100 , easing: "easeInBounce"
    });
 }); 	  
	  
 </script>


</head>
<body>

<div id="outer_wrap">
<div id="wrap">
<header>
	<div id="logo"><a href="index.php"><img src="imgs/senop_logo.png" alt="Senop" width="176" height="67"></a> </div>
    <div id="head_link">
    	<ul>
        	<li><a href="#">로그인</a></li>
            <li><a href="#">회원가입</a></li>
            <li><a href="#">장바구니</a></li>
            <li><a href="#">고객센터</a></li>
            <li class="no_line"><a href="#">주문배송</a></li>
        </ul>
    </div>
	<br>
    <div id="search">
    	<form>
           <input name="input" type="text" class="main_input"> <input name="search" type="button" value="검 색" class="btn1">
        </form>
    </div>
</header>

<div class="clear"></div>
