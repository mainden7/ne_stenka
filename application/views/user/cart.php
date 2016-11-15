<?php

//print '<pre>' . print_r($data, true) . '</pre>'; die();
?>
<style type="text/css">
	#cart .cart_sub_header{
		font-size: 16px;
		font-family: 'Open Sans', sans-serif;
	}
	#cart .cart_sub_header img.dots{
		opacity: 0.3;
		margin: 0 10px;
	}
	#cart .cart_sub_header span.text-light{
		color: #dedede;
	}
	table{
		width: 100%;
	}
	table > thead > tr > th,
	table > thead > tr > td,
	table > tbody > tr > td{
		border-right: 2px solid #efefef;
		border-bottom: 2px solid #efefef;
	}
	table > thead > tr > th{
		border-bottom: none;
	}
	table > thead > tr > td.br-none,
	table > tbody > tr > td.br-none{
		border-right: none;
	}
	table > tbody > tr:hover{
		background: #f3f5f8;
	}
	table > tbody > tr:hover i.fa-shopping-basket{
		color: #0078ff;
	}
	#myform {
		text-align: center;
		padding: 5px;
		margin: 2%;
		width: 200px;
	}
	.qty {
		width: 40px;
		height: 25px;
		text-align: center;
		display: inline;
		width: 50px;
		height: 50px;
	}
	input.qtyplus,
	input.qtyminus{
		background: transparent;
		border: none;
		width: 50px;
		height: 50px;
	}
	.table-info-2{
		display: none;
	}
	.table-row{
		padding-left: 50px;
		padding-right: 50px;
	}
	#cart a.question-btn{
		padding: 20px 75px;
	}
	#cart .border-bottom{
		border-bottom: 2px solid #dedede;
	}
	.big-btn{
		padding: 25px 90px;
	}
	h3.empty_title{
		font-size: 24px;
		font-weight: 800;
	}
	h3.text-18{
		font-size: 18px;
	}
	.opacity-07{
		opacity: 0.7;
		line-height: 40px;
	}
	.recomended{
		opacity: 0.5;
	}
	.recomended i{
		color: blue;
	}
	.recomended i:hover{
		cursor: pointer;
	}
</style>
<section id='cart' style="background: #f2f5f8">
	<div class="row expanded large-12 frontSlide" style="background: #f2f5f8">
		<div class="column large-12">
			<div class="large-10 row pt130 mb30">
				<div class="column large-5 small-12 pl0">
					<h2 class='uppercase mt0'>Корзина</h2>
				</div>
				<div class="column large-7">
					<h3 class="cart_sub_header text-right"><img src="<?php echo base_url() ?>application/resources/user_resources/img/1_white.png"> Оформление заказа <img class="dots" src="<?php echo base_url() ?>application/resources/user_resources/img/dots.png"> <img src="<?php echo base_url() ?>application/resources/user_resources/img/2_grey.png"> <span class='text-light'>Контактная информация</span></h3>
				</div>
			</div>
			<div class="row large-10 bg_white table-row pb50 pt50 mb50 step_1">
				<?php
				$all_cat = array();
				foreach ($data['categories'] as $category) {
					foreach ($data['products'] as $product) {
						if($product['category'] == $category['name']){
							$all_cat[$category['name']][] = $product;
						}
					}
				}
				?>

				<?php
				$total_product_price = 0;
				if(!isset($data['empty_cart_title'])){
					foreach ($all_cat as $category_name => $products) { ?>
						<table class="responsive mb50">
							<thead class="table-header">
							<tr class='row-1'>
								<th><h3 class="text-left uppercase"><?php echo $category_name ?></h3></th>
								<th>Размер</th>
								<th>Кол-во</th>
								<th colspan="2" class="text-center">Кол-во</th>
								<th colspan="2" class="text-center">Кол-во</th>
								<th class="text-center">Кол-во поддонов</th>
								<th class="text-center">Сумма</th>

								<th class='br-none' style='border-right: none;'></th>
							</tr>
							<tr class="row-2 text-light opacity-07">
								<td></td>
								<td class="text-center">выс. шир. дл.</td>
								<td class="text-center">шт. в 1м3</td>
								<td colspan="2" class='text-center '>шт</td>
								<td colspan="2" class='text-center '>шт</td>
								<td></td>
								<td class="text-center">руб.</td>

								<td class='br-none'></td>
							</tr>
							</thead>
							<tbody>
							<?php

							foreach($products AS $product) {
								if(isset($this->session->userdata['user_city'])){
									$user_city = $this->session->userdata['user_city'];
								}else{
									$user_city = 'Москва';
								}
								$price =  Product::load_product_prices($product['id'], $user_city);
								$product['price'] = $price['price'];
								$total_product_price += $product['price'] * $product['quantity'];
								?>
								<tr>
									<td class="pl10"><?php echo $product['name'] ?></td>
									<td class="text-center"><?php echo $product['size'] ?></td>
									<td></td>
									<td class="text-center br-none">60</td>
									<td class="text-center">20</td>
									<td class="text-center br-none">16</td>
									<td class="text-center">15</td>
									<td class='text-center'>
										<form id='myform' class='display-inline-block' method='POST' action='#'>
											<input type='button' value='-' class='qt qtyminus' field='quantity<?php echo $product['id'] ?>' style='font-size: 20px'/>
											<input type='text' name='quantity<?php echo $product['id'] ?>' value='<?php echo $product['quantity'] ?>' class='qty' />
											<input type='button' value='+' class='qt qtyplus' field='quantity<?php echo $product['id'] ?>' style='font-size: 20px'/>
											<input type='hidden' class='serialize' name='<?php echo $product['id'] ?>' value='<?php echo $product['quantity']; ?>'>
										</form>
									</td>
									<td class="text-center product_total_price"  data-quantity="<?php echo  $product['quantity'] ?>" data-price="<?php echo $product['price'] ?>"><?php echo $product['price'] * $product['quantity'] ?></td>

									<td class='br-none text-center pl20'><a href='/user/delete_from_cart/<?php echo $product['id'] ?>'><i class='fa fa-times'></i></a></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<h3 class="text-right">Подитог <span id="pre-price"><?php echo $total_product_price ?></span> руб.</h3>
						<?php
					}
				}else { ?>
					<h3 class='empty_title'>Ваша корзина пуста</h3>
					<a role="button" aria-label="submit form" href="/user/product" class="button btn-blueLine btn-inverted add-to-cart">Выбрать блоки <i class="fa fa-long-arrow-right"></i></a>
				<?php	}
				?>

			</div>
			<?php if(!isset($data['empty_cart_title'])){ ?>
				<div class="row large-10">
					<div class="column-12">
						<h3 class="uppercase text-18">Рекомендованные товары</h3>
					</div>
				</div>
				<div class="row large-10 bg_white recomended table-row pb50 pt50 mb50 step_1">
					<table class="responsive mb50">
						<thead class="table-header">
						<tr class='row-1'>
							<th><h3 class="text-left uppercase">Клей</h3></th>
							<th>Цена</th>
							<th class="text-center">Кол-во</th>
							<th class="text-center">Кол-во</th>
							<th class="text-center">Сумма</th>
							<th class='br-none' style='border-right: none;'></th>
						</tr>
						<tr class="row-2 text-light opacity-07">
							<td></td>
							<td class="text-center">за мешок 25кг</td>
							<td class='text-center '>мешков</td>
							<td class="text-center"> поддонов</td>
							<td class="text-center">руб.</td>
							<td class='br-none'></td>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td class="pl10">Название</td>
							<td class="text-center">200x209x290</td>
							<td class="text-center">60</td>
							<td class='text-center'>
								<form id='myform' class='display-inline-block' method='POST' action='#'>
									<input type='button' value='-' class='qt qtyminus' field='quantity' style='font-size: 20px'/>
									<input type='text' name='quantity' value='0' class='qty' />
									<input type='button' value='+' class='qt qtyplus' field='quantity' style='font-size: 20px'/>
									<input type='hidden' class='serialize' name='<?php echo 2 ?>' value='<?php echo 3 ?>'>
								</form>
							</td>
							<td class="text-center product_total_price" data-quantity="<?php echo  1 ?>" data-price="<?php echo 15 ?>">0</td>
							<td class='br-none text-center'><i class='fa fa-plus-circle fa-2x' id="add_glue"></i></td>
						</tr>
						</tbody>
					</table>

				</div>
				<div class="row large-10 bg_white mb130 table-row step_1">
					<h2 class="text-right">Cтоимость - <span id="final-price"><?php echo $total_product_price ?></span> руб.</h2>
					<p class="text-right"><a href="" class="button btn-blueLine question-btn submit-form">Оформить заказ</a></p>
				</div>
			<?php } ?>
		</div>
		
	</div>
	
</section>