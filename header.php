<head>
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Amaranth:400,700|Dosis:400,700" rel="stylesheet">
	<!-- use wp_head to load scripts and styles -->
	<?php	wp_head(); ?>
</head> <!-- #head -->

<header class="header">
	<div class="nc-header">
		<a href="/"><h1 class="new-cardigan"><span class="pink">new</span>Cardigan</h1></a>
	</div> <!-- newCardigan header -->
	<div class="cardi-desc">
	<p>A professional network for people who work in or with Galleries, Libraries, Archives and Museums.
		<!-- <a href="/join">Join us.</a> -->
	</p>
	</div>
	<nav id="site-navigation" class="main-navigation">
		<!-- button here we can use with some JS -->
		<button class="menu-toggle"><?php esc_html_e( 'Menu', 'cardipress' ); ?></button>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->