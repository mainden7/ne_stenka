<style type="text/css">
	#cart > div > div{
		padding: 50px 40px;
	}
	.price_block{
		border: 5px solid #f0f2f6;
		background: #f0f2f6;;
		padding: 0;
		width: 300px;
		padding-bottom: 20px;
	}
	.price_block .bg_white{
		padding: 20px 50px;
		padding-left: 60px;
	}
	.price_block .bg_grey{
		padding-top: 20px;
	}
	span.price-amount{
		display: inline-block;
		background: #fdd537;
		/* padding: 10px 30px; */
		font-size: 20px;
		position: relative;
		width: 100%;
		text-align: center;
		font-weight: 800;
	}
	span.price-amount:before{
		content: '';
		position: absolute;
		/* width: 50px; */
		/* height: 0px; */
		background: #fefefe;
		left: -20px;
		top: 0;
		/* border-left: 50px solid #fff; */
		/* border-right: 0; */
		border-top: 15px solid #fdd537;
		border-bottom: 17px solid #fdd537;
		/* z-index: 141; */
		/* border: 29px solid transparent; */
		border-left: 20px solid #fff;
	}
	.qty {
		width: 40px;
		height: 25px;
		text-align: center;
		display: inline;
		width: 40px;
		height: 40px;
	}
	input.qtyplus,
	input.qtyminus{
		background: transparent;
		border: none;
		width: 20px;
		height: 40px;
	}
	a.big-btn{
		font-size: 18px;
		padding: 20px;
		text-transform: none;
		width: 100%;
	}
</style>
<section id='cart' style="background: #f2f5f8">
	<div class="row expanded large-12 frontSlide pt80 pb130" style="background: #f2f5f8">
		<div class="large-10 row bg_white">
			<div class="column large-4 small-12">
				<h2 class="mt0">Кельма</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, id!</h3>
			</div>
			<div class="column large-4 small-12">
				<img src="<?php echo base_url() ?>application/resources/user_resources/img/kelma.png" alt="">
			</div>
			<div class="column large-4 small-12 price_block pb50">
				<div class="bg_white">
					<span class="price-amount">396 <small>p.</small></span>
				</div>
				<div class="bg_grey">
					<div class="columns large-6 small-12">
						<label>Размер</label>
					</div>
					<div class="columns large-6 small-12">
						<select>
							<option>500</option>
						</select>
					</div>
					<div class="columns large-6 small-12">
						<label>Количество</label>
					</div>
					<div class="columns large-6 small-12 text-center">
						<form id='myform' class='display-inline-block' method='POST' action='#'>
							<input type='button' value='-' class='qtyminus' field='quantity' style='font-size: 20px'/>
							<input type='text' name='quantity' value='0' class='qty' />
							<input type='button' value='+' class='qtyplus' field='quantity' style='font-size: 20px'/>
						</form>
					</div>
					<div class="column large-12 text-center">
						<a href="" class="button btn-blueLine big-btn uppercase">Добавить к заказу</a>
					</div>
				</div>
			</div>
			
		</div>
		<div class="large-10 row bg_white">
			<h2 class="text-center mb50">Кельма отпускается только в комплекте с блоками</h2>
			<p class="text-center"><a href="" class="button btn-blueLine btn-inverted btn-transparent">Выбрать блоки <i class="fa fa-long-arrow-right"></i></a></p>
		</div>
	</div>
</section>