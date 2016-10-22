<style>
	#news_article .article_main{
		padding: 50px 30px;
		padding-bottom: 130px;
	}
	#news_article .article_main img{
		width: 100%;
	}
</style>
<section id="news_article" style="background: #f2f5f8">
	<div class="row expanded frontSlide large-12 pt80 mb30" style="background: #f2f5f8">
		<div class="large-10 row">
			<div class="column large-12 small-12 pl0">
				<h2 class='uppercase'><?php echo $data['article']['title'] ?></h2>
			</div>
			<div class="column large-12 bg_white article_main">
				<div class="column large-7 small-12">
					<p><?php echo $data['article']['content'] ?></p>
				</div>
				<div class="column large-5 hide-for-small-only">
					<img src="<?php echo base_url() ?>application/resources/user_resources/img/<?php echo $data['article']['image'] ?>">
				</div>
			</div>
		</div>
	</div>
</section>