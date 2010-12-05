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
                <h2>Little Yellow Bicycle</h2>
                <div class="navArrows">
                    <a class="prev" href="tiogaEnergy.php"><span>Previous Sample</span></a>
                    <a class="next" href="floraFaunaHomeopathy.php"><span>Next Sample</span></a>
                </div>
                <br class="clearLt">
                <p>In 2008, The C-Thru Ruler Company expanded its paper crafting and scrapbooking operations with a new brand, called Little Yellow Bicycle, sold exclusively to small- and medium-sized paper crafting and scrapbooking stores. To support this new venture, I worked with designers and producers to create a web site that expresses the exuberance and fun of the LYB brand.</p>
            </div>
            <div class="col3of3">
                <a class="zoomMe" id="lyb">
                <img alt="See image enlarged" height="94" id="enlarge" src="images/zoom_in_91x94.png" style="display:none;" width="91" />
                </a>
            </div><br class="clearLt">
        </div><br class="clearLt">
        <div id="popup" style="background:url('images/lybWebSiteFull.jpg') no-repeat; height:1095px;">
            <img id="closeBtn" src="images/close.png" height="16" width="16" alt="close" name="closeBtn">
        </div>
        <?php require_once( 'closeHtml.inc' ); ?>
