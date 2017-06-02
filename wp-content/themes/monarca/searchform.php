<form id="searchform" class="search-sidebar flex mb30" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input class="search searchfield" type="text" placeholder="Buscar..." name="s" id="search" value="<?php the_search_query(); ?>">
	<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>