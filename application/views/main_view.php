<div id="main_page">

<div class="container">
  <div class="container__background_image"></div>
  <div class="container__gray_cover"></div>
  <div class="container__body">
  	<div class="container__body_wrap">
  	  <div class="container__body_title">Обучающее приложение по созданию сайтов на WordPress</div>
  	  <div class="container__body_text">Здесь Вы сможете научиться создавать красивые и динамичные сайты на WordPress</div>
  	  <div class="container__body_start_button_wrap" onClick="window.scrollTo(0,500)"><button class="container__body_start_button">Приступить</button></div>
  	</div>
  </div>
</div>


<div class="container" style="min-height:auto;">
  <div class="container__wrap">
    <div class="wall" id="wall">
<?php
    foreach($data['wall_items'] as $v) {
  
?>
      <div class="wall__block">
        <div class="wall__block_title"><a href="/"><?php echo $v['title']; ?></a></div>
        <div class="wall__block_body"><?php echo $v['text']; ?></div>
      </div>

<?php
}
?>
    </div>
  </div>  
</div>

</div>
<link rel="stylesheet" type="text/css" href="css/main_page.css?<?php echo rand(); ?>">

