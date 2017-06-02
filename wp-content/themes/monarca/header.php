<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="DOOD">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- favicon -->
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url'); ?>/img/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url'); ?>/img/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url'); ?>/img/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url'); ?>/img/mstile-310x310.png" />

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '465625377108628'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=465625377108628&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Google Analytics --> 
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-64215208-36', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- CrazyEgg -->
	<script type="text/javascript">
	setTimeout(function(){var a=document.createElement("script");
	var b=document.getElementsByTagName("script")[0];
	a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0035/8383.js?"+Math.floor(new Date().getTime()/3600000);
	a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
	</script> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- get loading screen -->
<?php get_template_part('template-parts/content', 'loader'); ?>

<div id="page" class="hfeed site">

	<header>
		<div class="info-bar">
			<div class="container">
				<a href="mailto:ventas@aluminiomonarca.mx"><i class="fa fa-envelope-o" aria-hidden="true"></i> ventas@aluminiomonarca.mx</a>
				<a><i class="fa fa-location-arrow" aria-hidden="true"></i> Calle 22 de octubre no.2 Querétaro, Qro.</a>
			</div>
		</div>
		<div class="fixed">
			<div class="search-bar">
				<div class="container flex flex-ac">
					<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
						<input class="search searchTOP" type="text" placeholder="Buscar..." name="s" id="search" value="<?php the_search_query(); ?>">
					</form>
				</div>
			</div>
			<nav>
				<div class="container flex flex-ac">
					<div class="brand">	
						<a href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Aluminios Monarca"> </a>
					</div>
					<button class="hamburger hamburger--squeeze hidden-md hidden-lg" type="button">
  						<span class="hamburger-box">
    					<span class="hamburger-inner"></span>
  						</span>
					</button>
					<?php
						$defaults = array(
							'container' => false,
							'theme_location' => 'primary-menu',
							'menu_class' => 'main-nav'
						);

						wp_nav_menu($defaults);
					?>
					<i class="fa fa-search search-btn" aria-hidden="true"></i>
				</div>
			</nav>
		</div>
	</header>


	<div id="content" class="site-content">
