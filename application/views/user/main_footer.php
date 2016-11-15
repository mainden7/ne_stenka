<style type="text/css">
	#main-footer a:hover{
		color: #0066d9;
	}
	.main-footer h3,
	
	.main-footer ul li a{
		color: #fff;
	}
	ul{
		list-style: none;
	}
	ul li{
		text-transform: uppercase;
	}
	p.grey,
	p.grey > a{
		color: #989898;
	}
	a.border-bottom-none:hover{
		border-bottom: none;
	}
	@media(max-width: 1024px) and (min-width: 920px){
		.freecall-nowrap{
			white-space: nowrap;
		}
	}
	@media(max-width: 768px){
		.freecall-nowrap{
			font-size: 11px;
		}
	}
</style>
<section id="main-footer">
	<div class='row expanded large-12 main-footer'>
		<div class="row expanded small-12 medium-12 large-12 large-centered pt80 pb80" style='background: #091c3a'>
			<div class="row large-10">
				<div class="column small-12 medium-4">
					<h3 class="logo-white-header">
						<?php echo isset($data['main_settings']['main_name']) ?  $data['main_settings']['main_name']: 'NeStenka'?>
					</h3>
					<p class="text-white-60">
						Высококачественные блоки<br>из ячеистого бетона
					</p>
				</div>
				<div class="column small-7 medium-3">
					<ul class="pl0">
						<li><a href='/user/blocks'>Блоки</a></li>
						<li><a href='/user/slabs'>Плиты перекрытия</a></li>
						<li><a href='/user/instruments'>Клей и инструменты</a></li>
						<li><a href='/user/faq'>Справка</a></li>
					</ul>
				</div>
				<div class="column small-5 medium-2">
					<ul class="pl0">
						<li><a href='/user/about'>О компании</a></li>
						<li><a href='/user/news_article'>Новости</a></li>
						<li><a href='/user/contacts'>Контакты</a></li>
					</ul>
				</div>
				<div class="column small-12 medium-3 text-left">
					<p class="uppercase"><span class="text-white-60 text-bold">Остались вопросы ?</span></p>
					<h3 class="mt0 mb0" style="font-size: 28px"><a href="tel: <?php echo $data['contact_settings']['tel_1']; ?>" class="text-white"><?php echo $data['contact_settings']['tel_1'] ?></a></h3>
					<p class="uppercase freecall-nowrap">Бесплатный звонок 24/7</p>
				</div>
			</div>
		</div>
		<div class="row expanded small-12 medium-12 large-12 large-centered pt20" style='background: #0b0e1d'>
			<div class="row large-10">
				<div class="column small-12 medium-4">
					<p>&copy<?php echo date('Y'); ?> <?php echo isset($data['main_settings']['main_name']) ?  $data['main_settings']['main_name']: 'NeStenka'?></p>
				</div>
				<div class="column small-12 medium-4 text-right">
					<img src="<?php echo base_url(); ?>application/resources/user_resources/img/visaMaestroMC.png">
				</div>
				<div class="column small-12 medium-4 text-right">
					<p class='grey'>Разработка &#8212; <a href="http://jetmarketing.by" class="border-bottom-none">JetMarketing</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
