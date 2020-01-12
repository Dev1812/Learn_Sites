<?php
  $page_title = (isset($param['page_title']) && !empty($param['page_title'])) ? $param['page_title'] : '...';
  $page_description = (isset($param['page_description']) && !empty($param['page_description'])) ? $param['page_description'] : '...';
  $page_keywords = (isset($param['page_keywords']) && !empty($param['page_keywords'])) ? $param['page_keywords'] : '...';
?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo $page_title; ?></title>
  <link rel="shortcut icon" href="/images/icons/ScreenBrush.ico?<?php echo time();?>" type="image/x-icon">

  <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
  <meta name="title" content="<?php echo $page_title; ?>">
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="<?php echo $page_keywords; ?>">

  <meta name="robots" content="noimageindex, noarchive">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#000000">
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Pragma" content="no-cache">

<!--  <meta property="og:site_name" content="Instagram">-->
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:image" content="/images/icons/favicon.ico?2">
  <!--<meta property="og:url" content="orig url">-->
  <meta property="og:description" content="<?php echo $page_description; ?>">

  <link href="css/common.css?<?php echo time(); ?>" rel="stylesheet">

</head>
<body>

<div id="wrap1">


<div class="head">
  <div class="head__wrap">
    <div class="head__left fl_l">
      <a class="head__link head__title" href="/">Learn Wordpress</a>
    </div>
    <div class="head__right fl_r">
      <a class="head__link head__buttom">Войти</a>
      <a class="head__link sign_up head__buttom head__buttom_transparent">Регистрация</a>
    </div>
  </div>
</div>

<div class="wrap2">
  
<div class="content">
  <?php
    if(isset($content_view) && !empty($content_view)) {
      require_once SITE_ROOT.'application/views/'.$content_view;
    } else {
      echo '...';
    }
  ?>

</div>

  <div class="footer">
    <div class="footer__wrap">
      <div class="about">Сайт выполнен для конкурса "Цифровой ветер" программистом Исаевым Тимуром</div>
      <div class="footer__logo_wrap">
        <img src="images/icons/ru_logo_20.png" width="140px">
      </div>
    </div>
  </div>
</div>

<div class="clear"></div>


</div><!--wrap1-->
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>