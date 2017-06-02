	<section>
		<div class="slider">	
			<?php
				// Get the slider images
				$image1 = get_field('slider_image_1');
				$image2 = get_field('slider_image_2');
				$image3 = get_field('slider_image_3');
			?>

			<?php if(!empty($image1)) : ?>
			<img class="img-responsive" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
			<?php endif; ?>

			<?php if(!empty($image2)) : ?>
			<img class="img-responsive" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
			<?php endif; ?>

			<?php if(!empty($image3)) : ?>
			<img class="img-responsive" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>">
			<?php endif; ?>
			
			
		</div>     
	</section>

	<section class="container pt30">
		<div class="row flex-md">
			<div class="col-md-6 info-block-container">
				<div class="info-block info-block1 filter text-center bg-cover flex flex-ac flex-jc">
					<div>
						<h1>Catálogo 2016</h1>
						<a class="btn btn-white" id="download1" href="Monarca_catalogo.pdf" target="_blank">Descargar</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 info-block-container">
				<div class="info-block info-block2 filter text-center bg-cover flex flex-ac flex-jc">
					<div>
						<h1>Los mejores materiales de la industria</h1>
						<a href="<?php echo get_page_link(12); ?>" class="btn btn-white">Conócenos</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 info-block-container">
				<div class="info-block info-block3 filter text-center bg-cover flex flex-ac flex-jc">
					<div>
						<h1>¡Cotiza tu pedido ahora!</h1>
						<a href="<?php echo get_page_link(8); ?>" class="btn btn-white">Contáctanos</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container pt80">
		<div class="text-center pb40">
			<h1 class="section-title">Favoritos</h1>
		</div>
		<div class="row">
			<?php
				$args = array(
					'posts_per_page' => 8,
					'post_type' => 'producto'
				);
				$query = new WP_Query($args);
				$count = 0;
			?>

			<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $count ++ ?>
			<div class="col-sm-6 col-md-3 product">
				<?php the_post_thumbnail(); ?>
				<h2 class="producttitle"><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<a href="<?php the_permalink(); ?>" class="btn">Ver producto</a>
			</div>

			<?php if($count % 2 == 0) : ?>
				<div class="clearfix visible-sm"></div>
			<?php endif; ?>

			<?php if($count % 4 == 0) : ?>
				<div class="clearfix hidden-xs hidden-sm"></div>
			<?php endif; ?>

			<?php endwhile; endif; wp_reset_postdata(); ?>

		</div>
		<div class="text-center pt80">
			<a href="<?php echo get_page_link(10); ?>" class="btn btn-CTA btn-orange">Ver más</a>
		</div>
	</section>

	<section class="cta mt80 ctaimg">
		<div class="container text-center">
			<h1 class="pb40">¡Cotiza tu pedido ahora!</h1>
			<a href="<?php echo get_page_link(8); ?>" class="btn">Contáctanos</a>
		</div>
	</section>