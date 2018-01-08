<!DOCTYPE html>
<html lang="en">
<head>
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Amaranth:400,700|Dosis:400,700" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/civi-custom.css" rel="stylesheet" type="text/css">

	<!-- cards -->
	<?php if (is_single()) { ?>
	<?php while (have_posts()) : the_post(); ?>
<!-- The above creates a new loop for the HEAD to get the info for this post. -->
	<!-- twitter -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@newcardigan" />
	<meta name="twitter:title" content="<?php the_title(); ?>" />
	<meta name="twitter:description" content="<?php the_excerpt(); ?>" />
	<meta name="twitter:image" content="<?php the_post_thumbnail_url(); ?>" />
	<meta name="twitter:image:alt" content="
	<?php
	$thumb_id = get_post_thumbnail_id(get_the_ID());
	$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
	if(count($alt)) echo $alt; ?>" />
	<!-- open graph (Facebook) -->
	<meta property="og:type" content="article" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:description" content="<?php the_excerpt(); ?>" />
	<meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
	<meta property="og:image:secure_url" content="<?php the_post_thumbnail_url(); ?>" />
	<meta property="og:image:alt" content="
	<?php
	$thumb_id = get_post_thumbnail_id(get_the_ID());
	$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
	if(count($alt)) echo $alt; ?>" />
	<!-- Don't forget to close off and rewind the loop so we don't render the wrong post in BODY. -->
	<?php endwhile; ?>
	<?php rewind_posts(); ?>
	<?php } ?>

	<!-- use wp_head to load scripts and styles -->
	<?php	wp_head(); ?>

</head> <!-- #head -->
<body>
	<header class="header">
		<div class="nc-header">
			<a href="/"><h1 class="new-cardigan"><span class="pink">new</span>Cardigan</h1></a>
		</div> <!-- newCardigan header -->
		<div class="cardi-desc">
		<p>A professional network for people who work in or with Galleries, Libraries, Archives and Museums.
			<a href="/join">Join us.</a>
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