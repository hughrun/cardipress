<?php
get_header(); ?>
<main class="archive-grid">
	<?php
	if (have_posts()) :
	   while (have_posts()) :
	      the_post(); ?>
	      <content class="post-content post-index">
	      	<h1><?php the_title(); ?></h1>
	        <?php the_excerpt(); ?>
	      	<?php the_shortlink('Read the whole post...'); ?>
	      </content>
	      <?php
	   endwhile;
	endif;
	?>
</main>
<p class="posts-nav"><?php posts_nav_link( '    ', '<-- newer posts', 'older posts -->' ); ?></p>
<?php get_footer(); ?>