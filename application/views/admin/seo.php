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
	<div class="container-fluid">
		<header class="section-header">
			<div class="tbl">
				<div class="tbl-row">
					<div class="tbl-cell">
						<h2>Meta</h2>
					</div>
				</div>
			</div>
		</header>
		<section class="meta" style="margin-bottom: 50px">
			<h4>Meta index</h4>
			<form action="/admin_panel/add_meta" method="post">
				<textarea name="meta" id="" cols="150" rows="10"><?php echo $data['meta']['meta'] ?></textarea><br><br>
				<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
				<button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
			</form>
		</section>
		<?php
		$i = 1;
		foreach ($data['products'] AS $product){ ?>
			<?php if($i == 1) {
				$i++;
				?>
				<div class="col-md-12"><h2>SEO продукты</h2></div>
			<?php } ?>
		<div class="col-md-6 col-sm-12" style="margin-bottom: 30px;">


			<h4><?php echo $product['name'] ?></h4>
			<form action="/admin_panel/add_meta" method="post">
				<div class="form-group">
					<label for="">Title</label>
					<input class="form-control" type="text" name="title" id="" value="<?php echo $product['title'] ?>">
				</div>
				<label for="">Meta</label>
				<textarea class='form-control' name="meta" id="" cols="150" rows="10"><?php echo $product['meta'] ?></textarea><br><br>
				<input type="hidden" name="type" value="product">
				<input type="hidden" name="id" value="<?php echo $product['id'] ?>">
				<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
				<button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
			</form>
		</div>
		<?php } ?>
		<?php
		$i = 1;
		foreach ($data['categories'] AS $category){ ?>
			<?php if($i == 1) {
				$i++;
				?>
				<div class="col-md-12"><h2>SEO категории</h2></div>
			<?php } ?>
			<div class="col-md-6 col-sm-12" style="margin-bottom: 30px;">


				<h4><?php echo $category['name'] ?></h4>
				<form action="/admin_panel/add_meta" method="post">
					<div class="form-group">
						<label for="">Title</label>
						<input class="form-control" type="text" name="title" id="" value="<?php echo $category['title'] ?>">
					</div>
					<label for="">Meta</label>
					<textarea class='form-control' name="meta" id="" cols="150" rows="10"><?php echo $category['meta'] ?></textarea><br><br>
					<input type="hidden" name="type" value="category">
					<input type="hidden" name="id" value="<?php echo $category['id'] ?>">
					<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
					<button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
				</form>
			</div>
		<?php } ?>
		<?php
		$i = 1;
		foreach ($data['news'] AS $article){ ?>
			<?php if($i == 1) {
				$i++;
				?>
				<div class="col-md-12"><h2>SEO новости</h2></div>
			<?php } ?>
			<div class="col-md-6 col-sm-12" style="margin-bottom: 30px;">


				<h4><?php echo $article['name'] ?></h4>
				<form action="/admin_panel/add_meta" method="post">
					<div class="form-group">
						<label for="">Title</label>
						<input class="form-control" type="text" name="title" id="" value="<?php $article['meta_title'] ?>">
					</div>
					<label for="">Meta</label>
					<textarea class='form-control' name="meta" id="" cols="150" rows="10"><?php echo $article['meta'] ?></textarea><br><br>
					<input type="hidden" name="type" value="articles">
					<input type="hidden" name="id" value="<?php echo $article['id'] ?>">
					<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
					<button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
				</form>
			</div>
		<?php } ?>
		<div class="col-md-12"><h2>SEO О нас</h2></div>
		<div class="col-md-6 col-sm-12" style="margin-bottom: 30px;">
			<form action="/admin_panel/add_meta" method="post">
				<div class="form-group">
					<label for="">Title</label>
					<input class="form-control" type="text" name="title" id="" value="<?php echo $data['about']['title'] ?>">
				</div>
				<label for="">Meta</label>
				<textarea class='form-control' name="meta" id="" cols="150" rows="10"><?php echo $data['about']['meta'] ?></textarea><br><br>
				<input type="hidden" name="type" value="about">
				<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
				<button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
			</form>
		</div>
		<div class="col-md-12"><h2>SEO Справка</h2></div>
		<div class="col-md-6 col-sm-12" style="margin-bottom: 30px;">
			<form action="/admin_panel/add_meta" method="post">
				<div class="form-group">
					<label for="">Title</label>
					<input class="form-control" type="text" name="title" id="" value="<?php echo $data['faq']['title'] ?>">
				</div>
				<label for="">Meta</label>
				<textarea class='form-control' name="meta" id="" cols="150" rows="10"><?php echo $data['faq']['meta'] ?></textarea><br><br>
				<input type="hidden" name="type" value="faq">
				<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
				<button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
			</form>
		</div>
	</div>
</div><!--.page-content-->
<script>
	$(document).ready(function() {
		$('.summernote').summernote({
			height: 500
		});
		});

</script>