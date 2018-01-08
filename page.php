<?php get_header(); ?>

<article class="grid">
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
		?>
		<content class="post-content">
			<?php
				if ( has_post_thumbnail() ) :
					echo'<div class="post-header" style="background-image: url(';
					the_post_thumbnail_url('full');
					echo ' )">';
			?>
			</div>
		<?php endif; ?>
			<div class="meta">
			<h1><?php the_title(); ?></h1>
			</div>
    <?php
    the_content();

		// End the loop.
		endwhile;
		?>

	</content>
</article>

<?php get_footer(); ?>