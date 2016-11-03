<script src="<?php echo site_url(); ?>/application/resources/js/lib/summernote/summernote.min.js"></script>
<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/css/lib/summernote/summernote.css"/>
<div id="addProduct" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- modal content start -->
		<div class="modal-content">
			<div class="modal-header bg-gray">
				<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
					<i class="font-icon-close-2"></i>
				</button>
				<h3 class="modal-title text-center">Добавить продукт</h3>
			</div>
			<form class="form-horizontal mt25 ml50" action="/admin_panel/faq" method="POST"   enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label for="name" class="control-label">Вопрос</label>
						<input type="text" class='form-control' name="question" value="" placeholder="вопрос">
					</div>
					<div class="form-group">
						<label>Категории</label>
						<select name='category' class="selectpicker">
							<option value="Наша продукция">Наша продукция</option>
							<option value="Как заказать">Как заказать</option>
							<option value='Доставка и оплата'>Доставка и оплата</option>
							<option value="Документы">Документы</option>
						</select>
					</div>
						
					<div class="form-group">
						<label>Описание</label>
						<div class="summernote-theme-1">
							<textarea class="summernote" name='answer'></textarea>
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
		<button class='btn btn-inline btn-primary-outline' data-toggle='modal' data-target='#addProduct'>Добавить вопрос-ответ</button>
		<section class="box-typical">

			<header class="box-typical-header">
				<div class="tbl-row">
					<div class="tbl-cell tbl-cell-title">
						<h3>Список вопросов</h3>
					</div>
				</div>
			</header>
			<div class="box-typical-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>№</th>
								<th>Вопрос</th>
								<th>Ответ</th>										
								<th>Категория</th>
								<th>Дата</th>									
								<th class="table-icon-cell" style="width: 40px;"></th>
								<th class="table-icon-cell" style="width: 40px;"></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach($data['faq'] AS $faq) { ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $faq['question']; ?></td>
									<td class="color-blue-grey-lighter"><?php echo $faq['answer']; ?></td>
									<td><?php echo $faq['category']; ?></td>
									<td class="table-date"><i class="font-icon font-icon-clock"></i> <?php echo date('Y-m-d', strtotime($faq['date'])); ?> </td>
									<td class="table-icon-cell">
										<a data-toggle='modal' data-target='#editFaq<?php echo $faq['id']; ?>'><i class="font-icon font-icon-pencil"></i></a>
									</td>
									<td class="table-icon-cell">
										<a href="/admin_panel/delete_faq/<?php echo $faq['id']; ?>" onclick="return window.confirm('Вы уверены?')"><i class="font-icon font-icon-trash"></i></a>
									</td>

								</tr>
								<div id="editFaq<?php echo $faq['id']; ?>" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- modal content start -->
										<div class="modal-content">
											<div class="modal-header bg-gray">
												<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
													<i class="font-icon-close-2"></i>
												</button>
												<h3 class="modal-title text-center">Редактировать Вопрос-ответ</h3>
											</div>
											<form class="form-horizontal mt25 ml50" action="/admin_panel/edit_faq" method="POST"   enctype="multipart/form-data">
												<div class="modal-body">
													<div class="form-group">
														<label for="name" class="control-label">Вопрос</label>
														<input type="text" class='form-control' name="question" value="<?php echo $faq['question'] ?>">
													</div>															
													<div class="form-group">
														<label>Категории</label>															
														<select name='category' class="">
															<option value="Наша продукция">Наша продукция</option>
															<option value="Как заказать">Как заказать</option>
															<option value='Доставка и оплата'>Доставка и оплата</option>
															<option value="Документы">Документы</option>
														</select>
													</div>
													
													<div class="form-group">
														<label>Ответ</label>
														<div class="summernote-theme-1">
															<textarea class="summernote" name='answer'><?php echo $faq['answer']; ?></textarea>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
													<input type='hidden' name='id' value="<?php echo $faq['id'] ?>">
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
		$('.summernote').summernote({
			height: 150
		});
		$('.selectpicker').selectpicker({
			style: 'btn-info',
			size: 4
		});

	});
	$(function(){
		$('a.show-city').click(function(e){

			e.preventDefault();
			$('.city-list').show().removeClass('hidden');
		});
	});

</script>