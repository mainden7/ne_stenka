<style type="text/css">
	p.text-12{
		font-size:12px;
		opacity: 0.7;

	}

	img.alert{
		width: 35px !important;
		max-width: 35px;
		float: left;
		margin-right:10px;
	}

	.instrument_block{
		border: 5px solid #efefef;
		padding: 50px 20px;
	}
	h3.inst_title{
		font-size: 24px;
	}
	.inst_img{
		min-height: 224px;
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
		border-top: 16px solid #fdd537;
		border-bottom: 17px solid #fdd537;
		/* z-index: 141; */
		/* border: 29px solid transparent; */
		border-left: 20px solid #fff;
	}
	.instrument_block{
		background: #fff;
	}
</style>
<section id="product" style="background: #f2f5f8">
	<div class="row expanded frontSlide large-12 pt80 mb30" style="background: #f2f5f8">
		<div class="large-10 row">
			<div class="column large-9 small-12">
				<h2 class='uppercase'>Клей и инструмент</h2>
			</div>
			<div class="column large-3 small-12 mt30">
				<img class='alert' src="<?php echo base_url() ?>application/resources/user_resources/img/alert.png">
				<p class="mt0 text-12">Товары нашего каталога всегда в наличие и готовы к отгрузке</p>
			</div>
		</div>
		<div class="large-10 row">
		<?php foreach($data['products'] AS $product) { 
			if($product['category'] == $data['categories']['name']) {
				?>
			<div class="column large-4 medium-4 small-12 mb30">
				<div class="instrument_block">
					<div class="inst_img text-center mb80">
						<img src="<?php echo base_url(); ?>application/resources/user_resources/img/<?php echo $product['image'] ?>">
					</div>
					<div class="inst_caption">
						<div class="row large-12">
							<div class="column large-8 small-6">
								<h3 class='mt0 inst_title'><?php echo $product['name'] ?></h3>
							</div>
							<div class="column large-4 small-6">
								<span class="price-amount">
									<?php
									if(isset($this->session->userdata['user_city'])){
										$user_city = $this->session->userdata['user_city'];
									}else{
										$user_city = 'Москва';
									}
									$price =  Product::load_product_prices($product['id'], $user_city);
									echo isset($price['price']) ? $price['price'] : 0;
									?>
									<small>p.</small>
								</span>
							</div>
						</div>
						<div class="row large-12">
							<div class="column">
								<a href="/user/instrument_product/<?php echo $product['id'] ?>" class="btn-blue uppercase not-decorated">Подробнее <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }
		}
		?>
		</div>
	</div>
</section>