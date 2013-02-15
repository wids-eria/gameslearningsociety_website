<?php
/*
 Template Name: Home Page Template
*/
?>

<?php get_header(); ?>


<div class="slider_container">

	<?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '23' ); ?>
</div>



<!-- If there is nothing for here, comment out. -->
		<?php $my_query = new WP_Query('category_name=event&showposts=1'); ?>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<div class="full_width floatleft">
			<a href="<?php the_permalink() ?>" rel="bookmark">
			
			<div class="home_page_banner_container">
				<div class="floatleft banner_image_z"> <?php the_post_thumbnail('large');?> </div>
				<div class="excerpt_z">
				<?php /*the_title();*/ ?></a>
				 <?php /*the_excerpt(); */?>
				 </div>
			</div>
			
		<?php endwhile; ?>
		</div>
	
	
	
	<div class="one_half floatleft">
		<?php $storyCount = 0;?>
		<?php $my_query = new WP_Query('category_name=research&showposts=3'); ?>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class = "researchStory<?php echo $storyCount;?>" <?php if($storyCount!=0){echo "style= \"display:none\"";}?>>
			
			<div class="excerpt_container">
				<div class="floatleft"> <a href="<?php the_permalink() ?>" rel="bookmark"> </div>
				<div class="floatleft"> <?php the_post_thumbnail('thumbnail');?> </div>
				<?php the_title(); ?></a>
				<hr class="excerpt_hr"><br>
				<?php the_excerpt();?><br>
				<a href="http://www.gameslearningsociety.org/category/research/">More research</a>
			</div>
			
			<?php $storyCount += 1?>
			<?php echo "</div>";?>
		<?php endwhile; ?>
	</div>

	<div class="one_half floatright">
		<?php $storyCount = 0;?>
		<?php $my_query = new WP_Query('category_name=design&showposts=2'); ?>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class = "designStory<?php echo $storyCount;?>" <?php if($storyCount!=0){echo "style= \"display:none\"";}?>>
			
			<div class="excerpt_container">
				<div class="floatleft"> <a href="<?php the_permalink() ?>" rel="bookmark"> </div>
				<div class="floatleft"> <?php the_post_thumbnail('thumbnail');?> </div>
				<?php the_title(); ?></a>
				<hr class="excerpt_hr"><br>
				<?php the_excerpt();?><br>
				<a href="http://www.gameslearningsociety.org/category/design/">More design</a>
			</div>
			
			<?php $storyCount += 1?>
			<?php echo "</div>";?>
		<?php endwhile; ?>
	</div>

<script type="text/javascript">
	var dCount = 0;
	var rCount = 0;
	var alternate = false;
	var tag = "";
	setInterval(function() {
		if(alternate){
			$('div.one_half.floatright').fadeOut("slow",function(){
				$("div.designStory"+String(dCount)).hide();
				dCount++;
				dCount = dCount%2;
				$("div.designStory"+String(dCount)).show();
				$('div.one_half.floatright').fadeIn("slow");
			});
		}else{
			$('div.one_half.floatleft').fadeOut("slow",function(){
				$("div.researchStory"+String(rCount)).hide();
				rCount++;
				rCount = rCount%3;
				$("div.researchStory"+String(rCount)).show();
				$('div.one_half.floatleft').fadeIn("slow");
			});
		}
		alternate = !alternate;
	}, 20000); 
</script>
	
	

<?php get_footer(); ?>