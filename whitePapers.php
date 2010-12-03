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
                <h2>Kazeon</h2>
                <div class="nextSample"><a class="next" href="tiogaEnergyWP.php"><span>Next Sample</span></a></div>
                <br class="clearLt">
                <p>High-tech start-up Kazeon needed a white paper to explain both the company's technology and the market need for that technology. I wrote the white paper over a period of three months, working closely with a design firm and Kazeon's director of marketing to clarify and strengthen the company's messages and positioning.</p>
            </div>
            <div class="col3of3">
                <a class="zoomMe" id="kazWp"><img alt="See image enlarged" height="94" id="enlarge" src="images/zoom_in_91x94.png" style="display:none;" width="91" /></a>
                <p class="tm12"><a href="docs/Kazeon.pdf">White Paper PDF (172 KB)</a></p>
            </div><br class="clearLt" />
        </div><br class="clearLt" />
        <div id="popup" style="background:url('images/kazeonFull.gif') no-repeat; height:1179px;">
            <img id="closeBtn" src="images/close.png" height="16" width="16" alt="close" name="closeBtn" />
        </div>
        <?php require_once( 'closeHtml.inc' ); ?>
