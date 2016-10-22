<style type="text/css">
	.img img.rounded{
		max-width: 150px;
		border-radius: 50%;
	}
	.header-caption h3{
		text-transform: uppercase;

	}
	.header-caption > p > a.email{
		border-bottom: 1px dotted #0078ff;
	}
	
</style>
<section id="testimonials">
	<div class='row expanded large-12 pb80 pt80'  style='background-color: #f0f2f6'>
		<div class="row expanded small-12 medium-12 large-10 large-centered"> 
			<div class="column medium-6 small-centered text-center">
				<h2 class="mb80 block-header mt0">Отзывы наших клиентов</h2>
			</div>
			<div class="row">
			<?php foreach($data['testimonials'] AS $testimonial) { ?>
				<div class="column small-12 medium-4">
					<div class="white_block">
						<div class="img text-center">
							<img class="rounded" src="<?php echo base_url() ?>/application/resources/user_resources/img/<?php echo $testimonial['photo'] ?>" alt="">
						</div>
						<div class="header-caption text-center">
							<h3 class="mb0"><?php echo $testimonial['name'] ?></h3>
							<p class="mt0" style='font-size: 13px'><span class="blin-grey"><?php echo $testimonial['position']; ?></span></p>
							<p style='font-size: 13px'><a class="email"><?php echo $testimonial['email'] ?></a></p>
						</div>
						<div class="description">
							<p><?php echo $testimonial['description'] ?></p>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>