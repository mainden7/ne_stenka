<style type="text/css">
	.blocks_row{
		background: url(<?php echo base_url() ?>/application/resources/user_resources/img/blocks_bg.png) 0 0 no-repeat;
		background-size: 100% 100%;
	}
	ul.block_advantage{
		padding: 0;
	}
	ul.block_advantage > li{
		margin-bottom: 15px;
	}
	ul.block_advantage > li > a{
		margin-left: 5px;
		text-transform: none;
		font-weight: 100;
		color: #dedede;
		text-decoration: none;
		border-bottom: 1px dashed #f2f2f2;
		cursor: pointer;
	}
	.blocks_bg{
		padding-top: 180px;
		position: relative;

	}
	.advantage_description{
		display: none;
		position: absolute;
		top: 26%;
		background: #fff;
		width: 80%;
		padding: 50px;
	}
	.advantage_description i{
		position: absolute;
		top: -25px;
		right: -20px;
		cursor: pointer;
	}
	.advantage_description i:before{
		color: #fed536;
	}
	@media (max-width: 768px) {
		#blocks_advantage h2{
			font-size: 28px;
		}
		.advantage_description{
			padding: 30px;
		}
	}
	@media(max-width: 480px){
		
		.blocks_bg{
			padding-top: 0;
		}
		.blocks_bg img{
			display: none;
		}
		.advantage_description{
			top: -200px;
		}
		
	}
</style>
<section id="blocks_advantage">
	<div class="row blocks_row expanded large-12 pt130 pb80">
		<div class="row large-10 small-12">
			<div class="column large-6 small-12 medium-6">
				<h2 class="uppercase text-white">Преимущества блоков<br> из ячеистого бетона</h2>
				<ul class="block_advantage">
					<li data-target=''><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/1.png" alt=""> <a>Звукоизоляция</a></li>
					<li data-target=''><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/2.png" alt=""> <a>Экологичность</a></li>
					<li data-target=''><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/3.png" alt=""> <a>Высокая прочность</a></li>
					<li data-target=''><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/4.png" alt=""> <a>Простая кладка и обработка</a></li>
					<li data-target=''><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/5.png" alt=""> <a>Экономичность</a></li>
					<li data-target=''><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/6.png" alt=""> <a>Долговечность</a></li>
					<li data-target=''><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/7.png" alt=""> <a>Быстрота монтажа</a></li>
					<li data-target=''><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/8.png" alt=""> <a>Пожаростойкость</a></li>
					<li data-target='waterproof'><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/9.png" alt=""> <a>Влагостойкость</a></li>
					<li data-target=''><img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/10.png" alt=""> <a>Универсальность</a></li>
				</ul>
			</div>
			<div class="column large-6 small-12 medium-6 blocks_bg">
				<img class='hide-for-small' src="<?php echo base_url(); ?>application/resources/user_resources/img/blocks.png">			
				<div class="advantage_description waterproof text-center">
					<i class="fa fa-times-circle fa-3x"></i>
					<img src="<?php echo base_url() ?>application/resources/user_resources/img/icons/9-2.png">
					<h3 class="text-center uppercase">Влагостойкость</h3>
					<p class="text-left">Газобетон не боится воды, так как состоит из водонерастворимого минерала. Его структура обеспечивает быстрое удаление влаги в окружающую среду без изменения физико-технических характеристик материала</p>
				</div>
			</div>
			
		</div>
	</div>
</section>