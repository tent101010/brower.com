<?php
    $pageId = 'whitePapers';
    require_once( "openHtml.inc" );
?>
        <div id="rightCol">
            <div id="title" class="topMargin110">
                <h1>White Papers</h1>
                <!-- <h1 class="pageTitle whitePapers"><span>White Papers</span></h1> -->
            </div><br class="clearLt" />
            <div id="copy" class="col2of3">
                <h2>Trimble</h2>
                <div class="navArrows">
                    <a class="prev" href="kazeonWP.php"><span>Previous Sample</span></a>
                    <a class="next" href="nextWP.php"><span>Next Sample</span></a>
                </div>
                <br class="clearLt">
                <p>Trimble popularized handheld GPS navigation devices for recreational sailors in the 1980s. The company also developed and manufactured GPS systems for commercial navigation, aviation, surveying, emergency response, vehicle fleet tracking and more. I worked with Trimble's corporate marketing department to develop and write corporate marketing pieces to educate investors, customers and partners about GPS. This white paper was part of that effort.</p>
            </div>
            <div class="col3of3">
                <a class="zoomMe" id="trimbleWp"><img alt="See image enlarged" height="94" id="enlarge" src="images/zoom_in_91x94.png" style="display:none;" width="91" /></a>
                <p class="tm12"><a href="docs/AboutGPS.pdf">White Paper PDF (60 KB)</a></p>
            </div><br class="clearLt" />
        </div><br class="clearLt" />
        <div id="popup" style="background:url('images/trimbleWPCoverFull.gif') no-repeat; height:1077px;">
            <img id="closeBtn" src="images/close.png" height="16" width="16" alt="close" name="closeBtn" />
        </div>
        <?php require_once( 'closeHtml.inc' ); ?>
