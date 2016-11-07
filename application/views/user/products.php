<style type="text/css">	

	
</style>
<section id="products">
	<div class='row expanded large-12 pb130'  style='background-color: #f0f2f6'>
		<div class="row expanded small-12 medium-12 large-10 large-centered"> 
			<div class="column products-title medium-10 small-centered text-center mb80 mt80">
				<h2 class='uppercase'>Наша продукция</h2>
				<h5 class="text-light text-18">Полный ассортимент блоков из ячеистого бетона и инструментов для кладки</h5>
			</div>
			<div class="row">
			<?php foreach($data['categories'] AS $category){ ?>
				<div class="column small-12 medium-4">
					<div class="white_block">
						<div class="img text-center">
							<img src="<?php echo base_url() ?>application/resources/user_resources/img/<?php echo $category['image'] ?>" alt="" width="460" height="306">
						</div>
						<div class="">
							<h3><?php echo $category['name'] ?></h3>
						</div>

						<a href="/user/<?php echo $category['link'] ?>" class="btn-blue uppercase">Размер и цены <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>