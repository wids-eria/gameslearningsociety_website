<?php
/*
 Template Name: Game Build Fair Play
*/
?>

        <!-- unity stff -->
        <script type="text/javascript" src="http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject.js"></script>
        <script type="text/javascript">
        <!--
        function GetUnity() {
                if (typeof unityObject != "undefined") {
                        return unityObject.getObjectById("unityPlayer");
                }
                return null;
        }
        if (typeof unityObject != "undefined") {
                var params = {
                        disableContextMenu: true
                };
                unityObject.embedUnity("unityPlayer", "/wp-content/themes/glscenter/builds/fair_play/Pathfinder_WebPlayer.unity3d", 800, 600, params);
                
        }
        --> 
        </script>



<?php get_header(); ?>
    

<div id="unityPlayer">
<div class="missing">
        <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
            <img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
        </a>
</div>
</div>


<?php get_footer(); ?>