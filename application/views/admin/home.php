

	<div class="mobile-menu-left-overlay"></div>
	

	<div class="page-content">
	    <div class="container-fluid">

	
	        <div class="row">
	            <div class="col-xl-12">
	                <section class="box-typical box-typical-dashboard">
	                    <header class="box-typical-header">
	                        <div class="tbl-row">
	                            <div class="tbl-cell tbl-cell-title">
	                                <h3>Заказы</h3>
	                            </div>
	                            <div class="tbl-cell tbl-cell-actions">

	                                <button type="button" class="action-btn action-btn-expand">
	                                    <i class="font-icon font-icon-expand"></i>
	                                </button>

	                            </div>
	                        </div>
	                    </header>
	                    <div class="box-typical-body">
	                        <table class="tbl-typical">
	                            <tr>
	                                <th><div>ID</div></th>
									<th><div>Продукция</div></th>
	                                <th><div>Имя</div></th>
	                                <th align="center"><div>Контакты</div></th>
	                                <th align="center"><div>Адрес</div></th>
									<th align="center"><div>Коммент</div></th>
									<th align="center"><div>Дата доставки</div></th>
									<th align="center"><div>Дата заказа</div></th>
	                            </tr>
	                            <?php foreach ($data['orders'] as $order) { ?>
									<tr>
										<td><?php echo $order['id'] ?></td>
										<td><a href="" data-target="#order<?php echo $order['id'] ?>" data-toggle="modal">Заказ</a></td>
										<td><?php echo $order['name'] ?></td>
										<td><?php echo $order['tel'] . $order['email'] . $order['region'] . $order['district'] . $order['city'] . $order['house'] . $order['corp'] ?></td>
										<td><?php echo $order['comments'] ?></td>
										<td><?php echo $order['delivery_date'] ?></td>
										<td><?php echo $order['order_date'] ?></td>
									</tr>
	                           <?php } ?>
	                        </table>
	                    </div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->
	            </div><!--.col-->
	
	            <div class="col-xl-12">
	                <section class="box-typical box-typical-dashboard">
	                    <header class="box-typical-header">
	                        <div class="tbl-row">
	                            <div class="tbl-cell tbl-cell-title">
	                                <h3>Сообщения</h3>
	                            </div>
	                            <div class="tbl-cell tbl-cell-actions">
	                                <button type="button" class="action-btn action-btn-expand">
	                                    <i class="font-icon font-icon-expand"></i>
	                                </button>
	                            </div>
	                        </div>
	                    </header>
	                    <div class="box-typical-body">
	                        <table class="tbl-typical">
	                            <tr>
	                                <th><div>Тема</div></th>
	                                <th><div>Имя</div></th>
	                                <th align="center"><div>Тел</div></th>
	                                <th align="center"><div>Комментарий</div></th>
									<th align="center"><div>Дата</div></th>
	                            </tr>
								<?php foreach ($data['messages'] as $message) { ?>
									<tr>

										<td><?php echo $message['subject'] ?></td>
										<td><?php echo $message['name'] ?></td>
										<td><?php echo $message['tel'] ?></td>
										<td><?php echo $message['comments'] ?></td>
										<td><?php echo $message['date'] ?></td>
									</tr>
								<?php } ?>
	                        </table>
	                    </div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->
	            </div><!--.col-->
	

	        </div><!--.row-->
	    </div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php foreach ($data['orders'] as $order) { ?>
		<div class="modal fade modal-custom" id="order<?php echo $order['id'] ?>" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">

					<div class="modal-body pb80">
						<div class="row large-12">
							<div class="column large-12">
								<button type="button" class="" data-dismiss="modal" aria-label="Close">
                            <span
								aria-hidden="true">
                                <img
									src="<?php echo base_url() ?>application/resources/user_resources/img/close-icon.png"
									alt="" class="fa-times">
                            </span>
								</button>
								<h3 class="text-center bold">Ордер #<?php echo $order['id'] ?></h3>
							</div>
							<div class="column large-12">
								<table>
									<tr>
										<th>#</th>
										<th>Продукт</th>
										<th>Категория</th>
										<th>Количество</th>
										<th>Количество</th>
									</tr>

								<?php
									$order_items = Order::load_order_items($order['id']);
								$i = 1;
								foreach ($order_items as $order_item) { ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $order_item['name'] ?></td>
										<td><?php echo $order_item['category'] ?></td>
										<td><?php echo $order_item['size'] ?></td>
										<td><?php echo $order_item['quantity'] ?></td>
									</tr>
									<?php
									$i++;
								}
								?>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	<?php } ?>
