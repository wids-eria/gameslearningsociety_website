<?php
/*
 Template Name: Game Build Anatomy Browser
*/
?>

        <!-- unity stff -->
        <script type="text/javascript" src="http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject.js"></script>
        <script type="text/javascript">
        <!--
        function GetUnity() {
                if (typeof unityObject != "undefined") {
                        return unityObject.getObjectById("unityPlayer_ab");
                }
                return null;
        }
        if (typeof unityObject != "undefined") {
                var params = {
                        disableContextMenu: true
                };
                unityObject.embedUnity("unityPlayer_ab", "/wp-content/themes/glscenter/builds/anatomy_browser/05-01-3WebBuild.unity3d", 1024, 768, params);
                
        }
        --> 
        </script>



<?php get_header(); ?>
    

<div id="unityPlayer_ab">
<div class="missing">
        <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
            <img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
        </a>
</div>
</div>


<?php get_footer(); ?>