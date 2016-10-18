<style type="text/css">
	#faq .tab{
		display: none;
	}
	#faq .tab.active{
		display: block;
	}
	#faq ul{
		margin-bottom: 50px;
	}
	#faq ul li:not(:first-child){
		margin-left: 30px;
	}
	#faq ul li{
		font-size: 14px;
		font-weight: bold;
		border-bottom: 1px dashed #383838;

	}
	#faq ul li:hover{
		cursor: pointer;
		border-bottom: 2px solid #fed536;
	}
	#faq ul li.active{
		border-bottom: none;
		padding: 10px 20px;
		background: #fed536;		
		position: relative;
	}
	#faq ul li.active:after{
		content: '';
		height: 0;
		border-style: solid;
		border-width: 10px 10px 0 10px;
		border-color: #fed536 transparent transparent transparent;
		position: absolute;
		bottom: -10px;
		right: 43%;
	}
	#accordion h3,
	#accordion div{
		background: #fff;
		padding-left: 30px;
		padding-right: 30px;
	}
	#accordion div{
		padding-bottom: 30px;
	}
	#accordion h3{
		position: relative;
		padding-top: 20px;
		padding-bottom: 20px;
		margin-bottom: 0;
	}
	#accordion h3:hover{
		cursor: pointer;
		color: #0078ff;
	}
	#accordion p{
		margin: 0;
	}
	#accordion h3 > i{
		position: absolute;
		top: 22%;
		right: 30px;
	}
	.ui-state-focus { outline: none; }
	.no_answer{
		    border: 5px solid #fed536;
	}
	
	.no_answer h2.slideTop{
		    margin-top: -35px;
    display: inline-block;
    padding: 0 30px;
    background: #f0f2f6;
	}
	.no_answer a.button{
		padding: 15px 50px;
	}
	.no_answer p.uppercase{
		font-size: 14px;
	}
</style>
<section id='faq' style='background-color: #f0f2f6'>
	<div class="row frontSlide expanded large-12" style='background-color: #f0f2f6'>
		<div class="row large-6 medium-8 small-12 pt80 mb130">
			<div class="column large-12 medium-12 small-12">
				<h1 class="uppercase text-center">Справка</h1>
				<ul class="inline text-center">
					<li class="active" data-show='products'>Наша продукция</li>
					<li data-show='how_to_order'>Как заказать</li>
					<li data-show='delivery'>Доставка и оплата</li>
					<li data-show='documents'>Документы</li>
				</ul>
				<div id="accordion" class='tab active' data-filter='products'>
					<h3>Где производятся ваши блоки? <i class="fa fa-angle-down fa-2x"></i></h3>
					<div>
						<p>
							Вся продукция, которую мы продаем, выпускается в Республике Беларусь на заводе ЗАО"Могилевский КСИ", за исключением блоков, имеющих длину 599 мм, которые производятся на заводе "Газоселикатстрой" г. Могилев,  Республика Беларусь.
						</p>
					</div>
					<h3>Какую продукцию вы продаете? <i class="fa fa-angle-down fa-2x"></i></h3>
					<div>
						<p>
							Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
							purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
							velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
							suscipit faucibus urna.
						</p>
					</div>
					<h3>Помогите расчитать нужынй объем блоков на мою стройку? <i class="fa fa-angle-down fa-2x"></i></h3>
					<div>
						<p>
							Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
							Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
							ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
							lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
						</p>						
					</div>
					<h3>Чем отличаются блоки 1-й категории от блоков 2-й категории? <i class="fa fa-angle-down fa-2x"></i></h3>
					<div>
						<p>
							Cras dictum. Pellentesque habitant morbi tristique senectus et netus
							et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
							faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
							mauris vel est.
						</p>
					</div>
				</div>
				<div class="tab tab-2" data-filter="how_to_order">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="tab tab-3" data-filter="delivery">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="tab tab-4" data-filter="documents">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
		<div class="row large-7 small-12 no_answer mb130">
			<div class="row large-10 text-center">
				<h2 class="uppercase slideTop">Не нашли ответ на вопрос?</h2>
				<p class="text-center mt0">Расскажите нам о вашем проекте, и наш специалист бесплатно поможет вам выбрать нужные типы и количество блоков с учетом всех ваших потребностей.</p>
				<div class="row large-12 text-left">
					<div class="column large-7 small-12">
						<p class="text-bold mb5 uppercase">По телефону:</p>
						<h2 class="tel-title mt0">8 800 998-32-33</h2>
						<p><small>Бесплатный звонок 24/7</small></p>
					</div>
					<div class="column large-5 small-12">
						<p class="text-light uppercase">Через форму:</p>
						<a role="button" aria-label="submit form" href="#" class="button btn-blueLine">Задать вопрос</a>
						<p>Подготовим комплексное предложение в течение одного рабочего дня</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>