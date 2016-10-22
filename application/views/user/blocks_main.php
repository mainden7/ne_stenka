<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/user_resources/libs/foundation/responsive-tables.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/user_resources/libs/foundation/responsive-tables.js">
<style type="text/css">
	.blocks-header{
		line-height: 1;
	}
	.grey-underline-href{
		cursor: pointer;
		color: #58595b;
		text-decoration: none;
		font-weight: 100;
		border-bottom: 1px dashed #58595b;
	}
	
	a.ui-tabs-anchor{
		width: 344px;
		padding: 10px 30px;
		text-decoration: none;
		color: #000;
		border: 5px solid #fff;
		border-bottom: none;
	}
	a.ui-tabs-anchor > p{
		text-transform: none;
	}
	a.ui-tabs-anchor > p > small{
		font-weight: 100;
	}
	span.icon-tab{
		display: inline-block;
		width: 50px;
		height: 50px;
		border: 3px solid #fdd537;
		border-radius: 50%;
		vertical-align: middle;
		text-align: center;
		padding-top: 10px;
		/* text-decoration: none; */
		margin-right: 10px;
		float: left;
	}
	ul.inline li.ui-state-active{
		background: #fff;

	}
	.ui-tabs-panel[aria-hidden='false']{
		background: #fff;
	}
	.price{
		border: 5px solid #f0f2f6;
		width: 325px;
	}
	.price > .price-inner > a.button{
		padding: 20px 0;
		width: 230px;
	}
	.price-inner.white{
		text-align: center;
	}
	.price-inner.grey{
		background: #f0f2f6;
		margin-bottom: 0;
		padding-top: 30px;
		padding-left: 42px;
	}
	h4.price-amount{
		display: inline-block;
		background: #fdd537;
		/* padding: 10px 30px; */
		width: 300px;
		font-size: 24px;
		position: relative;
		width: 220px;
	}
	h4.price-amount:before{
		content: '';
		position: absolute;
		/* width: 50px; */
		/* height: 0px; */
		background: #fefefe;
		left: 0;
		top: 0;
		/* border-left: 50px solid #fff; */
		/* border-right: 0; */
		border-top: 19px solid #fdd537;
		border-bottom: 19px solid #fdd537;
		/* z-index: 141; */
		/* border: 29px solid transparent; */
		border-left: 20px solid #fff;
	}
	ul.price-caption{
		padding-left: 0;
		padding: 20px 0;
	}
	ul.price-caption li{
		text-transform: none;
	}
	ul.price-caption li > i{
		color: #fdd537;
	}
	#tabs-1 > div.column.large-4.pl40 > p:nth-child(2) > i{
		font-size: 1.5em;
		color: #dedede;
		top: 4px;
		position: relative;
	}
	ul.new-inline{
		border-bottom: 5px solid #f0f2f6;
		padding-left: 40px;
	}
	ul.new-inline li{
		margin-bottom: -5px;
		z-index: 100;
		padding: 15px;
	}
	ul.new-inline li:hover{
		cursor: pointer;
	}
	ul.new-inline li.tab-active{
		border: 5px solid #f0f2f6;
		border-bottom: 6px solid #fff;

	}
	table{
		width: 100%;
	}
	table > thead > tr > th,
	table > thead > tr > td,
	table > tbody > tr > td{
		border-right: 5px solid #efefef;
		border-bottom: 5px solid #efefef;
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
	.add-to-cart{
		padding: 20px;
		text-transform: uppercase;
		font-size: 16px;
	}
	.proposal-product{
		padding: 40px 20px;
		border: 5px solid #efefef;
	}
	.proposal-row{
		padding-left: 30px;
		padding-right: 30px;
	}
	.proposal-row h2:hover{
		cursor: pointer;
	}
	.proposal-row h2 i{
		margin-right: 40px;
		color: #dedede;
	}
	.proposal-row-2{
		padding-left: 50px;
		padding-right: 50px;
	}
	.proposal-hidden-row{
		display: none;
	}
	.proposal_block{
		padding: 30px 40px;
		background: #fff;
		padding-bottom: 50px;
	}
	.proposal_block > .img > img{
		min-height: 267px;
		max-height: 267px;
	}
</style>
<section style='background-color: #f0f2f6'>
	<div class="row frontSlide expanded small-12 medium-12 large-12 pt80" style='background-color: #f0f2f6'>
		<div class="row large-10 ">
			<div class="column large-12">
				<div id="tabs">

					<ul class='inline'>
						<li class="mb30"><a href="#tabs-1"><span class='icon-tab'>1</span><p class="mt0">Для кладки на клей<br><small>(1-я категория)</small></p></a></li>
						<li class="mb30"><a href="#tabs-2"><span class='icon-tab'>2</span><p class="mt0">Для кладки на раствор<br><small>(2-я категория)</small></p></a></li>
					</ul>
					<div id="tabs-1" class="row large-12 pt80 pb80">
						<div class="row large-12">
							<div class="column large-8 small-12 pl40">
								<div class="medium-6">
									<h2 class='mt0 blocks-header'>Стеновые блоки<br>1-й категории</h2>
									<p><i class="fa fa-question-circle-o"></i> <span class='grey-underline-href'>Чем отличаются блоки 1-й и 2-й категории?</span></p>
									<p>Стеновые блоки из ячеистого бетона автоклавного твердения 1-й категории (для кладки на клей) используются для строительства несущих и ненесущих стен с толщиной шва 1-3мм</p>
								</div>
							</div>
							<div class="column large-4 small-12">
								<div class='price'>
									<div class='price-inner white'>
										<h4 class='price-amount mb0'>2970 руб/м3</h4>
										<p>106 руб/шт</p>
										<a role="button" aria-label="submit form" href="#" class="button btn-blueLine mb-25">Заказ в 1 клик</a>
									</div>
									<div class='price-inner grey'>
										<ul class="price-caption mb0 mt0">
											<li><i class="fa fa-check"></i> Бесплатная доставка за 2-3 дня</li>
											<li><i class="fa fa-check"></i> На 20% дешевле рыночных цен</li>
											<li><i class="fa fa-check"></i> Удобная оплата по факту</li>
										</ul>
									</div>
								</div>
								<p class='pl20'>Бесплатная помощь в выборе блоков</p>
							</div>
						</div>
						<div class="row large-12">
							<ul class="inline new-inline">
								<li class="li-tab tab-active" data-show='table-info-1' data-hide='table-info-2'>Цены и размеры</li>
								<li class='li-tab' data-show='table-info-2' data-hide='table-info-1'>Тех. характеристики</li>
							</ul>
							<div class="table-info-1  proposal-row-2 mb80">
								<h4>Цены указаны на марку блоков <b>d500</b> для города 
									<a href='#' data-target='#chooseCity' data-toggle='modal'>
										<?php
										if(isset($this->session->userdata['user_city'])){
											if($this->session->userdata['user_city'] == 'moscow') {
												echo 'Москва';
											}elseif($this->session->userdata['user_city'] == 'sp') {
												echo 'Санкт-Петербург';
											}elseif($this->session->userdata['user_city'] == 'bryansk') {
												echo 'Брянск';
											}elseif($this->session->userdata['user_city'] == 'kaluga') {
												echo 'Калуга';
											}elseif($this->session->userdata['user_city'] == 'vladimir') {
												echo 'Владимир';
											}elseif($this->session->userdata['user_city'] == 'novgorod') {
												echo 'Новгород';
											}elseif($this->session->userdata['user_city'] == 'orel') {
												echo 'Орел';
											}elseif($this->session->userdata['user_city'] == 'petrozavodsk') {
												echo 'Петрозаводск';
											}elseif($this->session->userdata['user_city'] == 'pskov') {
												echo 'Псков';
											}elseif($this->session->userdata['user_city'] == 'smolensk') {
												echo 'Смоленск';
											}elseif($this->session->userdata['user_city'] == 'tver') {
												echo 'Тверь';
											}elseif($this->session->userdata['user_city'] == 'tula') {
												echo 'Тула';
											}
										}else{
											echo 'Москва';
										}
										?> <i class='fa fa-sort-down'></i>
									</a>, <a href="">Без упаковки на поддоне <i class='fa fa-sort-down'></i></a></h4>
									<table class="responsive">
										<thead class="table-header">
											<tr class='row-1'>
												<th>Размер</th>
												<th colspan="2" class="text-center">Кол-во на поддоне</th>
												<th colspan="2" class="text-center">Кол-во на машине</th>
												<th colspan="3" class="text-center">Цена руб.</th>
												<th class="text-center">Кол-во поддонов</th>
												<th class='br-none' style='border-right: none;'></th>
											</tr>
											<tr class="row-2">
												<td>выс. шир. дл.</td>
												<td class='text-center br-none'>шт</td>
												<td class='text-center'>м3</td>
												<td class='text-center br-none'>шт</td>
												<td class='text-center'>м3</td>
												<td class='text-center br-none'>шт</td>
												<td class='text-center br-none'>м3</td>
												<td class='text-center'>машины</td>
												<td></td>
												<td class='br-none'></td>
											</tr>
										</thead>
										<tbody>
											<?php foreach($data['products'] AS $product){ 
												if($product['category'] == 'Blocks') {
													?>
													<tr>
														<td><?php echo $product['size'] ?></td>
														<td class="text-center br-none">60</td>
														<td class="text-center">20</td>
														<td class="text-center br-none">16</td>
														<td class="text-center">15</td>
														<td class="text-center br-none">21</td>
														<td class="text-center br-none">23</td>
														<td class="text-center">111</td>
														<td class='text-center'>
															<form id='myform' class='display-inline-block' method='POST' action='#'>
																<input type='button' value='-' class='qtyminus' field='quantity<?php echo $product['id'] ?>' style='font-size: 20px'/>
																<input type='text' name='quantity<?php echo $product['id'] ?>' value='1' class='qty' />
																<input type='button' value='+' class='qtyplus' field='quantity<?php echo $product['id'] ?>' style='font-size: 20px'/>
															</form>
														</td>
														<td class='br-none text-center'>
															<form action='/user/add_to_cart' method='post'>
																<input type="hidden" name="id" value='<?php echo $product['id'] ?>'>
																<input type="hidden" name="quantity<?php echo $product['id'] ?>" value='1'>
																<input type="hidden" name="path" value="<?php echo isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PATH_INFO'] ?>">
																<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
																<button type='submit'><i class='fa fa-shopping-basket fa-2x'></i></button>	
															</form>

														</td>
													</tr>
													<?php } 
												}
												?>
											</tbody>
										</table>
									</div>
									<div class="table-info-2">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
								<div class="row large-12 proposal-row">
									<h2 class="text-center"><i class="fa fa-plus"></i> С этими блоками также покупают</h2>
									<div class="row large-12 proposal-hidden-row hidden">
										<div class="column large-6 small-12 mb40">
											<div class="column large-12 proposal-product">
												<div class="column large-8 small-12">
													<h3 class="mt0">Клеевой состав для кладки блоков</h3>
													<p>При условии покупки блоков, цена с доставкой: 175руб за мешок 25кг</p>
													<form id='myform' class='display-block' method='POST' action='#'>
														<input type='button' value='-' class='qtyminus' field='quantity1' style='font-size: 20px'/>
														<input type='text' name='quantity1' value='0' class='qty' />
														<input type='button' value='+' class='qtyplus' field='quantity1' style='font-size: 20px'/>
													</form>
													<a role="button" aria-label="submit form" href="#" class="button btn-blueLine btn-inverted add-to-cart">Добавить к заказу <i class="fa fa-long-arrow-right"></i></a>
												</div>
												<div class="column large-4 small-12">
													<img src="<?php echo base_url() ?>application/resources/user_resources/img/glue.png">
												</div>
											</div>
										</div>
										<div class="column large-6 small-12 mb40">
											<div class="column large-12 proposal-product">
												<div class="column large-8 small-12">
													<h3 class='mt0'>Клеевой состав для кладки блоков</h3>
													<p>При условии покупки блоков, цена с доставкой: 175руб за мешок 25кг</p>
													<form id='myform' class='display-block' method='POST' action='#'>
														<input type='button' value='-' class='qtyminus' field='quantity2' style='font-size: 20px'/>
														<input type='text' name='quantity2' value='0' class='qty' />
														<input type='button' value='+' class='qtyplus' field='quantity2' style='font-size: 20px'/>
													</form>
													<a role="button" aria-label="submit form" href="#" class="button btn-blueLine btn-inverted add-to-cart">Добавить к заказу <i class="fa fa-long-arrow-right"></i></a>
												</div>
												<div class="column large-4 small-12">
													<img src="<?php echo base_url() ?>application/resources/user_resources/img/glue.png">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tabs-2" class="row large-12">
								<div class="column large-10">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>

							</div>

						</div>
					</div>
				</div>

			</div>
			<div class='row expanded large-12 pb130'  style='background-color: #f0f2f6'>
				<div class="column products-title medium-6 small-centered text-center">
					<h2 class='uppercase'>Другие виды блоков</h2>
					<h5>У нас есть все виды блоков из ячеистого бетона</h5>
				</div>
				<div class="row large-10">
					<div class="column large-4 small-12 medium-4 mb30">
						<div class="proposal_block">
							<div class="img text-center">
								<img src="http://localhost/ne_stenka//application/resources/user_resources/img/wall_blocks.png" alt="">
							</div>
							<div class="">
								<h2>Стеновые<br> блоки</h2>
							</div>

							<a href="#" class="btn-blue uppercase not-decorated">Размеры и цены <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

						</div>
					</div>
					<div class="column large-4 small-12 medium-4 mb30">
						<div class="proposal_block">
							<div class="img text-center">
								<img src="http://localhost/ne_stenka//application/resources/user_resources/img/grid_block.png" alt="">
							</div>
							<div class="">
								<h2>Пазогребенные<br> блоки</h2>
							</div>

							<a href="#" class="btn-blue uppercase not-decorated">Размеры и цены <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

						</div>
					</div>
					<div class="column large-4 small-12 medium-4 mb30">
						<div class="proposal_block">
							<div class="img text-center">
								<img src="http://localhost/ne_stenka//application/resources/user_resources/img/brus_block.png" alt="">
							</div>
							<div class="">
								<h2>Брусовые<br> перемычки</h2>
							</div>

							<a href="#" class="btn-blue uppercase not-decorated">Размеры и цены <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

						</div>
					</div>
				</div>
			</div>
		</section>