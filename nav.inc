<?php
    function buildNav( $pageId ) {
        // To add, remove or edit navigation, edit these strings.
        /* Key
           ads         = $projects[3, 9,14,18,22,26,30,34],$clients[2],$about[2],$contact[2]
           webSites    = $projects[3,10,13,18,22,26,30,34],$clients[2],$about[2],$contact[2]
           whitePapers = $projects[3,10,14,17,22,26,30,34],$clients[2],$about[2],$contact[2]
           prodLit     = $projects[3,10,14,18,21,26,30,34],$clients[2],$about[2],$contact[2]
           corpComm    = $projects[3,10,14,18,22,25,30,34],$clients[2],$about[2],$contact[2]
           ia          = $projects[3,10,14,18,22,26,29,34],$clients[2],$about[2],$contact[2]
           other       = $projects[3,10,14,18,22,26,30,33],$clients[2],$about[2],$contact[2]
        */
        $projects = array(  '<li class="mainTopItem">Projects</li>',
                            '<li class="on mainTopItem">Projects</li>',
                            '<li class="mainWithSubNav">Projects</li>',
                            '<li class="on mainWithSubNav">Projects</li>',
                            '<li class="mainTopItem"><a href="art-c.php">Projects</a></li>',
                            '<li class="on mainTopItem"><a href="art-c.php">Projects</a></li>',
                            '<li class="mainWithSubNav"><a href="art-c.php">Projects</a></li>',
                            '<li class="on mainWithSubNav"><a href="art-c.php">Projects</a></li>',
                            '<li>Advertising</li>',
                            '<li class="on">Advertising</li>',
                            '<li><a href="ads.php">Advertising</a></li>',
                            '<li class="on"><a href="ads.php">Advertising</a></li>',
                            '<li>Web Sites</li>',
                            '<li class="on">Web Sites</li>',
                            '<li><a href="art-c.php">Web Sites</a></li>',
                            '<li class="on"><a href="art-c.php">Web Sites</a></li>',
                            '<li>White Papers</li>',
                            '<li class="on">White Papers</li>',
                            '<li><a href="tiogaEnergyWP.php">White Papers</a></li>',
                            '<li class="on"><a href="tiogaEnergyWP.php">White Papers</a></li>',
                            '<li>Product Literature</li>',
                            '<li class="on">Product Literature</li>',
                            '<li><a href="bitpass.php">Product Literature</a></li>',
                            '<li class="on"><a href="bitpass.php">Product Literature</a></li>',
                            '<li>Corporate Communications</li>',
                            '<li class="on">Corporate Communications</li>',
                            '<li><a href="USWebCKS_CC.php">Corporate Communications</a></li>',
                            '<li class="on"><a href="USWebCKS_CC.php">Corporate Communications</a></li>',
                            '<li>Information Architecture</li>',
                            '<li class="on">Information Architecture</li>',
                            '<li><a href="BDBiosciences_IA.php">Information Architecture</a></li>',
                            '<li class="on"><a href="BDBiosciences_IA.php">Information Architecture</a></li>',
                            '<li class="lastSubNavItem">Other Writing</li>',
                            '<li class="on lastSubNavItem">Other Writing</li>',
                            '<li class="lastSubNavItem"><a href="Redbook01.php">Other Writing</a></li>',
                            '<li class="on lastSubNavItem"><a href="Redbook01.php">Other Writing</a></li>' );
    
        $clients = array(   '<li class="main">Clients</li>',
                            '<li class="on main">Clients</li>',
                            '<li class="main"><a href="clients.php">Clients</a></li>',
                            '<li class="on main"><a href="clients.php">Clients</a></li>' );
        
        $about = array( '<li class="main">About</li>',
                        '<li class="on main">About</li>',
                        '<li class="main"><a href="about.php">About</a></li>',
                        '<li class="on main"><a href="about.php">About</a></li>' );
    
        $contact = array(   '<li class="main">Contact</li>',
                            '<li class="on main">Contact</li>',
                            '<li class="main"><a href="contact.php">Contact</a></li>',
                            '<li class="on main"><a href="contact.php">Contact</a></li>' );
        $divider = '<div class="divider"></div>';
    
        echo( "<ul>\n" );
        if ( $pageId === 'home' ) {
            echo( "$projects[4]\n$clients[2]\n$about[2]\n$contact[2]" );
        } else if ( $pageId === 'ads' ) {
            echo ( "$projects[3]\n<li>\n<ul id=\"subNav\">\n$projects[14]\n$divider\n$projects[18]\n$divider\n$projects[22]\n$divider\n$projects[26]\n$divider\n$projects[30]\n$divider\n$projects[34]\n</ul>\n</li>\n$clients[2]\n$about[2]\n$contact[2]" );
        } else if ( $pageId === 'webSites' ) {
            echo ( "$projects[3]\n<li>\n<ul id=\"subNav\">\n$projects[13]\n$divider\n$projects[18]\n$divider\n$projects[22]\n$divider\n$projects[26]\n$divider\n$projects[30]\n$divider\n$projects[34]\n</ul>\n</li>\n$clients[2]\n$about[2]\n$contact[2]" );
        } else if ( $pageId === 'whitePapers' ) {
            echo ( "$projects[3]\n<li>\n<ul id=\"subNav\">\n$projects[14]\n$divider\n$projects[17]\n$divider\n$projects[22]\n$divider\n$projects[26]\n$divider\n$projects[30]\n$divider\n$projects[34]\n</ul>\n</li>\n$clients[2]\n$about[2]\n$contact[2]" );
        } else if ( $pageId === 'prodLit' ) {
            echo ( "$projects[3]\n<li>\n<ul id=\"subNav\">\n$projects[14]\n$divider\n$projects[18]\n$divider\n$projects[21]\n$divider\n$projects[26]\n$divider\n$projects[30]\n$divider\n$projects[34]\n</ul>\n</li>\n$clients[2]\n$about[2]\n$contact[2]" );
        } else if ( $pageId === 'corpComm' ) {
            echo ( "$projects[3]\n<li>\n<ul id=\"subNav\">\n$projects[14]\n$divider\n$projects[18]\n$divider\n$projects[22]\n$divider\n$projects[25]\n$divider\n$projects[30]\n$divider\n$projects[34]\n</ul>\n</li>\n$clients[2]\n$about[2]\n$contact[2]" );
        } else if ( $pageId === 'ia' ) {
            echo ( "$projects[3]\n<li>\n<ul id=\"subNav\">\n$projects[14]\n$divider\n$projects[18]\n$divider\n$projects[22]\n$divider\n$projects[26]\n$divider\n$projects[29]\n$divider\n$projects[34]\n</ul>\n</li>\n$clients[2]\n$about[2]\n$contact[2]" );
        } else if ( $pageId === 'other' ) {
            echo ( "$projects[3]\n<li>\n<ul id=\"subNav\">\n$projects[14]\n$divider\n$projects[18]\n$divider\n$projects[22]\n$divider\n$projects[26]\n$divider\n$projects[30]\n$divider\n$projects[33]\n</ul>\n</li>\n$clients[2]\n$about[2]\n$contact[2]" );
        } else if ( $pageId === 'clients' ) {
            echo ( "$projects[4]\n$clients[1]\n$about[2]\n$contact[2]" );
        } else if ( $pageId === 'about' ) {
            echo ( "$projects[4]\n$clients[2]\n$about[1]\n$contact[2]" );
        } else if ( $pageId === 'contact' ) {
            echo ( "$projects[4]\n$clients[2]\n$about[2]\n$contact[1]" );
        }
        echo( "</ul>\n" );
    }
?>
