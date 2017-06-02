<?php
/** This template displays search results, categories and tags archives **/
get_header(); ?>

<?php
	
	// Set current category to null
	$current_cat = null;
	$current_cat_name = null;

	// Assign current category when on category or search templates
	if(is_category() || is_search()) {
		$current_cat = get_the_category();
		if(count($current_cat) > 0 ) {
			$current_cat_name = $current_cat[0]->name;
		}
		
	}
?>

<div id="primary" class="content-area">

	<section class="container pt80">

		<div class="text-center">
			<h1 class="section-title">

				<?php 
				// If category is set, display name
				if($current_cat_name) {
					echo $current_cat_name;
				} else {
					echo 'productos';
				} 
				?>

			</h1>
		</div>

		<div class="row pt40">
			<div class="col-md-9">
				<div class="filters">
					<?php

					// Get array of categories
					$categories = get_categories( array(
						'hide_empty' => true
					) );

					// Get array of tags
					$tags_array = get_tags();

					?>

					<div>
						<?php

						// Display each category as a link
						foreach($categories as $category) {

							// If link matches current category, add active css
							if($current_cat_name == $category->name) {
								echo 	'<a class="btn btn-orange filter-cat" href="' . 
										esc_url(get_category_link($category->term_id)) . '">' . 
										esc_html($category->name) . '</a>';
							} else {
								echo 	'<a class="btn filter-cat" href="' . 
										esc_url(get_category_link($category->term_id)) . '">' . 
										esc_html($category->name) . '</a>';
							}
							
						} ?>
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
				//Initialize count for loop
				$count = 0; ?>
				<main id="main" class="site-main ajax_posts row" role="main">

					<?php if ( have_posts() ) : 
					
					while ( have_posts() ) : the_post(); $count++;
						
						get_template_part('template-parts/content');

						if($count % 3 == 0) {
							echo '<div class="clearfix hidden-xs"></div>';
						}

					endwhile; ?>

					<?php else : ?>
						<div class="col-xs-12">
							<h1>No se encontraron resultados.</h1>
						</div>
					<?php endif; ?>
					
					

				</main>

				<div class="navigation">
					<?php echo paginate_links( array(
						'prev_text' => '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
					    'next_text' => '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
					)); ?>
				</div>
			</div>

			<div id="sidebar" class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</section>

</div>

<?php get_footer(); ?>