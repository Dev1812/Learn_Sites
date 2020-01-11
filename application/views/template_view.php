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

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

  <?php
    if(isset($param['css'])) {
      if(!is_array($param['css'])) {
        $css = array($param['css']);
      } else {
        $css = $param['css'];
      }
      array_push($css, 'common.css');
      foreach($css as $k=>$v) {
        echo '<link rel="stylesheet" type="text/css" data-css-id="'.$k.'" href="/css/'.$v.'?'.time().'">';
      }
    }
  ?>

  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>


</head>
<body>

<div id="wrap1">

  <div class="head">
    <div class="head__wrap">
      <div class="head__left fl_l">
        <a class="head_link" href="/">AirOrder</a>
      </div>
      <div class="head__right fl_r">
        <?php echo $head_right;?>
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
      <a href="" class="footer__link">О сайте</a>
      <a href="" class="footer__link">Правила</a>
    </div>
  </div>
</div>

<div class="clear"></div>


</div><!--wrap1-->

  <?php
    if(isset($param['js'])) {
      if(!is_array($param['js'])) {
        $js = array($param['js']);
      } else {
        $js = $param['js'];
      }
      //array_push($js, 'common.js');
      foreach($js as $k=>$v) {
        echo '<script type="text/javascript" data-js-id="'.$k.'" src="/js/'.$v.'?'.time().'"></script>';
      }
    }
  ?>
</body>
</html>