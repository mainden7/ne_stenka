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
		margin-left: 15px;
	}
	#faq ul li{
		font-size: 14px;
		font-weight: bold;
		padding: 10px 10px;
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
@media (max-width: 480px) {
	#faq ul li{
		display: block;
		margin-left: 0 !important;
	}
	#faq ul li:after{
		display: none;

	}
}

</style>
<section id='faq' style='background-color: #f0f2f6'>
	<div class="row frontSlide expanded large-12" style='background-color: #f0f2f6'>
		<div class="row large-6 medium-10 small-12 pt80">
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
	</div>
</section>