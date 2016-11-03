<script src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
	<script src="<?php echo site_url(); ?>/application/resources/js/lib/google-maps/infobox.js"></script>
	<script src="<?php echo site_url(); ?>/application/resources/js/lib/google-maps/google-maps-init.js"></script>
<div class="page-content">
		<div class="container-fluid">
			<section class="box-typical contacts-page">
				<header class="box-typical-header box-typical-header-bordered">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<h1>Контакты</h1>
							<ul class="contacts-tabs" role="tablist">
								<li class="nav-item">
									<a href="#" role="tab" data-toggle="tab" class="active">Москва</a>
								</li>
							</ul>
						</div>
						<div class="tbl-cell tbl-cell-actions">
							<button type="button" class="action-btn action-btn-expand">
								<i class="font-icon font-icon-expand"></i>
							</button>
						</div>
					</div>
				</header>

				<div class="tab-content">
					<div role="tabpanel" class="clearfix tab-pane active" id="tab-contact-1">
						<div class="contacts-page-col-left">
							<div class="contacts-page-col-left-in">
								<div id="map_canvas" class="map"></div>
							</div><!--.contacts-page-col-left-in-->
						</div><!--.contacts-page-col-left-->
						<div class="contacts-page-col-right">
							<section class="contacts-page-section">
								<header class="box-typical-header-sm">Соц. сети</header>
								<a href="http://<?php echo $data['contact_settings']['facebook'] ?>" class="contact">
									<i class="font-icon font-icon-facebook"></i>
								</a>
								<a href="http://<?php echo $data['contact_settings']['twitter'] ?>" class="contact">
									<i class="font-icon font-icon-twitter"></i>
								</a>
								<a href="http://<?php echo $data['contact_settings']['linkedin'] ?>" class="contact">
									<i class="font-icon font-icon-linkedin"></i>
								</a>
								<a href="http://<?php echo $data['contact_settings']['google_plus'] ?>" class="contact">
									<i class="font-icon font-icon-google-plus"></i>
								</a>
								<a href="http://<?php echo $data['contact_settings']['instagram'] ?>" class="contact">
									<i class="font-icon font-icon-instagram"></i>
								</a>
							</section>
							<form class="contacts-page-section" action="<?php echo site_url() ?>index.php/admin_panel/contact_settings" method="post">
								<header class="box-typical-header-sm">Настройки соц. ссылок</header>
								<div class="form-group">
									<input type="text" class="form-control" name="facebook" <?php echo !isset($data['contact_settings']['facebook']) ? 'placeholder="Facebook"' : 'value="'.$data['contact_settings']['facebook'].'"' ?>/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="twitter" <?php echo !isset($data['contact_settings']['twitter']) ? 'placeholder="Twitter"' : 'value="'.$data['contact_settings']['twitter'].'"' ?>/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="linkedin" <?php echo !isset($data['contact_settings']['linkedin']) ? 'placeholder="Linkedin"' : 'value="'.$data['contact_settings']['linkedin'].'"' ?>/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="google_plus" <?php echo !isset($data['contact_settings']['google_plus']) ? 'placeholder="Google Plus"' : 'value="'.$data['contact_settings']['google_plus'].'"' ?>/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="instagram" <?php echo !isset($data['contact_settings']['instagram']) ? 'placeholder="Instagram"' : 'value="'.$data['contact_settings']['instagram'].'"' ?>/>
								</div>
								<header class="box-typical-header-sm">Контакты</header>
								<div class="form-group">
									<input type="email" class="form-control" name="main_email" <?php echo !isset($data['contact_settings']['main_email']) ? 'placeholder="Главный Email"' : 'value="'.$data['contact_settings']['main_email'].'"' ?>/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="tel_1" <?php echo !isset($data['contact_settings']['tel_1']) ? 'placeholder="Главный телефон"' : 'value="'.$data['contact_settings']['tel_1'].'"' ?>/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="tel_2" <?php echo !isset($data['contact_settings']['tel_2']) ? 'placeholder="Доп. телефон"' : 'value="'.$data['contact_settings']['tel_2'].'"' ?>/>
								</div>
								 <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
								<button type="submit" class="btn btn-rounded">Сохранить</button>
							</form>
						</div><!--.contacts-page-col-right-->
					</div><!--.tab-pane-->

					<div role="tabpanel" class="clearfix tab-pane" id="tab-contact-2">
						<div class="contacts-page-col-left">
							<div class="contacts-page-col-left-in">
								<div id="map_canvas_2" class="map"></div>
							</div><!--.contacts-page-col-left-in-->
						</div><!--.contacts-page-col-left-->
						<div class="contacts-page-col-right">
							<section class="contacts-page-section">
								<header class="box-typical-header-sm">Connect</header>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-facebook"></i>
								</a>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-twitter"></i>
								</a>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-linkedin"></i>
								</a>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-google-plus"></i>
								</a>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-instagram"></i>
								</a>
							</section>
						</div><!--.contacts-page-col-right-->
					</div><!--.tab-pane-->

					<div role="tabpanel" class="clearfix tab-pane" id="tab-contact-3">
						<div class="contacts-page-col-left">
							<div class="contacts-page-col-left-in">
								<div id="map_canvas_3" class="map"></div>
							</div><!--.contacts-page-col-left-in-->
						</div><!--.contacts-page-col-left-->
						<div class="contacts-page-col-right">
							<section class="contacts-page-section">
								<header class="box-typical-header-sm">Connect</header>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-facebook"></i>
								</a>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-twitter"></i>
								</a>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-linkedin"></i>
								</a>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-google-plus"></i>
								</a>
								<a href="contacts-page.html#" class="contact">
									<i class="font-icon font-icon-instagram"></i>
								</a>
							</section>
							<form class="contacts-page-section">
								<header class="box-typical-header-sm">Send Message</header>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="E-Mail"/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Subject"/>
								</div>
								<div class="form-group">
									<textarea rows="4" class="form-control" placeholder="Message"></textarea>
								</div>
								 <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
								<button type="submit" class="btn btn-rounded">Send</button>
							</form>
							<section class="contacts-page-section">
								<header class="box-typical-header-sm">Other way</header>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
							</section>
						</div><!--.contacts-page-col-right-->
					</div><!--.tab-pane-->
				</div><!--.tab-content-->
			</section><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->