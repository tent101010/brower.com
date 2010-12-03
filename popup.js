Event.observe( window, 'load', function() {
     cw = new ClickWatcher;
} );

var ClickWatcher = Class.create();
ClickWatcher.prototype = {

     initialize: function() { return false; },
     
     setCurPopElement: function( anElement ) { this.curPopElement = anElement },

     handler: function( event ) {
          var mX = Event.pointerX( event );
          var mY = Event.pointerY( event );
          if ( cw.curPopElement.id == 'darkenScreenObject' ) {
               grayOut( false );
               popup_pp( false, cw.curPopElement );
               return;
          } else {     
               //for each clickable element in the popup, check to see that the mouse click was NOT on one of them
               //alert( typeof( curPopup) );
               var clickables = cw.curPopElement.getElementsByClassName( 'popLinks' );
               for ( var i = 0; i < clickables.length; i++ ) {
                    Position.prepare();
                    if ( Position.withinIncludingScrolloffsets( clickables[i], mX, mY ) ) {
                         break; //exit loop and let the link do it's thing.
                    }
               }
               grayOut( false );
               popup_pp( false, cw.curPopElement );
          }
     },     
     
     watchPop: function( popElement ) {
          Event.observe( popElement, 'click', this.handler.bindAsEventListener( ClickWatcher ) );
     },

     stopWatchingPop: function( popElement ) {
          Event.stopObserving( popElement, 'click', this.handler.bindAsEventListener( ClickWatcher ) ); 
     },
     
     watchDark: function( darkElement ) {
          Event.observe( darkElement, 'click', this.handler.bindAsEventListener( ClickWatcher ) );
     },

     stopWatchingDark: function( darkElement ) {
          Event.stopObserving( darkElement, 'click', this.handler.bindAsEventListener( ClickWatcher ) ); 
     }
};

function grayOut( vis, popHeight ) {
     // Pass true to gray out screen, false to un-gray
     var zindex = 50;
     var opacity = 50;
     var opaque = .5;
     var bgcolor = '#000000';
     var dark = document.getElementById('darkenScreenObject');
     if ( !dark ) {
          // The dark layer doesn't exist, so create it.
          // If you are getting errors in IE see: 
          // http://support.microsoft.com/default.aspx/kb/927917
          var tbody = document.getElementsByTagName( "body" )[0];
          var tnode = document.createElement( 'div' ); // Create the layer.
          tnode.style.position = 'absolute';             // Position absolutely
          tnode.style.top = '0px';                       // In the top
          tnode.style.left = '0px';                      // Left corner of the page
          tnode.style.overflow = 'hidden';               // Try to avoid making scroll bars
          tnode.style.display = 'none';                  // Start out Hidden
          tnode.id = 'darkenScreenObject';               // Name it so we can find it later
          tbody.appendChild( tnode );                    // Add it to the web page
          dark = document.getElementById( 'darkenScreenObject' );  // Get the object.
     }
     if ( vis ) {
          // Attach an observer to watch for a click
          cw.watchDark( 'darkenScreenObject' );
          // Calculate the page width and height 
          var pxAbovePop = $('copy').cumulativeOffset()[1];
          if ( document.body && ( document.body.scrollWidth || document.body.scrollHeight ) ) {
               var pageWidth = document.body.scrollWidth + 'px';
               //var pageHeight = document.body.scrollHeight + popHeight + 'px';
               var pageHeight = pxAbovePop + popHeight + 20 + 'px';
          } else if ( document.body.offsetWidth ) {
               var pageWidth = document.body.offsetWidth + 'px';
               //var pageHeight = document.body.offsetHeight + popHeight + 'px';
               var pageHeight = pxAbovePop + popHeight + 20 + 'px';
          } else {
               var pageWidth = '100%';
               var pageHeight = '100%';
          }   
          //set the shader to cover the entire page and make it visible.
          dark.style.opacity = opaque;                      
          dark.style.MozOpacity = opaque;                   
          dark.style.filter = 'alpha(opacity=' + opacity + ')'; 
          dark.style.zIndex = zindex;   
          dark.style.backgroundColor = bgcolor;  
          dark.style.width = pageWidth;
          dark.style.height = pageHeight;
          dark.style.display = '';                          
     } else {
          dark.style.display='none';
          cw.stopWatchingDark( 'darkenScreenObject' ); 
     }
}

function popup_pp( vis, elementObj ) {
     // Pass true to pop up, false to pop down   
     // One global var will be a ClickWatcher object
     cw.setCurPopElement( elementObj );
     var zindex = 70;
     var opacity = 50;
     var opaque = .5;
     var bgcolor = '#FFFFFF';
     var popup_pp = elementObj;
     if ( vis ) {
          // popup_pp exists already - it's in the same page as the call to popup_pp(), 
          //so just position it.
            
          popup_pp.style.position = 'absolute';                 
          popup_pp.style.top = '20px'; 
          popup_pp.style.left = '78px';
          // and watch it for a click.
          cw.watchPop( elementObj );
          popup_pp.style.zIndex=zindex;        
          popup_pp.style.backgroundColor = bgcolor;  
          popup_pp.style.display = 'block';                          
     } else {
          popup_pp.style.display='none';
          cw.stopWatchingPop( elementObj );
     }
}
    
