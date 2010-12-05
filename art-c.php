<?php
    $pageId = 'webSites';
    require_once( "openHtml.inc" );
?>
        <div id="rightCol">
            <div id="title" class="topMargin110">
                <h1>Web Sites</h1>
                <!-- <h1 class="pageTitle webSites"><span>Web Sites</span></h1> -->
            </div><br class="clearLt">
            <div id="copy" class="col2of3">
                <h2>Art-C</h2>
                <div class="navArrows">
                    <a class="prev prevNoLink" href=""><span>Previous Sample</span></a>
                    <a class="next" href="pinpoint.php"><span>Next Sample</span></a>
                </div>
                <br class="clearLt">
                <p>This new brand of art kits and media was started to capitalize on the growing popularity of Artist Trading Cards (ATC), tiny multi-media works of art done on trading-card sized canvases. Many ATC artists include antique images and elements in their works; the brand image and web site design captures this trend in images, colors and type. I worked on the copy for the site and also provided project management and art direction.</p>
            </div>
            <div class="col3of3">
                <a class="zoomMe" id="artc"><img alt="See image enlarged" height="94" id="enlarge" src="images/zoom_in_91x94.png" style="display:none;" width="91" /></a>
            </div><br class="clearLt">
        </div><br class="clearLt">
        <div id="popup" style="background:url('images/artcFull.jpg') no-repeat; height:1044px;">
            <img id="closeBtn" src="images/close.png" height="16" width="16" alt="close" name="closeBtn">
        </div>
        <?php require_once( 'closeHtml.inc' ); ?>
