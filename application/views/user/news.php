<style type="text/css">
	
	.product_block{
		background: #fff;
		padding: 40px;
	}
	.hovered-block{
		color: #808285;
	}
	.hovered-block:hover{
		color: #0078ff;
	}
	
</style>
<div class='row expanded large-12 pb130 pt130'>
	<div class="row expanded small-12 medium-12 large-10 large-centered"> 
		<div class="column products-title medium-6 small-centered text-center">
			<h2 class="mb80 block-header mt0">Новости</h2>
		</div>
		<div class="row">
			<?php foreach($data['news'] AS $article) { 
				if($article['active'] == 1 AND $article['on_main'] == 1) {	
					?>
					<div class="column small-12 medium-4">
					<a href='/user/news_article/<?php echo $article['id'] ?>'>
						<div class="hovered-block">
							<div class="img text-left">
								<img src="<?php echo base_url() ?>application/resources/user_resources/img/<?php echo $article['image'] ?>" alt="">
							</div>
							<div class="">
								<p class="text-bold" style='font-size: 16px'><?php echo $article['title'] ?></p>
							</div>
						</div>
						</a>
					</div>
					<?php } 
				}
				?>
			</div>
		</div>
	</div>