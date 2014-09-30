<?php
/*
 Template Name: Home Archive Page
*/
?>

<?php get_header(); ?> 

<div id="content">  
  
<?php global $more;  
$more = 0; ?>  
  
<?php  
  
/* ID of your 'Breaking News' Category */  
$breaking_cat = "9";   
  
/* How many posts from above category to display? Default = 3 */  
$breaking_num = "1";   
  
/* Number of recent posts to display under the Breaking News */  
$latest_num = "10";  
   
/* IDs of any cats you dont want to include in Recent posts. 
Start each ID with a 'minus' symbol Seperate by a comma. 
EG: $latest_ignore = "7,-6,-8,-1"; 
Posts from the 'Breaking' category are automatically excluded. */  
$latest_ignore = "-1";

$recent_num = "2";
$recent_ignore= "-1";
?>

<?php try { ?>
  
    <!-- Show x Posts from Breaking News -->  
    <?php query_posts('showposts='.$breaking_num.'&cat='.$breaking_cat.'');   
      while (have_posts()) : the_post();  
    ?>
    
    
<h2 class="featured_header floatleft">Featured story</h2>
  
    <div class="breaking">
	<?php
		$ids = array();
		array_push($ids,$post->ID)
	?>
	<span class="postimg"><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?></span>


	<div class="main_post_content">
	
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<div class="main_blog_excerpt"><?php the_excerpt('Continue...'); ?></div>
		
		<div class="postmeta"></div><!--/postmeta-->
		
	</div>
	
    </div><!--/breaking-->

    <?php endwhile; ?>
    
    
<!-- Show x Recent Posts --> 
<div class="fh_container">
	<h3 class="featured_header_sub">Most Recent</h3>
</div>
 
<?php
	$query['showposts'] = $recent_num;
	$query['cat'] = $breaking_cat.','.$latest_ignore;
	$query['post__not_in'] = $ids;
	
	query_posts($query);
?>  
<?php while (have_posts()) : the_post(); ?>
	
	<div class="recent_large">
	
	<span class="postimg"><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?></span>
	  
	    <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>  
	    <p class="datetime"><?php the_time('l, F j, Y'); ?></p>   
	  
	</div>
	
	<?php array_push($ids,$post->ID); ?>
	
<?php endwhile; ?>

 
 
<!-- Show x Latest Posts --> 
<div class="fh_container"> 
	<h4 class="featured_header_sub floatleft">Recent Posts By Title</h4>
</div>

<div class="by_title">
  
	<!-- By Title - Econauts -->
	<?php
		$args=array(
		  'cat' => 10,
		  'showposts' => 1,
		  'caller_get_posts' => 1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  
			<div class="recent">
		  
			  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				  <div class="by_title_container_econauts"></div>
			  </a>
			  
			  <div class="by_title_latest_post">
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>  
				<p class="datetime"><?php the_time('l, F j, Y'); ?></p>
			  </div>
		  
			</div>
		
		   <?php
		  endwhile;
		} //if ($my_query)
	  wp_reset_query();  // Restore global post data stomped by the_post().
	?><!-- End By Title - Econauts -->

	
	<!-- By Title - Progenitor -->
	<?php
		$args=array(
		  'cat' => 11,
		  'showposts' => 1,
		  'caller_get_posts' => 1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  
			<div class="recent">
		  
			  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<div class="by_title_container_progenitor"></div>
			  </a>
			  
			  <div class="by_title_latest_post">
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>  
				<p class="datetime"><?php the_time('l, F j, Y'); ?></p>
			  </div>
		  
			</div>
		
		   <?php
		  endwhile;
		} //if ($my_query)
	  wp_reset_query();  // Restore global post data stomped by the_post().
	?><!-- End By Title - Progenitor -->
	
	
	<!-- By Title - Oztoc -->
	<?php
		$args=array(
		  'cat' => 12,
		  'showposts' => 1,
		  'caller_get_posts' => 1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  
			<div class="recent">
		  
			  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<div class="by_title_container_oztoc"></div>
			  </a>
			  
			  <div class="by_title_latest_post">
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>  
				<p class="datetime"><?php the_time('l, F j, Y'); ?></p>
			  </div>
		  
			</div>
		
		   <?php
		  endwhile;
		} //if ($my_query)
	  wp_reset_query();  // Restore global post data stomped by the_post().
	?><!-- End By Title - Oztoc -->
	
	
	<!-- By Title - Crystals -->
	<?php
		$args=array(
		  'cat' => 13,
		  'showposts' => 1,
		  'caller_get_posts' => 1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  
			<div class="recent">
		  
			  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<div class="by_title_container_crystals"></div>
			  </a>
			  
			  <div class="by_title_latest_post">
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>  
				<p class="datetime"><?php the_time('l, F j, Y'); ?></p>
			  </div>
		  
			</div>
		
		   <?php
		  endwhile;
		} //if ($my_query)
	  wp_reset_query();  // Restore global post data stomped by the_post().
	?><!-- End By Title - Crystals -->
	
	
	
	<!-- By Title - Fair Play -->
	<?php
		$args=array(
		  'cat' => 15,
		  'showposts' => 1,
		  'caller_get_posts' => 1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  
			<div class="recent">
		  
			  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<div class="by_title_container_fair_play"></div>
			  </a>
			  
			  <div class="by_title_latest_post">
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>  
				<p class="datetime"><?php the_time('l, F j, Y'); ?></p>
			  </div>
		  
			</div>
		
		   <?php
		  endwhile;
		} //if ($my_query)
	  wp_reset_query();  // Restore global post data stomped by the_post().
	?><!-- End By Title - Fair Play -->
	
	
	<!-- By Title - Anatomy Browser -->
	<?php
		$args=array(
		  'cat' => 16,
		  'showposts' => 1,
		  'caller_get_posts' => 1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  
			<div class="recent">
		  
			  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<div class="by_title_container_anatomy_browser"></div>
			  </a>
			  
			  <div class="by_title_latest_post">
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>  
				<p class="datetime"><?php the_time('l, F j, Y'); ?></p>
			  </div>
		  
			</div>
		
		   <?php
		  endwhile;
		} //if ($my_query)
	  wp_reset_query();  // Restore global post data stomped by the_post().
	?><!-- End By Title - Anatomy Browser -->
	
	
	<!-- By Title - Virulent -->
	<?php
		$args=array(
		  'cat' => 17,
		  'showposts' => 1,
		  'caller_get_posts' => 1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  
			<div class="recent">
		  
			  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<div class="by_title_container_virulent"></div>
			  </a>
			  
			  <div class="by_title_latest_post">
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>  
				<p class="datetime"><?php the_time('l, F j, Y'); ?></p>
			  </div>
		  
			</div>
		
		   <?php
		  endwhile;
		} //if ($my_query)
	  wp_reset_query();  // Restore global post data stomped by the_post().
	?><!-- End By Title - Virulent -->
	
	
	<!-- By Title - Citizen Science -->
	<?php
		$args=array(
		  'cat' => 18,
		  'showposts' => 1,
		  'caller_get_posts' => 1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  
			<div class="recent">
		  
			  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<div class="by_title_container_citizen_science"></div>
			  </a>
			  
			  <div class="by_title_latest_post">
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>  
				<p class="datetime"><?php the_time('l, F j, Y'); ?></p>
			  </div>
		  
			</div>
		
		   <?php
		  endwhile;
		} //if ($my_query)
	  wp_reset_query();  // Restore global post data stomped by the_post().
	?><!-- End By Title - Citizen Science -->
	
	
  
</div><!-- End By Title Column -->

<div class="sidebar_container">
  <?php get_sidebar(); ?>
</div>


</div><!--/content-->


<?php get_footer(); ?> 

<?php } catch (Exception $ex) { echo $ex; } ?>
