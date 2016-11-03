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
		padding: 10px 20px;
	}
	#faq ul li span{		
		border-bottom: 1px dashed #383838;
	}
	#faq ul li:hover{
		cursor: pointer;
	}
	#faq ul li:hover span,
	#faq ul li.active span{		
		border-bottom: 1px dashed transparent;
	}
	#faq ul li.active{
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
		font-size: 36px;
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
					<li class="active" data-show='products'><span>Наша продукция</span></li>
					<li data-show='how_to_order'><span>Как заказать</span></li>
					<li data-show='delivery'><span>Доставка и оплата</span></li>
					<li data-show='documents'><span>Документы</span></li>
				</ul>
				<div id="accordion" class='tab active' data-filter='products'>
					<?php foreach ($data['faq'] as $faq) {
                        if ($faq['category'] == 'Наша продукция') { ?>
                            <h3><?php echo htmlspecialchars_decode($faq['question']) ?> <i class="fa fa-angle-down fa-2x"></i></h3>
                            <div>
                                <p>
                                    <?php echo htmlspecialchars_decode($faq['answer']) ?>
                                </p>
                            </div>
                        <?php }
                    }?>
				</div>
				<div class="tab tab-2" data-filter="how_to_order">
                    <?php foreach ($data['faq'] as $faq) {
                        if ($faq['category'] == 'Как заказать') { ?>
                            <h3><?php echo htmlspecialchars_decode($faq['question']) ?> <i class="fa fa-angle-down fa-2x"></i></h3>
                            <div>
                                <p>
                                    <?php echo htmlspecialchars_decode($faq['answer']) ?>
                                </p>
                            </div>
                        <?php }
                    }?>
				</div>
				<div class="tab tab-3" data-filter="delivery">
                    <?php foreach ($data['faq'] as $faq) {
                        if ($faq['category'] == 'Доставка и оплата') { ?>
                            <h3><?php echo htmlspecialchars_decode($faq['question']) ?> <i class="fa fa-angle-down fa-2x"></i></h3>
                            <div>
                                <p>
                                    <?php echo htmlspecialchars_decode($faq['answer']) ?>
                                </p>
                            </div>
                        <?php }
                    }?>
				</div>
				<div class="tab tab-4" data-filter="documents">
                    <?php foreach ($data['faq'] as $faq) {
                        if ($faq['category'] == 'Документы') { ?>
                            <h3><?php echo htmlspecialchars_decode($faq['question']) ?> <i class="fa fa-angle-down fa-2x"></i></h3>
                            <div>
                                <p>
                                    <?php echo htmlspecialchars_decode($faq['answer']) ?>
                                </p>
                            </div>
                        <?php }
                    }?>
				</div>
			</div>
		</div>
		<div class="row large-8 small-12 no_answer mb130">
			<div class="row large-10 text-center">
				<h2 class="uppercase slideTop">Не нашли ответ на вопрос?</h2>
				<p class="text-center mt0 text-18">Расскажите нам о вашем проекте, и наш специалист бесплатно поможет вам выбрать нужные типы и количество блоков с учетом всех ваших потребностей.</p>
				<div class="row large-12 text-left">
					<div class="column large-7 small-12">
						<p class="text-bold bold mb5 uppercase">По телефону:</p>
						<h2 class="tel-title mt0" style="margin-bottom: 17px;"><?php echo $data['contact_settings']['tel_1'] ?></h2>
						<p class="text-60">Бесплатный звонок 24/7</p>
					</div>
					<div class="column large-5 small-12">
						<p class="text-bold uppercase">Через форму:</p>
						<a role="button" aria-label="submit form" href="#" class="button btn-blueLine">Задать вопрос</a>
						<p class="text-60">Подготовим комплексное предложение в течение одного рабочего дня</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>