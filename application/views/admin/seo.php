<script src="<?php echo site_url(); ?>/application/resources/js/lib/summernote/summernote.min.js"></script>
<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/css/lib/summernote/summernote.css"/>
<div class="page-content">
	<div class="container-fluid">
		<header class="section-header">
			<div class="tbl">
				<div class="tbl-row">
					<div class="tbl-cell">
						<h2>SEO</h2>
					</div>
				</div>
			</div>
		</header>
		<section class="tabs-section" id='seo-tabs'>
			<div class="tabs-section-nav tabs-section-nav-icons">
				<div class="tbl">
					<ul class="nav" role="tablist">
						<li class="nav-item">
						<a class="nav-link active" data-target='home' role="tab" data-toggle="tab">
								<span class="nav-link-in">
									
									Главная страница
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-target='blocks' role="tab" data-toggle="tab">
								<span class="nav-link-in">
									
									Страница блоков
								</span>
							</a>
						</li>						
					</ul>
				</div>
			</div><!--.tabs-section-nav-->

			<div class="tab-content">
			<?php 
			$i = 1;
			foreach($data['seo_texts'] AS $text) { ?>
				<div role="tabpanel" class="tab-pane fade <?php echo $i == 1 ? 'in active' : '' ?>" id="<?php echo $text['page_id'] ?>">
					<form class="form-horizontal mt25 ml50" action="/admin_panel/seo" method="POST"   enctype="multipart/form-data">
					 <div class="form-group">
                    	<label>SEO текст</label>
                    	<div class="summernote-theme-1">
							<textarea class="summernote" name='content'><?php echo $text['content'] ?></textarea>
						</div>
                    </div>
                     <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
						<input type='hidden' name='id' value="<?php echo $text['id'] ?>">
						<button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
					</form>
				</div><!--.tab-pane-->
				<?php 
				$i++;
				} ?>
			</div><!--.tab-content-->
		</section>


	</div><!--.container-fluid-->
</div><!--.page-content-->
<script>
	$(document).ready(function() {
		$('.summernote').summernote({
			height: 500
		});
		});

</script>