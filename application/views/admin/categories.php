<script src="<?php echo site_url(); ?>/application/resources/js/lib/summernote/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/css/lib/summernote/summernote.css"/>
<div id="addCategory" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- modal content start -->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
					<i class="font-icon-close-2"></i>
				</button>
                <h3 class="modal-title text-center">Добавить категорию</h3>
            </div>
            <form class="form-horizontal mt25 ml50" action="<?php echo site_url(); ?>admin_panel/categories" method="POST"   enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                    	<label for="name" class="control-label">Имя категории</label>
                    	<input type="text" class='form-control' name="name" value="" placeholder="имя">
                    </div>
                    <div class="form-group">
                    	<label>Описание</label>
                    	<div class="summernote-theme-1">
							<textarea class="summernote" name='description'></textarea>
						</div>
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
	<button class='btn btn-inline btn-primary-outline' data-toggle='modal' data-target='#addCategory'>Добавить категорию</button>
		<section class="box-typical">
			
			<header class="box-typical-header">
				<div class="tbl-row">
					<div class="tbl-cell tbl-cell-title">
						<h3>Список категорий</h3>
					</div>
				</div>
			</header>
			<div class="box-typical-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>№</th>
								<th>Имя</th>
								<th>Описание</th>
								<th>Дата</th>
								<th class="table-icon-cell" style="width: 40px;"></th>
								<th class="table-icon-cell" style="width: 40px;"></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;
							foreach($data['categories'] AS $category) { ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $category['name']; ?></td>
									<td class="color-blue-grey-lighter"><?php echo $category['description']; ?></td>
									<td class="table-date"><i class="font-icon font-icon-clock"></i> <?php echo date('Y-m-d', strtotime($category['date'])); ?> </td>
									<td class="table-icon-cell">
										<a data-toggle='modal' data-target='#editCategory<?php echo $category['id']; ?>'><i class="font-icon font-icon-pencil"></i></a>
									</td>
									<td class="table-icon-cell">
										<a href="<?php echo site_url(); ?>admin_panel/delete_category/<?php echo $category['id']; ?>" onclick="return window.confirm('Вы уверены?')"><i class="font-icon font-icon-trash"></i></a>
									</td>
								</tr>
								<div id="editCategory<?php echo $category['id']; ?>" class="modal fade" role="dialog">
							        <div class="modal-dialog">

							            <!-- modal content start -->
							            <div class="modal-content">
							                <div class="modal-header bg-gray">
							                    <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
													<i class="font-icon-close-2"></i>
												</button>
							                    <h3 class="modal-title text-center">Редактировать категорию</h3>
							                </div>
							                <form class="form-horizontal mt25 ml50" action="<?php echo site_url(); ?>admin_panel/edit_category" method="POST"   enctype="multipart/form-data">
								                <div class="modal-body">
								                    <div class="form-group">
								                    	<label for="name" class="control-label">Имя категории</label>
								                    	<input type="text" class='form-control' name="name" value="<?php echo $category['name'] ?>" placeholder="name">
								                    </div>
								                    <div class="form-group">
								                    	<label>Описание</label>
								                    	<div class="summernote-theme-1">
															<textarea class="summernote" name='description'><?php echo $category['description']; ?></textarea>
														</div>
								                    </div>
								                </div>
								                <div class="modal-footer">
								                	<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
								                	<input type='hidden' name='id' value="<?php echo $category['id'] ?>">
								                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Закрыть</button>
													<button type="submit" class="btn btn-rounded btn-primary">Сохранить</button>
								                </div>
							                </form>
							            </div>
							            <!-- modal content end -->

							        </div>
							    </div>
							<?php
							$i++;
							} ?>
						</tbody>
					</table>
				</div>
			</div><!--.box-typical-body-->
		</section><!--.box-typical-->

	</div><!--.container-fluid-->
</div><!--.page-content-->
<script>
	$(document).ready(function() {
		$('.summernote').summernote();
	});
</script>