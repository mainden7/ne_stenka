<style type="text/css">
	.instrument_block{
		border: 2px solid #efefef;
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
		border-top: 15px solid #fdd537;
		border-bottom: 17px solid #fdd537;
		/* z-index: 141; */
		/* border: 29px solid transparent; */
		border-left: 20px solid #fff;
	}
</style>
<section class="pb80 pt50">
	<div class='row expanded large-12 mb50'>
		<div class="column products-title medium-6 small-centered text-center">
			<h2 class='uppercase'>Инструменыты для кладки</h2>
			<h5 class="text-light text-18">В нашем каталоге есть все необходимые для кладки инструменты</h5>
		</div>
	</div>
	<div class="row expanded large-10 mb50">
		<div class="column large-4 medium-4 small-12 mb30">
			<div class="instrument_block">
				<div class="inst_img text-center mb80">
					<img src="<?php echo base_url(); ?>application/resources/user_resources/img/shtroborez.png">
				</div>
				<div class="inst_caption">
					<div class="row large-12">
						<div class="column large-8 small-6">
							<h3 class='mt0 inst_title'>Штроборез</h3>
						</div>
						<div class="column large-4 small-6">
							<span class="price-amount">396 <small>p.</small></span>
						</div>
					</div>
					<div class="row large-12">
						<div class="column">
							<a href="#" class="btn-blue uppercase not-decorated">Подробнее <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="column large-4 medium-4 small-12 mb30">
			<div class="instrument_block">
				<div class="inst_img text-center mb80">
					<img src="<?php echo base_url(); ?>application/resources/user_resources/img/instrument2.png">
				</div>
				<div class="inst_caption">
					<div class="row large-12">
						<div class="column large-8 small-6">
							<h3 class='mt0 inst_title'>Каретка</h3>
						</div>
						<div class="column large-4 small-6">
							<span class="price-amount">396 <small>p.</small></span>
						</div>
					</div>
					<div class="row large-12">
						<div class="column">
							<a href="#" class="btn-blue uppercase not-decorated">Подробнее <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="column large-4 medium-4 small-12 mb30">
			<div class="instrument_block">
				<div class="inst_img text-center mb80">
					<img src="<?php echo base_url(); ?>application/resources/user_resources/img/instrument3.png">
				</div>
				<div class="inst_caption">
					<div class="row large-12">
						<div class="column large-8 small-6">
							<h3 class='mt0 inst_title'>Рубанок</h3>
						</div>
						<div class="column large-4 small-6">
							<span class="price-amount">396 <small>p.</small></span>
						</div>
					</div>
					<div class="row large-12">
						<div class="column">
							<a href="#" class="btn-blue uppercase not-decorated">Подробнее <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="column large-4 medium-4 small-12"></div>
		<div class="column large-4 medium-4 small-12"></div>
	</div>
	<div class="row large-10 text-center">
		<a role="button" aria-label="submit form" href="#" class="button btn-blueLine btn-inverted add-to-cart">Перейти в каталог <i class="fa fa-long-arrow-right"></i></a>
	</div>
</section>