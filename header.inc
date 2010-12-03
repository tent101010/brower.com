<?php
  echo( "<div id=\"logo\">\n" );
  if ( $pageId === "home" ) {
    echo( '<img id="logoImg" src="images/logo.gif" width="100" height="225" alt="Emily Brower Auchard, Copywriter">' );
  } else {
    echo( '<a href="index.php"><img id="logoImg" src="images/logo.gif" width="100" height="225" alt="Emily Brower Auchard, Copywriter"></a>' );
  }
  echo( "\n</div>" ); 
?>
