<?php
get_header(); ?>
<main class="grid">
	<?php
	if (have_posts()) :
	   while (have_posts()) :
	      the_post(); ?>
	      <content class="post-content post-index">
	      	<h1><?php the_title(); ?></h1>
	        <?php the_excerpt(); ?>
	      	<?php the_shortlink('Read more...'); ?>
	      </content>
	      <?php
	   endwhile;
	endif;
	?>
</main>
<?php get_footer(); ?>