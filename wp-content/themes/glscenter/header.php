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
	
	
	
	
	
	
	<?php wp_head(); ?>
	
	
	<!-- FancyBox -->
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        
        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="/wp-content/themes/glscenter/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/wp-content/themes/glscenter/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
        <script type="text/javascript" src="/wp-content/themes/glscenter/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>
        
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="/wp-content/themes/glscenter/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/wp-content/themes/glscenter/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="/wp-content/themes/glscenter/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
        
        <link rel="stylesheet" href="/wp-content/themes/glscenter/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="/wp-content/themes/glscenter/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	
	
</head>

<body <?php body_class(); ?>>


<div class="navigation_background">
    
        <div class="navigation_container">
            
            <a href="http://www.gameslearningsociety.org"> <div class="nav_gls_logo"></div> </a>
                            
                <ul class="nav_buttons floatright">
                    <li class="nav_home_page"> <a href="/?page_id=2"> <span>Home</span> </a> </li>
                    <li class="nav_about_page"> <a href="/?page_id=12"> <span>About</span> </a> </li>
                    <li class="nav_projects_page"> <a href="/?page_id=17"> <span>Projects</span> </a> </li>
                    <li class="nav_courses_page"> <a href="/?page_id=19"> <span>Courses</span> </a> </li>
		    <li class="nav_people_page"> <a href="/?page_id=21"> <span>People</span> </a> </li>
		    <li class="nav_conference_page"> <a href="/?page_id=5"> <span>Conference</span> </a> </li>
		
		    <li class="nav_search_box">  
		    
			<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
			
			    <div class="search_box">
				<label for="s" class="screen-reader-text">Search for:</label>
				<input type="text" id="s" name="s" value="" />
				
				<input type="submit" value="Search" id="searchsubmit" />
			    </div>
			</form>
			
			 </a> </li>
		    
                </ul>

            
        </div>
        
</div>

	<div class="page_wrap">

		



