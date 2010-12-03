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
                <h2>NeXT</h2>
                <div class="nextSample"><a class="next" href="persistenceWP.php"><span>Next Sample</span></a></div>
                <br class="clearLt">
                <p>Today we know NeXT as the company Steve Jobs sold to Apple, but in the early 1990's NeXT was making headlines as a pioneer of object-oriented programming. Today, object-oriented programming has become the standard—not surprised given the Internet's need for developing modular applications quickly. But back in 1990, after the introduction of object-oriented NeXTStep in 1990, NeXT had a lot of educating to do. I originally wrote this FAQ about NeXTStep for a press and analyst audience. It was quickly picked up by the company's salesforce to help explain NeXT's technical advantages to potential clients.</p>
            </div>
            <div class="col3of3">
                <a class="zoomMe" id="nextWp"><img alt="See image enlarged" height="94" id="enlarge" src="images/zoom_in_91x94.png" style="display:none;" width="91" /></a>
                <p class="tm12"><a href="docs/OOP.pdf">White Paper PDF (72 KB)</a></p>
            </div><br class="clearLt" />
        </div><br class="clearLt" />
        <div id="popup" style="background:url('images/nextWPCoverFull.gif') no-repeat; height:1145px;">
            <img id="closeBtn" src="images/close.png" height="16" width="16" alt="close" name="closeBtn" />
        </div>
        <?php require_once( 'closeHtml.inc' ); ?>
