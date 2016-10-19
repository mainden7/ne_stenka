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
				<h3 class="cart_sub_header text-right"><img src="<?php echo base_url() ?>application/resources/user_resources/img/cart_1.png"> Оформление заказа <img src="<?php echo base_url() ?>application/resources/user_resources/img/dots.png"> <img src="<?php echo base_url() ?>application/resources/user_resources/img/cart_2.png"> <span class=''>Контактная информация</span></h3>
			</div>
		</div>
		<div class="large-10 row bg_white mb130">
			<form>
				<div class="row large-12 table-row bg_white">
					<h2>Контактная информация</h2>

					<div class="row">
						<div class="large-4 small-12">
							<div class="row">
								<div class="small-3 columns">
									<label for="right-label" class="right">ФИО</label>
								</div>
								<div class="small-9 columns">
									<input type="text" id="right-label" placeholder="Вальдемар">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-4 small-12">
							<div class="row">
								<div class="small-3 columns">
									<label for="right-label" class="right">Телефон</label>
								</div>
								<div class="small-9 columns">
									<input type="text" id="right-label" placeholder="+123456789">
								</div>
							</div>
						</div>
					</div>
					<div class="row  border-bottom pb50">
						<div class="large-4 small-12">
							<div class="row">
								<div class="small-3 columns">
									<label for="right-label" class="right">E-mail</label>
								</div>
								<div class="small-9 columns">
									<input type="text" id="right-label" placeholder="example@example.com">
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row large-12 table-row bg_white pb50">
					<h2>Адрес доставки</h2>

					<div class="row">
						<div class="large-4 small-12">
							<div class="row">
								<div class="small-3 columns">
									<label for="right-label" class="right">Регион</label>
								</div>
								<div class="small-9 columns">
									<input type="text" id="right-label" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-4 small-12">
							<div class="row">
								<div class="small-3 columns">
									<label for="right-label" class="right">Район</label>
								</div>
								<div class="small-9 columns">
									<input type="text" id="right-label" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-4 small-12">
							<div class="row">
								<div class="small-3 columns">
									<label for="right-label" class="right">Нас. пункт</label>
								</div>
								<div class="small-9 columns">
									<input type="text" id="right-label" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-4 small-12">
							<div class="row">
								<div class="small-3 columns">
									<label for="right-label" class="right">Улица</label>
								</div>
								<div class="small-9 columns">
									<input type="text" id="right-label" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-4 small-12">
							<div class="row">
								<div class="small-3 columns">
									<label for="right-label" class="right">Дом</label>
								</div>
								<div class="small-3 columns">
									<input type="text" id="right-label" placeholder="">
								</div>
								<div class="small-2 columns">
									<label for="right-label" class="right">Корп</label>
								</div>
								<div class="small-4 columns">
									<input type="text" id="right-label" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row mb30">
						<div class="large-4 small-12">
							<div class="row">
								<div class="small-3 columns">
									<label for="right-label" class="right">Дата доставки</label>
								</div>
								<div class="small-9 columns">
									<input type="text" id="right-label" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="column large-12 mb80">
						<p><a href="">Добавить коментарий к заказу</a></p>
					</div>
					<div class="large-12 text-center mb80">
						<p class="mb0">После оформления заказа мы пришлем вам СМС и email с подтверждением стоимости и даты доставки</p>
						<h3 class="text-bold mb80 mt0">Оплата заказа происходит по факту доставки</h3>
						<a href="" class="button btn-blueLine big-btn uppercase">Подтвердить заказ</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
