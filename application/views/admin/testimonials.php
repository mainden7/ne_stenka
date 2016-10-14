<script src="<?php echo site_url(); ?>/application/resources/js/lib/summernote/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/css/lib/summernote/summernote.css"/>
<div id="addTestimonial" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- modal content start -->
		<div class="modal-content">
			<div class="modal-header bg-gray">
				<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
					<i class="font-icon-close-2"></i>
				</button>
				<h3 class="modal-title text-center">Добавить отзыв</h3>
			</div>
			<form class="form-horizontal mt25 ml50" action="<?php echo site_url(); ?>admin_panel/testimonials" method="POST"   enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label for="name" class="control-label">Имя</label>
						<input type="text" class='form-control' name="name" value="" placeholder="Имя">
					</div>
					<div class="form-group">
						<label for="name" class="control-label">Должность</label>
						<input type="text" class='form-control' name="position" value="" placeholder="Должность">
					</div>
					<div class="form-group">
						<label for="name" class="control-label">Email</label>
						<input type="email" class='form-control' name="email" value="" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Описание</label>
						<div class="summernote-theme-1">
							<textarea class="summernote" name='description'></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="control-label">Фото</label>
						<input type="file" class='form-control' name="photo" value="" placeholder="Email">
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
		<button class='btn btn-inline btn-primary-outline' data-toggle='modal' data-target='#addTestimonial'>Добавить отзыв</button>
		<section class="box-typical">
			<header class="box-typical-header">
				<div class="tbl-row">
					<div class="tbl-cell tbl-cell-title">
						<h3>Отзывы</h3>
					</div>
				</div>
			</header>
			<div class="box-typical-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								
								<th>Имя</th>
								<th>Должность</th>
								<th>E-mail</th>
								<th>Описание</th>
								<th>Дата</th>
								<th>Фото</th>
								<th class="table-icon-cell" style="width: 40px;"></th>
								<th class="table-icon-cell" style="width: 40px;"></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data['testimonials'] AS $testimonial) { ?>
								<tr>
									<td><?php echo $testimonial['name']; ?></td>
									<td><?php echo $testimonial['position']; ?></td>
									<td><?php echo $testimonial['email'] ?></td>
									<td><?php echo $testimonial['description'] ?></td>
									<td><?php echo $testimonial['date'] ?></td>
									<td class="table-photo">
									<?php if(isset($testimonial['photo'])) { ?>
										<img src="<?php echo base_url() ?>application/resources/upload/site<?php echo $testimonial['photo'] ?>" data-placement="bottom">
										<?php } ?>
									</td>
									<td class="table-icon-cell">
										<a data-toggle='modal' data-target='#editTestimonial<?php echo $testimonial['id']; ?>'><i class="font-icon font-icon-pencil"></i></a>
									</td>
									<td class="table-icon-cell">
										<a href="<?php echo site_url(); ?>admin_panel/delete_testimonial/<?php echo $testimonial['id']; ?>" onclick="return window.confirm('Вы уверены?')"><i class="font-icon font-icon-trash"></i></a>
									</td>
								</tr>
								<div id="editTestimonial<?php echo $testimonial['id']; ?>" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- modal content start -->
										<div class="modal-content">
											<div class="modal-header bg-gray">
												<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
													<i class="font-icon-close-2"></i>
												</button>
												<h3 class="modal-title text-center">Добавить отзыв</h3>
											</div>
											<form class="form-horizontal mt25 ml50" action="<?php echo site_url(); ?>admin_panel/edit_testimonial" method="POST"   enctype="multipart/form-data">
												<div class="modal-body">
													<div class="form-group">
														<label for="name" class="control-label">Имя</label>
														<input type="text" class='form-control' name="name" value="<?php echo $testimonial['name']; ?>" placeholder="Имя">
													</div>
													<div class="form-group">
														<label for="name" class="control-label">Должность</label>
														<input type="text" class='form-control' name="position" value="<?php echo $testimonial['position']; ?>" placeholder="Должность">
													</div>
													<div class="form-group">
														<label for="name" class="control-label">Email</label>
														<input type="email" class='form-control' name="email" value="<?php echo $testimonial['email'] ?>" placeholder="Email">
													</div>
													<div class="form-group">
														<label>Описание</label>
														<div class="summernote-theme-1">
															<textarea class="summernote" name='description'><?php echo $testimonial['description'] ?></textarea>
														</div>
													</div>
													<div class="form-group">
														<label for="name" class="control-label">Фото</label>
														<input type="file" class='form-control' name="photo" value="" placeholder="Email">
														<input type='hidden' name='old_photo' value='<?php echo $testimonial['photo'] ?>'>
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
								<?php } ?>
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
			$('.selectpicker').selectpicker({
				style: 'btn-info',
				size: 4
			});

		});

	</script>