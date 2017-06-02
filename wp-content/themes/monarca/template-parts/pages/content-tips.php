<section class="container-fluid">
	<div class="row flex-md">
		<div class="col-md-5">
			<div class="px30 py80 text-center">
				<div class="text-center">
					<h1 class="section-title">Mantenimiento</h1>
				</div>
				<p class="text-justify pt40 pb40">
					Al ser utilizados los productos por primera vez es necesario lavarlos perfectamente con agua caliente y jabón, posteriormente ponerlos a hervir durante 10 o 15 minutos con agua y unas gotas de limón o vinagre por cada litro de agua.<br><br> 

					Para cocinar es recomendable hacerlo con la tapa de la olla puesta ya que así se podrá ahorrar cerca de un cuarto de gas.

				</p>
				<a href="<?php echo get_page_link(8); ?>" class="btn btn-orange">Contáctanos</a>
			</div>
		</div>
		<div class="col-md-7 bg-cover mantenimiento-img img-arrow-right hidden-xs hidden-sm"></div>
	</div>
</section>

<?php get_template_part('content', 'consejos'); ?>

<section class="py80">
	<div class="text-center">
		<h1 class="section-title">Usos</h1>
	</div>
			<?php  
				$args=array(
					"post_type" => "uso"
				);
				$query= new WP_Query($args);
				$count = 0;
			?>

	<div class="container">
		<div class="row pt40 usos">
			<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $count ++; ?>
				<div class="col-sm-6 col-md-4 pb20">
				<div class="box box3 bg-cover"></div>
					<?php the_post_thumbnail(); ?>
					<h3 class="text-center"><?php the_title(); ?></h3>
					<p class="text-center">
						<?php the_content(); ?>
					</p>
				</div>
				<?php if($count % 2 == 0): ?>
					<div class="clearfix visible-sm">
					</div>
				<?php endif; ?>
				<?php if($count % 3 == 0): ?>
					<div class="clearfix hidden-xs hidden-sm">
					</div>
				<?php endif; ?>
					
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<section class="cta ctaimg">
	<div class="container text-center">
		<h1 class="pb40">¡Cotiza tu pedido ahora!</h1>
		<a href="<?php echo get_page_link(8); ?>" class="btn">Contáctanos</a>
	</div>
</section>