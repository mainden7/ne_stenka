<style>
	i.fa-chevron-circle-right:before,
	i.fa-chevron-circle-left:before{
		color: #0078ff;
	}
	i.fa-chevron-circle-right:hover,
	i.fa-chevron-circle-left:hover{
		cursor: pointer;
	}
	.project_item{
		position: absolute;
		display: none;
	}
	.project_item.active{
		position: relative;
		display: block;
	}
	#our_projects h2{
		font-size: 44px;
	}
	#our_projects h5{
		font-size: 18px;
		font-weight: 300;
	}
	#our_projects h3{
		font-size: 24px;
		font-family: 'Open Sans', sans-serif;
	}
	#our_projects p{
		font-size: 16px;
		font-weight: 100;
	}
</style>
<section id="our_projects" style='background: #f0f2f6'>
	<div class="row expanded large-12">
		<div class="row large-10 small-12 mb130">
			<h2 class="text-center uppercase mt80 mb0">Объекты</h2>
			<h5 class="text-center mb80">Некоторые обьекты построенные, с применением наших блоков</h5>
			<div class="row large-12" id="projects">
				
				<?php
				$count = count($data['projects']);
				for($i = 1; $i <= $count; $i++) {
						$j = $i;
					?>
					<div class="row large-12 project_item <?php echo $i == 1 ? 'active' : '' ?>" data-number='<?php echo $i; ?>'>
						<div class="column small-12 large-5 medium-6">
							<div class="row large-12 controls mb50">
								<i class="fa fa-2x fa-chevron-circle-left prev" data-count='<?php echo $i == 1 ? 1 : $i - 1; ?>'></i><span style='margin-left: 5px'> <?php echo $i ?></span> из <span class="ltl" style='margin-right: 5px'><?php echo $count ?> </span><i class="fa fa-2x fa-chevron-circle-right next" data-count='<?php echo $i == $count ? $count : $i + 1; ?>'></i>
							</div>
							<div class="row large-12 text-caption">
								<h3><?php echo $data['projects'][$i-1]['name'] ?></h3>
								<p class="mb80"><?php echo $data['projects'][$i-1]['description'] ?></p>
								<a href="" class='dashed'>Читать отзыв клиента</a>
							</div>				
						</div>
						<div class="column small-12 large-7 medium-6 text-right">
							<img src="<?php echo base_url() ?>application/resources/user_resources/img/block.png">
						</div>
					</div>
					<?php } ?>
					<input type='hidden' id='count' value="<?php echo $j ?>">
				</div>
			</div>
		</div>
	</section>