<style>
	#other_articles img{
		width: 100%;
	}
</style>
<section id="other_articles"  style="background: #f2f5f8">
	<div class="row expanded large-12 pt80"  style="background: #f2f5f8; margin-top: -50px;">
		<h2 class="text-center">Новости по теме</h2>
		<div class="row large-10">
			<?php foreach($data['articles'] AS $article) { 
				if($article['id'] != $data['article_id'] AND $article['active'] == 1 AND $article['post'] == 1) {
					?>
					<div class="column large-4 small-12">
						<img src="<?php echo base_url() ?>application/resources/user_resources/img/<?php echo $article['image'] ?>">
						<h2><?php echo $article['title'] ?></h2>
					</div>
					<?php 
				} 
			}
			?>
		</div>
	</div>
</section>