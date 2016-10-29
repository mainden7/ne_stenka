<script src="<?php echo site_url(); ?>/application/resources/js/lib/summernote/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/css/lib/summernote/summernote.css"/>
<div id="addProject" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- modal content start -->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
					<i class="font-icon-close-2"></i>
				</button>
                <h3 class="modal-title text-center">Добавить проект</h3>
            </div>
            <form class="form-horizontal mt25 ml50" action="/admin_panel/projects" method="POST"   enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                    	<label for="name" class="control-label">Название проекта</label>
                    	<input type="text" class='form-control' name="name" value="" placeholder="имя">
                    </div>
                    <div class="form-group">
                    	<label for="name" class="control-label">Имя клиента</label>
                    	<input type="text" class='form-control' name="client_name" value="" placeholder="имя">
                    </div>
                    <div class="form-group">
                    	<label>Отзыв клиента</label>
                    	<div class="summernote-theme-1">
							<textarea class="summernote" name='testimonial'></textarea>
						</div>
                    </div>
                    <div class="form-group">
                    	<label>Описание проекта</label>
                    	<div class="summernote-theme-1">
							<textarea class="summernote" name='description'></textarea>
						</div>
                    </div>
                    <div class="form-group">
							<label for="name" class="control-label">Изображение</label>
							<input type="file" class='form-control' name="img" value="">
						</div>
                </div>
                <div class="modal-footer">
                	<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">                	
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Закрыть</button>
					<button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
        <!-- modal content end -->

    </div>
</div>

<div class="page-content">
		<div class="container-fluid">
		<button class='btn btn-inline btn-primary-outline' data-toggle='modal' data-target='#addProject'>Добавить проект</button>
			<section class="box-typical box-typical-full-height-with-header">
				<header class="box-typical-header box-typical-header-bordered">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<h3>Проекты</h3>
						</div>
						
					</div>
				</header>
				<div class="box-typical-body">
					<div class="gallery-grid">
					<?php foreach($data['projects'] AS $project) { ?>
						<div class="gallery-col">
							<article class="gallery-item">
								<img class="gallery-picture" src="<?php echo base_url() ?>application/resources/img/upload/<?php echo $project['img'] ?>" alt="<?php echo $project['name'] ?>" height="158">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in">
										<p class="gallery-item-title"><?php echo $project['name'] ?></p>
										<div class="btn-group">
											<a href='#' data-toggle='modal' data-target='#editProject<?php echo $project['id'] ?>'>
												<button type="button" class="btn">
													<i class="font-icon font-icon-pencil"></i>
												</button>
											</a>
											<a href='/admin_panel/project_post/<?php echo $project['active'] == 1 ? $project['id'] . '/0' : $project['id'] . '/1'; ?>'>
												<button type="button" class="btn">
												<?php if($project['active'] != 1){ ?>
													<i class="font-icon font-icon-ok"></i>
												<?php }else { ?>
													<i class="font-icon font-icon-del"></i>	
												<?php } ?>
												</button>
											</a>
											<a href='/admin_panel/project_delete/<?php echo $project['id'] ?>'>
												<button type="button" class="btn">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</a>
										</div>
										<p><?php echo $project['date'] ?></p>
									</div>
								</div>
							</article>
						</div><!--.gallery-col-->

						<div id="editProject<?php echo $project['id'] ?>" class="modal fade" role="dialog">
						    <div class="modal-dialog">

						        <!-- modal content start -->
						        <div class="modal-content">
						            <div class="modal-header bg-gray">
						                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
											<i class="font-icon-close-2"></i>
										</button>
						                <h3 class="modal-title text-center">Редактировать проект</h3>
						            </div>
						            <form class="form-horizontal mt25 ml50" action="<?php echo site_url(); ?>admin_panel/edit_project" method="POST"   enctype="multipart/form-data">
						                <div class="modal-body">
						                    <div class="form-group">
						                    	<label for="name" class="control-label">Название проекта</label>
						                    	<input type="text" class='form-control' name="name" value="<?php echo $project['name'] ?>" placeholder="имя">
						                    </div>
						                    <div class="form-group">
						                    	<label for="name" class="control-label">Имя клиента</label>
						                    	<input type="text" class='form-control' name="client_name" value="<?php echo $project['client_name'] ?>" placeholder="имя">
						                    </div>
						                    <div class="form-group">
						                    	<label>Отзыв клиента</label>
						                    	<div class="summernote-theme-1">
													<textarea class="summernote" name='testimonial'><?php echo $project['testimonial'] ?></textarea>
												</div>
						                    </div>
						                    <div class="form-group">
						                    	<label>Описание проекта</label>
						                    	<div class="summernote-theme-1">
													<textarea class="summernote" name='description'><?php echo $project['description'] ?></textarea>
												</div>
						                    </div>
						                    <div class="form-group">
													<label for="name" class="control-label">Изображение</label>
													<input type="file" class='form-control' name="img" value="">
													<input type="hidden" class='form-control' name="old_img" value="<?php echo $project['img'] ?>">
												</div>
						                </div>
						                <div class="modal-footer">
						                	<input type='hidden' name='id' value='<?php echo $project['id'] ?>'>
						                	<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">                	
						                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Закрыть</button>
											<button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
						                </div>
						            </form>
						        </div>
						        <!-- modal content end -->

						    </div>
						</div>
						<?php } ?>

						

					</div><!--.gallery-grid-->
				</div><!--.box-typical-body-->
			</section><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script>
	$(document).ready(function() {
		$('.summernote').summernote();
	});
</script>