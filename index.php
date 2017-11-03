<?php
get_header(); ?>
<main class="grid">
	<?php
	if (have_posts()) :
	   while (have_posts()) :
	      the_post(); ?>
	      <content class="post-content">
	         <?php the_content(); ?>
	      </content>
	      <?php
	   endwhile;
	endif;
	?>
</main>
<?php get_footer(); ?>