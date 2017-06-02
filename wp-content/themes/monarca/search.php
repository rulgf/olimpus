<?php
/** This template displays products and search results
*/
get_header(); ?>

<div id="primary" class="content-area">

	<section class="container pt80">

		<div class="text-center">
			<h1 class="section-title">Productos</h1>
		</div>

		<div class="row pt40">
			<div class="col-md-9">
				<div class="filters">
					<?php
					// Get categoires array
					$categories = get_categories( array(
						'hide_empty' => true
					) );

					// Get tags array
					$tags_array = get_tags();
					
					?>

					<div>
						<?php 
						// Display each category as a link
						foreach($categories as $category) {
							echo 	'<a class="btn filter-cat" href="' . 
							esc_url(get_category_link($category->term_id)) . '">' . 
							esc_html($category->name) . '</a>';
						} 
						?>
					</div>

					<div id="aluminio-filter">
						<select name="filter-dropdown" class="form-control">
							<option value="">Tipo de aluminio</option>
							<?php 
							// Display each tag as an option
							foreach($tags_array as $tag) {
								$tag_id = $tag->term_id;
								echo '<option value="' . $tag->slug . '">' . $tag->name . '</option>';
							} 
							?>
						</select>
					</div>

				</div>

				<?php 
				// Initialize count for loop
				$count = 0; ?>

				<main id="main" class="site-main row" role="main">

					<?php if ( have_posts() ) : 
					
					while ( have_posts() ) : the_post(); $count++;
						
						get_template_part('template-parts/content');

						if($count % 3 == 0) {
							echo '<div class="clearfix hidden-xs"></div>';
						}

					endwhile; ?>



					<?php endif; ?>
					
					

				</main>

				<div class="navigation">
					<?php echo paginate_links(array(
						'prev_text' => '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
					    'next_text' => '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
					) ); ?>
				</div>
			</div>

			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</section>

</div>

<?php get_footer(); ?>