<section class="container pt80">
	<div class="text-center">
		<h1 class="section-title">Consejos</h1>
	</div>

	<?php  
		$args=array(
			"post_type" => "consejo"
		);
		$query= new WP_Query($args);
		$count = 0;
	?>

	<div class="pt40 card-slider">

	<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $count ++; ?>
		
		<div class="col-sm-6">
			<?php the_post_thumbnail(); ?>
		</div>
	
		
	<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</section>