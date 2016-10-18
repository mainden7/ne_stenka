<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>

  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta property="og:image" content="path/to/image.jpg">

  <link rel="shortcut icon" href="<?php echo '/' ?>application/resources/user_resources/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo '/' ?>application/resources/user_resources/img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo '/' ?>application/resources/user_resources/img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo '/' ?>application/resources/user_resources/img/favicon/apple-touch-icon-114x114.png">

  <link rel="stylesheet" href="<?php echo '/' ?>application/resources/user_resources/libs/foundation/foundation.css">
  <link rel="stylesheet" href="<?php echo '/' ?>application/resources/user_resources/css/fonts.css">
  <link rel="stylesheet" href="<?php echo '/' ?>application/resources/user_resources/css/main.css">
  
</head>
<body>
	<style type="text/css">
.menu > li{
	box-sizing: none;	
}
.menu > li{
	border-bottom: 5px solid #231f20;
}
	.menu >li > a:hover{
		text-decoration: none;
	}
	.menu > li:hover{
		text-decoration: none !important;
		border-bottom: 5px solid #fed536;
	}
	.menu > li.active{

		border-bottom: 5px solid #fed536;
	}
	.menu > li.active a{
		background: transparent;
		text-decoration: none !important;
	}
</style>
<!--,блок с навигацией и корзиной-->
  <div class="row expanded small-12 medium-12 large-11 large-centered header">

    <div class="row header-info">

      <div class="header-info-wrappertop clear hide-for-large">
        <!--лого-->
        <div class="header-info_logo column small-12 medium-6 large-3">
          <a href="/"><img src="<?php echo '/' ?>application/resources/user_resources/img/logo.png" alt=""></a>

          <!--гамбургер-->
          <a href="#" id="hamburger" class="hide-for-medium">
            <span></span>
          </a>
        </div>
        <!--позвонить нам small medium-->
        <div class="header-info_regions column text-right small-12 medium-6">
          <span>Бесплатный звонок по РФ. 24/7</span>
          <a class="header-info_regions_phone" href="tel:"></a>
        </div>
      </div>

      <div class="header-info-wrapperbottom clear">
        <!--лого-->
        <div class="header-info_logo column hide-for-medium-only hide-for-small-only large-3">
          <a href="/"><img src="<?php echo '/' ?>application/resources/user_resources/img/logo.png" alt=""></a>
        </div>
        <!--выбор региона-->
        <div class="header-info_regions header-info_regionsSelect column  small-5 medium-3 large-2">
          <span>Регион доставки</span>
          <a href="#">Москва</a>
        </div>
        <!--Доставка и оплата-->
        <div class="header-info_regions hide-for-small-only header-info_regions_pay column medium-4 large-2">
          <a href="#">Доставка и оплата</a>
        </div>
        <!--корзина-->
        <div class="header-info_cart column small-7 medium-5 large-3">
          <a href="#" class="header-info_cart_wrapper float-center">
            <div class="badge badge-gray">
              <i class="fa fa-shopping-basket" aria-hidden="true"></i>
              <div class="badge secondary">3</div>
            </div>
            <span class="innerWrap clear">
          <span class="hide-for-small-only">Ваш заказ на сумму</span>
            <span class="hide-for-medium">Сумма заказа</span><br>
            <b>9 895 руб.</b>
            </span>
          </a>
        </div>

        <!--позвонить нам спрятан на medium-->
        <div class="header-info_regions column hide-for-small-only text-right hide-for-medium-only large-2">
          <span>Бесплатный звонок <br class="hide-for-large">по РФ. 24/7</span>
          <a class="header-info_regions_phone" href="tel:"></a>
        </div>
      </div>

    </div>

    <!--навигация-->
    <div class="row header-nav">
      <div class="column small-12 menu-centered clearfix">
        <ul class="menu">
          <li class=''><a href="/user/blocks">Блоки</a></li>
          <li class=''><a href="/user/slabs">Плиты перекрытия</a></li>
          <li class=''><a href="/user/instruments">Клей и инструменты</a></li>
          <li class=''><a href="/user/faq">Справка</a></li>
          <li class=''><a href="/user/about">О компании</a></li>
          <li class=''><a href="/user/contacts">Контакты</a></li>
        </ul>
      </div>
    </div>

  </div>
  <style type="text/css">
	.main-footer h3,
	.main-footer p,
	.main-footer ul li a{
		color: #fff;
	}
	ul{
		list-style: none;
	}
	ul li{
		text-transform: uppercase;
	}
	p.grey,
	p.grey > a{
		color: #989898;
	}
</style>
<section  style='background: #f3f5f8' class="pb130">
	<div class="row expanded large-12 frontSlide pt130" style='background: #f3f5f8'>
	<div class="large-10 row small-12">
		<div class="column large-12 text-center">
			<img src="<?php echo '/' ?>application/resources/user_resources/img/404.png">
			<h1 class="uppercase">Страница не найдена</h1>
			<p class="mb30">К сожалению такой страницы не существует. Вероятно она устарела и была удалена, либо никогда не существовала</p>
			<a role="button" aria-label="submit form" href="#" class="button btn-blueLine btn-inverted btn-transparent">В каталог<i class="fa fa-long-arrow-right"></i></a>
		</div>
	</div>
</div>
</section>
<div class='row expanded large-12 main-footer'>
	<div class="row expanded small-12 medium-12 large-12 large-centered pt80 pb80" style='background: #091c3a'> 
		<div class="row large-10">
			<div class="column small-12 medium-4">
				<h3 class="logo-white-header">
					NeStenka
				</h3>
				<p>
					Высококачественные блоки<br>из ячеистого бетона
				</p>
			</div>
			<div class="column small-12 medium-2">
				<ul>
					<li><a>Блоки</a></li>
					<li><a>Плиты перекрытия</a></li>
					<li><a>Клей и инструменты</a></li>
					<li><a>Справка</a></li>
				</ul>
			</div>
			<div class="column small-12 medium-2">
				<ul>
					<li><a>О компании</a></li>
					<li><a>Новости</a></li>
					<li><a>Контакты</a></li>
				</ul>
			</div>
			<div class="column small-12 medium-4 text-center">
				<p><span class="grey">Остались вопросы ?</span></p>
				<h3>8 800 998-32-33</h3>
				<p><small><a href="">Бесплатный звонок 24/7</a></small></p>
			</div>
		</div>
	</div>
	<div class="row expanded small-12 medium-12 large-12 large-centered pt20" style='background: #0b0e1d'> 
		<div class="row large-10">
			<div class="column small-12 medium-4">
				<p>&copy<?php echo date('Y'); ?> NeStenka</p>
			</div>
			<div class="column small-12 medium-4 text-right">
				<img src="<?php echo '/' ?>application/resources/user_resources/img/visaMaestroMC.png">
			</div>
			<div class="column small-12 medium-4 text-right">
				<p class='grey'>Разработка &#8212; <a href="http://jetmarketing.by" class="">JetMarketing</a></p>
			</div>
		</div>
	</div>
</div>


  
  <script src="<?php echo '/' ?>application/resources/user_resources/libs/modernizr/modernizr.js" charset="utf-8"></script>
  <script src="<?php echo '/' ?>application/resources/user_resources/libs/jquery/jquery-2.2.2.min.js" charset="utf-8"></script>
  <script src="<?php echo '/' ?>application/resources/user_resources/libs/foundation/foundation.min.js" charset="utf-8"></script>
  <!--  
  <script src="libs/animate-plugin/jquery.waypoints.min.js"></script>
  <script src="libs/animate-plugin/animate-css.js" charset="utf-8"></script>
  -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="<?php echo '/' ?>application/resources/user_resources/js/common.js" charset="utf-8"></script>

</body>
</html>