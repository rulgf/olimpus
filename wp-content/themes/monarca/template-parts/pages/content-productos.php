<?php
/** This template displays the product catalogue **/ ?>
<div id="primary" class="content-area">

	<section class="container pt80">

		<div class="text-center">
			<h1 class="section-title">Productos</h1>
		</div>

		<div class="row pt40">
			<div class="col-md-9">
				<div class="filters">
					<?php
					// Get the categories array
					$categories = get_categories( array(
						'hide_empty' => true
					) );

					// Get the tags array
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
							// Display each tag as an optiion
							foreach($tags_array as $tag) {
								$tag_id = $tag->term_id;
								echo '<option value="' . $tag->slug . '">' . $tag->name . '</option>';
							} 
							?>
						</select>
					</div>
				</div>

				<main id="main" class="site-main ajax_posts row" role="main">
					<?php 
						// set up or arguments for our custom query
						  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
						  $query_args = array(
						    'post_type' => 'producto',
						    'posts_per_page' => 15,
						    'paged' => $paged
						  );
						  // create a new instance of WP_Query
						  $the_query = new WP_Query( $query_args );

						  $count = 0;
					?>

					<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $count++;

						get_template_part('template-parts/content');


						if($count % 3 == 0) {
							echo '<div class="clearfix hidden-xs"></div>';
						}

					endwhile; ?>



					<?php endif; ?>
					
					

				</main>

				<div class="navigation">
					<?php 
					// Create navigation for custom query
					$big = 999999999; // need an unlikely integer
					 echo paginate_links( array(
					    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
					    'format' => '?paged=%#%',
					    'current' => max( 1, get_query_var('paged') ),
					    'total' => $the_query->max_num_pages,
					    'prev_text' => '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
					    'next_text' => '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
					) );
					?>
				</div>
			</div>

			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</section>

</div>