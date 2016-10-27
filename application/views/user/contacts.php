<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<style type="text/css">
	#contacts img{
		float: left;
		margin-right: 20px;
	}
	#contacts .bg-white{
		background: #fff;
		padding: 30px 50px;
	}
</style>
<section id="contacts" style="background: #f2f5f8">
	<div class="row expanded frontSlide large-12 pt80 mb80" style="background: #f2f5f8">
		<div class="row large-10 small-12 text-center">
			<div class="column large-12 mb50">
				<h1 class='uppercase mt30'>Контакты</h1>
				<div class="row large-8">
					<p class="text-18">Вы можете связаться с нами любым удобным для вас способом. В рабочее время мы ответим или перезвоним в течение часа</p>
				</div>
			</div>
		</div>
		<div class="row large-10 ">
			<div class="column large-12">
				<div class="row large-12  bg-white">
					<div class="column large-4 medium-4 small-12">
				<img src="<?php echo base_url() ?>application/resources/user_resources/img/contacts_phone.png">
				<h3><a href='tel: <?php echo isset($data['contact_settings']['tel_1']) ? $data['contact_settings']['tel_1'] : '8 800 100-20-30' ?>'><?php echo isset($data['contact_settings']['tel_1']) ? $data['contact_settings']['tel_1'] : '8 800 100-20-30' ?></a></h3>
			</div>
			<div class="column large-4 medium-4 small-12">
				<img src="<?php echo base_url() ?>application/resources/user_resources/img/contacts_mail.png">
				<h3><a href='<?php echo isset($data['contact_settings']['main_email']) ? $data['contact_settings']['main_email'] : 'example@example.com' ?>'><?php echo isset($data['contact_settings']['main_email']) ? $data['contact_settings']['main_email'] : 'example@example.com' ?></a></h3>
			</div>
			<div class="column large-4 medium-4 small-12">
				<img src="<?php echo base_url() ?>application/resources/user_resources/img/contacts_form.png">
				<h3><a href="">Задать вопрос</a></h3>
			</div>
				</div>
			</div>
		</div>		
	</div>
	<div class="row expanded large-10">
		<div class="column large-5 small-12">
			<h3 class='mt0'>ООО "НеСтенкаКом"</h3>
			<p class="text-bold">Адрес:</p>
			<p>117218, г.Москва, ул.Новочеремушкинская, д.21</p>
			<h3>Время работы:</h3>
			<p>пн.-сб.: 09.00-18.00</p>
		</div>
		<div class="column large-7 small-12 text-right mb130">
			<div id="map" style="width: 100%; height: 400px"></div>
		</div>
	</div>
</section>
