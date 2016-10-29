
<div id="addCity" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- modal content start -->
		<div class="modal-content">
			<div class="modal-header bg-gray">
				<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
					<i class="font-icon-close-2"></i>
				</button>
				<h3 class="modal-title text-center">Добавить город</h3>
			</div>
			<form class="form-horizontal mt25 ml50" action="/ne_stenka/index.php/admin_panel/cities" method="POST"   enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label for="name" class="control-label">Город</label>
						<input type="text" class='form-control' name="name" value="" placeholder="имя">
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
		<button class='btn btn-inline btn-primary-outline' data-toggle='modal' data-target='#addCity'>Добавить город</button>
		<section class="box-typical">

			<header class="box-typical-header">
				<div class="tbl-row">
					<div class="tbl-cell tbl-cell-title">
						<h3>Список городов</h3>
					</div>
				</div>
			</header>
			<div class="box-typical-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>№</th>
								<th>Название</th>
								<th>Дата добавления</th>
								<th class="table-icon-cell" style="width: 40px;"></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach($data['cities'] AS $city) { ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $city['name']; ?></td>
									<td class="table-date"><i class="font-icon font-icon-clock"></i> <?php echo date('Y-m-d', strtotime($city['date'])); ?> </td>

									<td class="table-icon-cell">
										<a href="/admin_panel/delete_city/<?php echo $city['id']; ?>" onclick="return window.confirm('Вы уверены?')"><i class="font-icon font-icon-trash"></i></a>
									</td>

								</tr>	
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
