<style type="text/css">
.menu > li{
	box-sizing: none;	
}
.menu > li{
	border-bottom: 5px solid #000;
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
          <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/application/resources/user_resources/img/logo.png" alt=""></a>

          <!--гамбургер-->
          <a href="#" id="hamburger" class="hide-for-medium">
            <span></span>
          </a>
        </div>
        <!--позвонить нам small medium-->
        <div class="header-info_regions column text-right small-12 medium-6">
          <span>Бесплатный звонок по РФ. 24/7</span>
          <a class="header-info_regions_phone" href="tel:<?php echo $data['contact_settings']['tel_1'] ?>"><?php echo $data['contact_settings']['tel_1']; ?></a>
        </div>
      </div>

      <div class="header-info-wrapperbottom clear">
        <!--лого-->
        <div class="header-info_logo column hide-for-medium-only hide-for-small-only large-3">
          <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/application/resources/user_resources/img/logo.png" alt=""></a>
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
          <a class="header-info_regions_phone" href="tel:<?php echo $data['contact_settings']['tel_1'] ?>"><?php echo $data['contact_settings']['tel_1']; ?></a>
        </div>
      </div>

    </div>

    <!--навигация-->
    <div class="row header-nav">
      <div class="column small-12 menu-centered clearfix">
        <ul class="menu">
          <li class='<?php echo $data['active'] == 1 ? 'active' : ''; ?>'><a href="/user/blocks">Блоки</a></li>
          <li><a href="#">Плиты перекрытия</a></li>
          <li><a href="#">Клей и инструменты</a></li>
          <li><a href="#">Справка</a></li>
          <li><a href="#">О компании</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
      </div>
    </div>

  </div>