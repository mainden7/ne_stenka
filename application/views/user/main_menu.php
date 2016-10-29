<?php
	$cities = City::load_cities();
	$cities_count = count($cities);
	/*print '<pre>' . print_r($cities, TRUE) . '</pre>'; die();*/
?> 
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
	.modal img.fa-times{
		position: absolute;
		top: -25px;
		right: -25px;
		opacity: 1;
		font-size: 2em;
		cursor: pointer;
	}
	#chooseCity  i:before{
		color: #fed536;
	}
	#chooseCity ul li{
		position: relative;

	}
	#chooseCity ul li a{
		border-bottom: none;
		color: #58595b;
	}
	#chooseCity ul li i.fa-check{
		position: absolute;
		left: -20px;
		display: none;
	}
	#chooseCity ul li:hover{
		cursor: pointer;
		color: #0078ff;
	}
	#chooseCity ul li:hover i.fa-check{
		display: inline;
	}
	#chooseCity ul li:hover a{
		color: #0078ff;
	}
</style>
<?php 

if(isset($this->session->userdata['items'])){
	$items = $this->session->userdata['items'];	
	$items_count = 0;
	$price = 0;
	foreach ($items as $item_id => $item_count) {
		$items_count += $item_count;
		if(!empty($item_id) AND !empty($item_count)){
			$product = Product::load_products($item_id);
			$price = $product['price'] * $item_count;			
		}		
		
	}
}else{
	$items_count = 0;
	$price = 0;
}
?>
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
				<a href="#" class='user-city' data-toggle='modal' data-target='#chooseCity'>
					<?php
					if(isset($this->session->userdata['user_city'])){
						echo $this->session->userdata['user_city'];
					}else{
						echo 'Москва';
					}
					?>
				</a>
				<!-- Choose city modal -->
				<div class="modal fade" id="chooseCity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="">
								<button type="button" class="" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo base_url() ?>application/resources/user_resources/img/close-icon.png" alt="" class="fa-times"></span></button>
								<h2 class="text-center">Выберите свой город</h2>
							</div>
							<div class="modal-body">
								<div class="row large-12">
									<div class="column large-6 small-12">
										<ul class="text-normal">
											 <?php 
											 	$i = 0;
											 	foreach ($cities as $city) { ?>
											<li><i class="fa fa-check"></i><a href='#' class='city_choise'><?php echo $city['name'] ?></a></li>
											<?php
												$i++;
												if($i == 6){
													break;
												}
											 } ?>												
											
										</ul>
									</div>
									<div class="column large-6 small-12">
										<ul class="text-normal">
											<?php 
											 	$i = 0;
											 	$cities = array_reverse($cities);
											 	foreach ($cities as $city) { ?>
											<li><i class="fa fa-check"></i><a href='#' class='city_choise'><?php echo $city['name'] ?></a></li>
											<?php
												$i++;
												if($i == 6){
													break;
												}
											 } ?>	
										</ul>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!--Доставка и оплата-->
			<div class="header-info_regions hide-for-small-only header-info_regions_pay column medium-4 large-2">
				<a href="#" data-toggle='modal' data-target='#delivery'>Доставка и оплата</a>
				<div class="modal fade bs-example-modal-lg" id="delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							
							<div class="modal-body pb80">
								<div class="row large-12">
									<div class="column large-12">
										<button type="button" class="" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo base_url() ?>application/resources/user_resources/img/close-icon.png" alt="" class="fa-times"></span></button>
										<h3 class="uppercase">Доставка</h3>
									</div>
									<div class="column large-12">
										<p><span class='uppercase'>Бесплатно </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, temporibus!<a href="" class="btn-blue">Справка</a></p>
										</div>
										<div class="column large-6 small-12">
											<h3 class="uppercase">Как оплатить</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												<a href="" class="btn-blue uppercase border-bottom-transparent">Подробнее <i class="fa fa-long-arrow-right"></i></a>
											</div>	
											<div class="column large-6 small-12">
												<h3 class="uppercase">Какой минимальный заказ</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
													quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
													consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!--корзина-->
						<div class="header-info_cart column small-7 medium-5 large-3">
							<a href="/user/cart" class="header-info_cart_wrapper float-center">
								<div class="badge badge-gray">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="badge secondary">
										<?php echo $items_count; ?>
									</div>
								</div>
								<span class="innerWrap clear">
									<span class="hide-for-small-only">Ваш заказ на сумму</span>
									<span class="hide-for-medium">Сумма заказа</span><br>
									<b><?php echo $price; ?> руб.</b>
								</span>
							</a>
						</div>

						<!--позвонить нам спрятан на medium-->
						<div class="header-info_regions column hide-for-small-only text-right hide-for-medium-only large-2">
							<span>Бесплатный звонок <br class="hide-for-large">по РФ. 24/7</span>
							<a class="header-info_regions_phone" href="tel:<?php echo $data['contact_settings']['tel_1'] ?>" style='font-size: 17px !important'><?php echo $data['contact_settings']['tel_1']; ?></a>
						</div>
					</div>

				</div>

				<!--навигация-->
				<div class="row header-nav">
					<div class="column small-12 menu-centered clearfix">
						<ul class="menu">
							<li class='<?php echo (isset($data['active']) AND $data['active'] == 'blocks') ? 'active' : ''; ?>'><a href="/user/blocks">Блоки</a></li>
							<li class='<?php echo (isset($data['active']) AND $data['active'] == 'slabs') ? 'active' : ''; ?>'><a href="/user/slabs">Плиты перекрытия</a></li>
							<li class='<?php echo (isset($data['active']) AND $data['active'] == 'instruments') ? 'active' : ''; ?>'><a href="/user/instruments">Клей и инструменты</a></li>
							<li class='<?php echo (isset($data['active']) AND $data['active'] == 'faq') ? 'active' : ''; ?>'><a href="/user/faq">Справка</a></li>
							<li class='<?php echo (isset($data['active']) AND $data['active'] == 'about') ? 'active' : ''; ?>'><a href="/user/about">О компании</a></li>
							<li class='<?php echo (isset($data['active']) AND $data['active'] == 'contact') ? 'active' : ''; ?>'><a href="/user/contacts">Контакты</a></li>
						</ul>
					</div>
				</div>

			</div>