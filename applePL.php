<?php
    $pageId = 'prodLit';
    require_once( "openHtml.inc" );
?>
        <div id="rightCol">
            <div id="title" class="topMargin110">
                <h1>Product Literature</h1>
                <!-- <h1 class="pageTitle productLiterature"><span>Product Literature</span></h1> -->
            </div><br class="clearLt" />
            <div id="copy" class="col2of3">
                <h2>Apple</h2>
                <div class="nextSample"><a class="next noLink" href=""><span></span></a></div>
                <br class="clearLt">
                <p>When it comes to product launches, Apple does it right. Everything from advertising to in-store posters to T-shirts is carefully coordinated for simultaneous release on introduction day. This consistency and clarity is particularly important with press materials. In addition to press releases and product "beauty shots," Apple creates an in-depth reviewer's guide for most new product launches. I wrote two of these guides, bringing together content from marketing communications, hardware engineering, application software, system software, utilities, design and sales and training to provide a single resource for product reviewers.</p>
            </div>
            <div class="col3of3">
                <a class="zoomMe" id="applePL2"><img alt="See image enlarged" height="94" id="enlarge" src="images/zoom_in_91x94.png" style="display:none;" width="91" /></a>
                <p class="tm12"><a href="docs/iMacReviewGuide.pdf">iMac Reviewer's Guide PDF (2.6 MB)</a></p>
                <p class="tm12"><a href="docs/appleWorks.pdf">AppleWorks 6.2 Reviewer's Guide PDF (2.1 MB)</a></p>
            </div><br class="clearLt" />
        </div><br class="clearLt" />
        <div id="popup" style="background:url('images/iMacReviewGuideFull.gif') no-repeat; height:900px;">
            <img id="closeBtn" src="images/close.png" height="16" width="16" alt="close" name="closeBtn" />
        </div>
        <?php require_once( 'closeHtml.inc' ); ?>
