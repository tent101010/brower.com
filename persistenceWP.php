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
                <h2>Persistence</h2>
                <div class="nextSample"><a class="next noLink" href=""><span></span></a></div>
                <br class="clearLt">
                <p>In the early 90s, corporate database developers had a lot of trouble linking legacy information in relational databases to new applications built with object-oriented technology. Getting the object and relational worlds to connect and share data was the goal of Persistence. I worked with the company's marketing and engineering groups to create a customer guide that explained the differences between object and relational technology, the problems of trying to tie them together and the solution that Persistence offered.</p>
            </div>
            <div class="col3of3">
                <a class="zoomMe" id="persistenceWp"><img alt="See image enlarged" height="94" id="enlarge" src="images/zoom_in_91x94.png" style="display:none;" width="91" /></a>
                <p class="tm12"><a href="docs/persistenceWP.pdf">White Paper PDF (2.1 MB)</a></p>
            </div><br class="clearLt" />
        </div><br class="clearLt" />
        <div id="popup" style="background:url('images/persistenceWPCoverFull.gif') no-repeat; height:1100px;">
            <img id="closeBtn" src="images/close.png" height="16" width="16" alt="close" name="closeBtn" />
        </div>
        <?php require_once( 'closeHtml.inc' ); ?>
