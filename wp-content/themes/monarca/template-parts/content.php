<div class="col-sm-4 product">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_post_thumbnail(); ?>
		<h2 class="producttitle"><?php the_title(); ?></h2>
		<p class="text-justify">
			<?php the_content(); ?>
		</p>
		<a href="<?php the_permalink(); ?>" class="btn"> Ver producto </a>
	</article>
</div>