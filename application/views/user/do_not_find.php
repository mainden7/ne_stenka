<style type="text/css">
	.no_answer{
		border: 5px solid #fed536;
	}
	
	.no_answer h2.slideTop{
		margin-top: -35px;
		display: inline-block;
		padding: 0 30px;
		background: #f2f5f8;
	}
	.no_answer a.button{
		padding: 15px 50px;
	}
	.no_answer p.uppercase{
		font-size: 14px;
	}
	.opacity-07{
		opacity: 0.7;
	}
	@media(max-width: 1400px){
		h2.slideTop{
			font-size: 36px;
		}
	}
	@media (max-width: 768px) {
		h2.slideTop{
			font-size: 31px;
		}
	}
	@media (max-width: 480px) {
		h2.slideTop{
			font-size: 24px;
		}
	}
</style>
<div class="row expanded large-12 pt130 pb130" style='background: #f2f5f8'>
	<div class="row large-8 small-12 no_answer">
		<div class="row large-10 text-center">
			<h2 class="uppercase slideTop">Не нашли ответ на вопрос?</h2>
			<p class="text-center mt0 mb50">Расскажите нам о вашем проекте, и наш специалист бесплатно поможет вам выбрать нужные типы и количество блоков с учетом всех ваших потребностей.</p>
			<div class="row large-12 text-left pb50">
				<div class="column large-7 medium-6 small-12">
					<p class="text-bold mb5 uppercase">По телефону:</p>
					<h2 class="tel-title mt0 " style="margin-bottom: 17px;"><?php echo $data['contact_settings']['tel_1'] ?></h2>
					<p class="text-60 mt0">Бесплатный звонок 24/7</p>
				</div>
				<div class="column large-5 medium-6 small-12">
					<p class="uppercase text-bold opacity-07">Через форму:</p>
					<a role="button" aria-label="submit form" href="#" class="button btn-blueLine">Задать вопрос</a>
					<p class="text-60">Подготовим комплексное предложение в течение одного рабочего дня</p>
				</div>
			</div>
		</div>
	</div>
	<h4 class="text-center text-light text-18">В разделе <a href="/user/faq">справка</a> есть все ответы на самые популярыне вопросы</h4>
</div>