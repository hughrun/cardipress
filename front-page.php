<?php
/**
 * The template for displaying custom front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page.php
 *
 * @package CardiPress
 */

get_header(); ?>
<main class="grid">
	<div class="project-title" id="parties">cardiParties</div>
	<div class="nc-content-box melb-party">
		<content class="project-desc">
			<p>Hear from an interesting GLAM speaker, then enjoy a couple of drinks at a local bar with fellow GLAM nerds.</p>
			<p>Cardigans. Cocktails. Shoptalk.</p>
			<div>
				<p>We hold a cardiParty in Melbourne on the second Friday or following Saturday of every month.</p>
			</div>
		</content>
	</div>
<?php
	// Find cardi parties in Melbourne
	$args1a = array(
		'post_type' => 'post',
		'posts_per_page' => '1',
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'post_tag',
				'field' => 'slug',
				'terms' => array('melbourne')
			),
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array('cardiparties')
			)
		)
	);

	$cardicast_cat = new WP_Query($args1a);

	if($cardicast_cat->have_posts()) :
		while($cardicast_cat->have_posts()) : $cardicast_cat->the_post(); ?>
			<div class="post-img melb-img">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full') ?></a>
			</div>
		<?php endwhile; ?>

	<?php else : ?>
		<div class="post-img melb-img">No Melbourne cardiParties available 😟</div>
	<?php endif;
wp_reset_postdata();
?>

	<div class="nc-content-box perth-party">
		<content class="project-desc">
			<p>Love sunsets over sea? Perpetually 2 to 3 hours behind? You'll love our cardiParties in Perth.</p>
		</content>
	</div>

<?php
	// Find cardi parties in Perth
	$args1b = array(
		'post_type' => 'post',
		'posts_per_page' => '1',
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'post_tag',
				'field' => 'slug',
				'terms' => array('perth')
			),
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array('cardiparties')
			)
		)
	);

	$cardicast_cat = new WP_Query($args1b);

	if($cardicast_cat->have_posts()) :
		while($cardicast_cat->have_posts()) : $cardicast_cat->the_post(); ?>
			<div class="post-img perth-img">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full') ?></a>
			</div>
		<?php endwhile; ?>

	<?php else : ?>
			<div class="post-img perth-img">
				<img src="<?php bloginfo('template_directory'); ?>/img/perth-coming-soon.jpg"/>
			</div>
	<?php endif;
	wp_reset_postdata();
	?>

	<div class="project-title" id="cardicast">cardiCast</div>

	<div class="nc-content-box cardicast-content">
		<content class="project-desc">
			<p>cardiCast is a GLAM podcast published every fortnight. Hear a recording of a previous cardiParty, or interviews with interesting GLAM people from around Australia and the world.</p>
		</content>
	</div>

	<?php
		// Find the latest two podcast episodes (posts with category 'cardicast')
		$args2 = array(
			'category_name' => 'cardicast',
			'posts_per_page' => '2'
		);
		$cardicast_cat = new WP_Query($args2);

		if($cardicast_cat->have_posts()) :
			while($cardicast_cat->have_posts()) : $cardicast_cat->the_post(); ?>
				<div class="post-img cardicast-img">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full') ?></a>
				</div>
				<?php endwhile; ?>
		<?php else : ?>
			<div class="nc-content-box cardicast">No cardiCasts available 😟</div>
		<?php endif;
	wp_reset_postdata();
	?>

	<div class="project-title" id="blogclub">GLAM Blog Club</div>
	<div class="nc-content-box blogclub-content">
		<content class="project-desc">
			<p>On the first day of each month we announce the new topic for GLAM Blog Club. Join in by simply writing a blog post somehow related to the topic, and giving it a tag of 'GLAM Blog Club'. Make your blog easy to find by <a href="https://glamblogs.newcardigan.org/registerblog">registering with Aus GLAM Blogs</a>, and using the hashtag <a href="https://twitter.com/search?q=%23glamblogclub">#glamblogclub</a> on social media.</p>
		</content>
	</div>

	<?php
		// Find the latest two blogclub posts (posts with category 'blogclub')
		$args3 = array(
			'category_name' => 'blogclub',
			'posts_per_page' => '2'
		);

		$blogs = new WP_Query($args3);

		if($blogs->have_posts()) :
			while($blogs->have_posts()) : $blogs->the_post(); ?>
				<div class="post-img blogclub-img">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full') ?></a>
				</div>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="nc-content-box blogclub-content">No GLAM Blog Club posts available 😟</div>
		<?php endif;
	wp_reset_postdata();
	?>

	<div class="project-title" id="news">cardiNews</div>

	<div class="nc-content-box news-content">
		<content class="project-desc">
			<p>Check out the latest announcements from newCardigan.</p>
		</content>
	</div>

	<?php
		// Find the latest two news items (posts with category 'announcements')
		$args4 = array(
			'category_name' => 'news',
			'posts_per_page' => '2'
		);

		$news = new WP_Query($args4);

		if($news->have_posts()) :
			while($news->have_posts()) : $news->the_post(); ?>
				<div class="post-img news-img">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full') ?></a>
				</div>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="post-img news-img">No News 😟</div>
		<?php endif;
	wp_reset_postdata();
	?>

</main>
	<?php get_footer(); ?>
