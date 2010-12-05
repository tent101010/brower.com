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
                <h2>Flora &amp; Fauna Classical Homeopathy</h2>
                <div class="navArrows">
                    <a class="prev" href="littleYellowBicycle.php"><span>Previous Sample</span></a>
                    <a class="next" href="fineCustomPainting.php"><span>Next Sample</span></a>
                </div>
                <br class="clearLt">
                <p>I helped homeopath Alexis White develop copy that explains her approach to wellness and health, as well as provides some basic information on homeopathy. We used her story to illustrate how one mother, at the end of her rope with western medicine and other alternative treatments, turned to homeopathy to improve the health of her children. By relating her own experience, Alexis hopes to connect with other mothers looking for help with chronic illness in their children.</p>
            </div>
            <div class="col3of3">
                <a class="zoomMe" id="ffh">
                <img alt="See image enlarged" height="94" id="enlarge" src="images/zoom_in_91x94.png" style="display:none;" width="91" />
                </a>
            </div><br class="clearLt">
        </div><br class="clearLt">
        <div id="popup" style="background:url('images/ffhFull.jpg') no-repeat; height:592px;">
            <img id="closeBtn" src="images/close.png" height="16" width="16" alt="close" name="closeBtn">
        </div>
        <?php require_once( 'closeHtml.inc' ); ?>
