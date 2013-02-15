<?php get_header(); ?>

	<div class="page_wrap">
	<br>
	<div class="full_width floatleft">
	<div class="post_header_container"><h1>Archives</h1></div>

	<?php if (have_posts()) : ?>

		<center><h2>Search Results</h2></center>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<?php /*the_title();*/ ?></a>
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

	</div>
	</div>

<?php get_footer(); ?>