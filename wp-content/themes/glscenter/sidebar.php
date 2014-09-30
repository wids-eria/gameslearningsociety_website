<div id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
	
	<div class="sidebar_section">
	    <h2>Post Categories</h2>
	    <ul>
	       <?php wp_list_categories('show_count=1&title_li='); ?> <!-- Lists Post Categories-->
	    </ul>
	</div>
	
	
	<div class="sidebar_section">
	    <h2>Post Archives</h2>
	    <ul>
		    <?php wp_get_archives('type=monthly'); ?> <!-- Lists Archives-->
	    </ul>
	</div>
        
	
        
    	<!--<?php wp_list_bookmarks(); ?>--> <!-- Displays Wordpress Links -->
    	

	<?php endif; ?>

</div>