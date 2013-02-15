<?php get_header(); ?>

<br />
	
<div class="full_width floatleft">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
	
				<center><?php the_post_thumbnail('full');?></center>

				<div class="post_header_container">
					<h1><?php the_title(); ?></h1>
				</div>				
				<div class="entry">
	
					<?php the_content(); ?>
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
	
					<?php comments_template(); ?> 

				</div>
	
			</div>
	
			<?php endwhile; endif; ?>
</div>

<br><br>
<?php get_footer(); ?>