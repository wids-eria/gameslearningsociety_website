<?php
/*
 Template Name: Game Citizen Science
*/
?>

        <!-- Run Flash Player -->
        <script language="JavasScript" type="text/javascript" src="AC_RunActiveContent.js"></script>
        

<?php get_header(); ?>
    

<div id="unityPlayer_cs">
        <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
                WIDTH="800"
                HEIGHT="600"
                MARGIN-LEFT="50"
                id="Main" ALIGN="">

                <PARAM NAME=movie
                VALUE="Main">
                <PARAM NAME=quality VALUE=high>
                <PARAM NAME=bgcolor VALUE=#000000>
                
                <EMBED src="/wp-content/themes/glscenter/builds/citizen_science/Main.swf"
                quality=high bgcolor=#000000
                WIDTH="881" HEIGHT="600"
                NAME="Main"
                ALIGN=""
                TYPE="application/x-shockwave-flash"
                PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
                        
                </EMBED>
        </OBJECT>

</div>


<?php get_footer(); ?>