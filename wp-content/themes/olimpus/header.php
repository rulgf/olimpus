<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Raul Garcia">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- favicon
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
	 -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- get loading screen 
<?php get_template_part('template-parts/content', 'loader'); ?>
-->

<div id="page" class="hfeed site flex-container">

	<header>
		<!--Top navigation bar-->
		<div class="topnav" id="myTopnav">
		  	<a href="#home">Log In</a>
		  	<a href="#news">Reporte de Ausencias</a>
		  	<a class="right" href="#contact">¿Tienes duda?</a>
		  	<a class="right" href="#about">Sucursales</a>
		  	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsive_top()">&#9776;</a>
		</div>

		<!--Social menu-->

		<div class="social_menu">
			<img class="social_back" src="<?php bloginfo('template_url'); ?>/img/Olimpus_W_1_3.png"/>
			<img class="social_img" src="<?php bloginfo('template_url'); ?>/img/web/DSC_5968.jpg"/>
			<div class="social_icons">
				<h2 class="social_element_left"><h2/>
				<h2 class="social_element_left"><h2/>
				<h2 class="social_element_left"><h2/>
				<h2 class="social_element_left"><h2/>
			</div>
		</div>

		<!--Navigation Menu-->
		<div class="navmenu">
			<div id="menu_border" class="menu_border"></div>
			<div id="tab1" class="tab1">
				<img src="<?php bloginfo('template_url'); ?>/img/Olimpus_I_G1.png"/>
				<a id="link1" href="#experiencia">Quiénes <br/>Somos</a>
			</div>
			<div id="tab2" class="tab2">
				<img src="<?php bloginfo('template_url'); ?>/img/Olimpus_I_G2.png"/>
				<a id="link2" href="#instalaciones">Instalaciones</a>
			</div>
			<div id="tab3" class="tab3">
				<img src="<?php bloginfo('template_url'); ?>/img/Olimpus_I_G3.png"/>
				<a id="link3" href="#programas">Programas y <br/>Clases</a>
			</div>
			<div id="tab4" class="tab4">
				<img src="<?php bloginfo('template_url'); ?>/img/Olimpus_I_G4.png"/>
				<a id="link4" href="#home">Preguntas <br/>Frecuentes</a>
			</div>
			<div id="tab5" class="tab5">
				<img src="<?php bloginfo('template_url'); ?>/img/Olimpus_I_G5.png"/>
				<a id="link5" href="#blog">Blog y <br/>Noticias</a>
			</div>
		</div>

	</header>


	<div id="content" class="site-content">