<style type="text/css">
	#cart .cart_sub_header{
		font-size: 24px;
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
</style>
<section id='cart' style="background: #f2f5f8">
	<div class="row expanded large-12 frontSlide" style="background: #f2f5f8">
		<div class="large-10 row pt130 mb30">
			<div class="column large-5 small-12 pl0">
				<h2 class='uppercase mt0'>Корзина</h2>
			</div>
			<div class="column large-7">
				<h3 class="cart_sub_header text-right"><img src="<?php echo base_url() ?>application/resources/user_resources/img/1_white.png"> Оформление заказа <img src="<?php echo base_url() ?>application/resources/user_resources/img/dots.png"> <img src="<?php echo base_url() ?>application/resources/user_resources/img/2_grey.png"> <span class='text-light'>Контактная информация</span></h3>
			</div>
		</div>
		<div class="row large-10 bg_white table-row pb50 pt50 mb50 step_1">
			<table class="responsive mb50">
				<thead class="table-header">
					<tr class='row-1'>
						<th><h3 class="text-left uppercase">Блоки</h3></th>
						<th>Размер</th>
						<th colspan="2" class="text-center">Кол-во</th>
						<th colspan="2" class="text-center">Кол-во</th>
						<th class="text-center">Кол-во поддонов</th>
						<th class="text-center">Сумма</th>
						
						<th class='br-none' style='border-right: none;'></th>
					</tr>
					<tr class="row-2">
						<td></td>
						<td class="text-center">выс. шир. дл.</td>
						<td colspan="2" class='text-center '>шт</td>
						<td colspan="2" class='text-center '>шт</td>
						<td></td>
						<td class="text-center">руб.</td>
						
						<td class='br-none'></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="pl10">Название</td>
						<td class="text-center">200x209x290</td>
						<td class="text-center br-none">60</td>
						<td class="text-center">20</td>
						<td class="text-center br-none">16</td>
						<td class="text-center">15</td>
						<td class='text-center'>
							<form id='myform' class='display-inline-block' method='POST' action='#'>
								<input type='button' value='-' class='qtyminus' field='quantity' style='font-size: 20px'/>
								<input type='text' name='quantity' value='0' class='qty' />
								<input type='button' value='+' class='qtyplus' field='quantity' style='font-size: 20px'/>
							</form>
						</td>
						<td class="text-center">23</td>
						
						<td class='br-none text-center pl20'><i class='fa fa-times'></i></td>
					</tr>
				</tbody>
			</table>
			<h3 class="text-right">Подитог <span>123</span> руб.</h3>
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
					<tr class="row-2">
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
								<input type='button' value='-' class='qtyminus' field='quantity1' style='font-size: 20px'/>
								<input type='text' name='quantity1' value='0' class='qty' />
								<input type='button' value='+' class='qtyplus' field='quantity1' style='font-size: 20px'/>
							</form>
						</td>
						<td class="text-center">15</td>
						<td class='br-none text-center'><i class='fa fa-plus-circle fa-2x'></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row large-10 bg_white mb130 table-row step_1">
			<h2 class="text-right">Cтоимость - <span>8910</span> руб.</h2>
			<p class="text-right"><a href="" class="button btn-blueLine question-btn">Оформить заказ</a></p>
		</div>
		
		
	</div>
	
</section>