		<div class="footer_container">
    
    <div class="footer">
        
        <div class="footer_copyright left">

                <p class="left">Copyright &copy; 2013 Games Learning Society</p>
                <a href="https://www.facebook.com/glsconference" target="_blank"> <div class="footer_facebook left"></div> </a>
                <a href="https://twitter.com/glscenter" target="_blank"> <div class="footer_twitter left"></div> </a>
                <a href="https://secure.flickr.com/photos/gls-conference" target="_blank"> <div class="footer_flickr left"></div> </a>

            
            <ul class="footer_nav_links left">
                <li> <a href="about.php">About</a> </li>
                <li> <a href="games.php">Games</a> </li>
                <li> <a href="research.php">Research</a> </li>
                <li> <a href="people.php">People</a> </li>
                <li> <a href="courses.php">Courses</a> </li>
                <li> <a href="www.glsconference.net">Conference</a> </li>
                <!--<li> <a href="">Blog</a> </li>-->
                <li> <a href="contact.php">Contact</a> </li>
                <li> <a href="jobs.php">Jobs</a> </li>
				<li> <a href="http://www.gameslearningsociety.org/blog/">Blog</a> </li>
            </ul>
            
        </div>
        
        <div class="footer_logos right">
            <a href="http://www.education.wisc.edu/" target="_blank"> <div class="footer_logo_soe right"></div> </a>
            <a href="http://www.learninggamesnetwork.org/" target="_blank"> <div class="footer_logo_lgn right"></div> </a>
            <a href="http://wid.wisc.edu/" target="_blank"> <div class="footer_logo_wid right"></div> </a>       
        </div>
        
    </div>
    
</div>    
    
    
<div class="clear">
</div>


<!-- Initialize Fancybox -->
<script type="text/javascript">
    $(document).ready(function() {
        
        $('a').fancybox({
            'cyclic':true
        });
        
        $('.trailer').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',
            width: 1280,
            height: 720,
            helpers : {
                    media : {}
            }
         });
    });
       
    
</script>

	<?php wp_footer(); ?>
	
	
	<?php include_once("analyticstracking.php") ?>
	
	
</div> <!-- End Body Content -->

</div> <!-- End Body Content Container -->


	
</body>

</html>
