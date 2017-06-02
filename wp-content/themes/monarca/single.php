<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="mt80">
				<div class="container">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

			<div class="text-center">
					<h1 class="section-title"><?php the_title(); ?></h1>
				</div>
				<div class="row pt40 flex-md flex-ac">
					<div class="col-md-6">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="col-md-6">
						<div class="brackets">
							<h2 class="text-center pt40"><?php the_title(); ?></h2>
							
							<div class="py40">
								<?php the_content(); ?>
							</div>
							
							<div class="text-center pb40">
								<a href="<?php echo get_permalink(8); ?>" class="btn">Cotiza este producto</a>
							</div>
						</div>
					</div>
				</div> 

		<?php endwhile;?>

				</div>
			</section>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

	<?php get_template_part('content', 'cta'); ?> 

<?php get_footer(); ?>
