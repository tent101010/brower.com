/*   secID - Home(0), Projects(1), Clients(2), About Me(3), Contact(4)
     subSecID - Home(0), Advertising(1), Web Sites(2), White Papers(3), Product Literature(4), Corporate Collateral(5), Articles(6)
     secIDindex: integer index of the appropriate item in the secID[].
     subSecIDindex: integer index of the appropriate item in the subSecID[].
*/
//function buildNav( secIDindex, subSecIDindex, TNLink, SNLink ) {
//     secIDArr = ['home', 'projects', 'clients', 'about', 'contact'];
//     altTextArr = ['home', 'Projects', 'Clients', 'AboutMe', 'Contact'];
     // is the item to be a link or not?
//     isLinked = TNLink; // Boolean
//     navDiv = document.getElementById( "nav" );
     
//     for ( i = 1; i < secIDArr.length; i++ ) {
  //        anchor = document.createElement( "a" );
    //      anchor.setAttribute( "href", secIDArr[i] + ".html" );
      //    d = document.createElement( "div" );
        //  image = document.createElement( "img" );
//          image.setAttribute( "src", "images/transPix.gif" );
  //        image.setAttribute( "width", "1" );
    //      image.setAttribute( "height", "20" );
      //    image.setAttribute( "alt", altTextArr[i] );
        //  d.appendChild( image );
          // If current indexed item matches secIDindex param, then turn that item "on"
//          if ( i == secIDindex ) {
               //build element and include div id="foobarOn"
  //             d.setAttribute( "id", secIDArr[i] + "On" );
    //      } else {
      //         d.setAttribute( "id", secIDArr[i] );
        //  }
//          if ( (i == secIDindex) && !isLinked ) {
  //             navDiv.appendChild( d );
    //      } else {
      //         anchor.appendChild( d );
        //       navDiv.appendChild( anchor );
//          }
// If building a top level nav section that has sub nav, then build sub nav
// This will have to be changed if more than one top level section ends up with sub nav
// As of 07/2007, only the Projects section has sub nav.
//          if ( (secIDindex == 1) && (i == secIDindex)) {
  //             buildSubNav( subSecIDindex, SNLink );
    //      }
//     }
//}

/* 
If agent requests a page that includes sub navigation, this function is called 
to build those elements via DOM methods.
*/
//function buildSubNav( subSecIDindex, SNLink ) {
  //   projSubNavArr = ['ads', 'webSites', 'whitePapers', 'prodLit', 'corpColl', 'articles'];
    // projSubNavAltTxtArr = ['Ads', 'Web Sites', 'White Papers', 'Product Literature', 'Corporate Collateral', 'Articles'];
//     isLinked = SNLink;
  //   navDiv = document.getElementById( "nav" );

    // for ( j = 0; j < projSubNavArr.length; j++ ) {
      //    anchor = document.createElement( "a" );
//          anchor.setAttribute( "href", projSubNavArr[j] + ".html" );
  //        d = document.createElement( "div" );
    //      image = document.createElement( "img" );
      //    image.setAttribute( "src", "images/transPix.gif" );
        //  image.setAttribute( "width", "1" );
//          image.setAttribute( "height", "20" );
  //        image.setAttribute( "alt", projSubNavAltTxtArr[j] );
    //      d.appendChild( image );
          // If current indexed item matches subSecIDindex param, then turn that item "on"
//          if ( j == subSecIDindex ) {
               //build element and include div id="foobarOn"
  //             d.setAttribute( "id", projSubNavArr[j] + "On" );
    //      } else {
      //         d.setAttribute( "id", projSubNavArr[j] );
        //  }
          //if ( (!isLinked) && (j == subSecIDindex) ) {
            //   navDiv.appendChild( d );
//          } else {
  //             anchor.appendChild( d );
    //           navDiv.appendChild( anchor );
      //    }
//     }
//}

function popDiv( anID, anImage, aWidth, aHeight ) {
     // e is the parent div to the new one we want to add
     var e = document.getElementById( anID );
     
     // create a new div
     var pop = document.createElement( "div" );
     pop.id = "pop";

     // create a new anchor node
     var anchor = document.createElement( "a" );
     anchor.setAttribute( "onclick", "killDiv( '" + anID + "' , 'pop' )" );
     
     // create a new image
     var popImage = document.createElement( "img");
     popImage.setAttribute( "src", "images/" + anImage );
     popImage.setAttribute( "width", aWidth );
     popImage.setAttribute( "height", aHeight );
     popImage.style.border = "solid 1px #000";

     // add the anchor as a child to the new image
     anchor.appendChild( popImage );

     // add the image as a child to the new div
     pop.appendChild( anchor );

     // add the new div to the document
     e.appendChild( pop );
}

function killDiv( parentID, removeMe ) {
     var e = document.getElementById( parentID );
     var r = document.getElementById( removeMe );
     e.removeChild( r );
}

document.observe( "dom:loaded", function() {
    if ( $$('.zoomMe').length > 0 ) {
        $$('.zoomMe')[0].observe( 'mouseover', function() {
            $('enlarge').show().setStyle( {cursor:"pointer"} ).observe( 'click', function() {
                grayOut( true, 1113 );
                popup_pp( true, $('popup') );
                return false;
            } )
        } ).observe( 'mouseout', function() {
            $('enlarge').hide();
        } );
    }
} );

