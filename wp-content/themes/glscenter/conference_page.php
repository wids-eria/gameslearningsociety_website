<?php
/*
 Template Name: Conference Page Template
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	
	<!-- TypeKit -->
	<script type="text/javascript" src="//use.typekit.net/tbz4lac.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>



	<div class="navigation_background">
    
		<div class="navigation_container">
		    
		    <a href="/conference/"> <div class="nav_conference_logo"></div> </a>
				    
			<ul class="conference_nav_buttons floatright">
			<li> <a href="http://www.gameslearningsociety.org"> <span>GLS</span> </a> </li>
			    <li class="conference_nav_home_page"> <a href="/conference/conference-overview/"> <span>Overview</span> </a> </li>
			    <li> <a href="/conference/conference-program/"> <span>Program</span> </a> </li>
			    <li> <a href="/conference/conference-speakers/"> <span>Speakers</span> </a> </li>
			    <li> <a href="/conference/conference-location/"> <span>Location</span> </a> </li>
			    <li> <a href="/conference/conference-registration/"> <span>Registration</span> </a> </li>
			    <li> <a href="/conference/conference-sponsors/"> <span>Sponsors</span> </a> </li>
			    <li> <a href="/conference/conference-organizers/"> <span>Organizers</span> </a> </li>
			    <li> <a href="/conference/previous-conference/"> <span>Previous Conferences</span> </a> </li>
			    <li> <a href="/conference/games-and-art-exhibit/"> <span>Art</span> </a> </li>
			</ul>
		    
		</div>
        
	</div>
	
	
	
<div class="page_wrap">


<div class="gls90_banner"><a href = "http://www.gameslearningsociety.org/conference/"> <img src="http://www.gameslearningsociety.org/wp-content/themes/glscenter/images/new_conference_header.png"/>
</a></div>



<!--	<div class="conference_navigation_container">
	
		<ul class="conference_navigation_short">
			<li class="additional_margin_short"> <a href="http://www.gameslearningsociety.org/conference/call-for-proposals/"> <span>Call for Proposals</span> </a> </li>
			<li class="additional_margin_short"> <a href="/conference/gls-doctoral-consortium/"> <span>GLS Doctoral Consortium</span> </a> </li>
			<li class="additional_margin_short"> <a href="/conference/gls-educators-symposium/"> <span>GLS Educators Symposium</span> </a> </li>
			<li> <a href="/conference/submissions/"> <span>Submissions</span> </a> </li>
		</ul>
	
	</div> -->


	<!--
	
	<div class="conference_navigation_container">
	
		<ul class="conference_navigation_large">
			<li class="additional_margin_short"> <a href="http://www.gameslearningsociety.org"> <span>Games Learning Society </span> </a> </li>
			<li class="additional_margin_short"> <a href="/conference/call-for-proposals/"> <span>Call for Proposals</span> </a> </li>
			<li class="additional_margin_short"> <a href="/conference/gls-doctoral-consortium/"> <span>GLS Doctoral Consortium</span> </a> </li>
			<li class="additional_margin_short"> <a href="/conference/gls-educators-symposium/"> <span>GLS Educators Symposium</span> </a> </li>
			<li class="additional_margin_short"> <a href="/conference/submissions/"> <span>Submissions</span> </a> </li>
			<li> <a href="/conference/games-and-art-exhibit/"> <span>Art</span> </a> </li>
		</ul>
	
	</div>
	
	-->


	
	<!--
	<div class="conference_navigation_container">
	
		<ul class="conference_navigation_large">
			<li class="additional_margin_large"> <a href="http://www.gameslearningsociety.org"> <span>GLS</span> </a> </li>
			<li class="additional_margin_large"> <a href="/conference/conference-overview/"> <span>Overview</span> </a> </li>
			<li class="additional_margin_large"> <a href="/conference/conference-program/"> <span>Program</span> </a> </li>
			<li class="additional_margin_large"> <a href="/conference/conference-speakers/"> <span>Speakers</span> </a> </li>
			<li class="additional_margin_large"> <a href="/conference/conference-location/"> <span>Location</span> </a> </li>
			<li class="additional_margin_large"> <a href="/conference/conference-registration/"> <span>Registration</span> </a> </li>
			<li class="additional_margin_large"> <a href="/conference/conference-sponsors/"> <span>Sponsors</span> </a> </li>
			<li class="additional_margin_large"> <a href="/conference/conference-organizers/"> <span>Organizers</span> </a> </li>
			<li class="additional_margin_large"> <a href="/conference/previous-conference/"> <span>Previous Conferences</span> </a> </li>
			<li> <a href="/conference/games-and-art-exhibit/"> <span>Art</span> </a> </li>
		</ul>
	
	</div>
	-->
	
	

<div class="full_width floatleft">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
	
				<div class="post_header_container">
					<h1><?php the_title(); ?></h1>
				</div>				
	
				<div class="entry">
	
					<?php the_content(); ?>
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
	
				</div>
	
			</div>
	
			<?php endwhile; endif; ?>
</div>
	

<?php get_footer(); ?>