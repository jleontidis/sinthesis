(function() {
	var triggerBttn = document.getElementById( 'trigger-overlay' ),
		overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( 'button.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		};
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ];
		support = { transitions : Modernizr.csstransitions };
		
	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
		}
	}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );
})();


    $(document).ready(function(){
        $(".navbar-toggle.collapsed").click(function(){
            $("body").toggleClass("overflowcheck"); 
        });
    $(".overlay-close").click(function(){
            $("body").toggleClass("overflowcheck"); 
        });
    
});
    


function showsuccess()
{
    var elem = jQuery('#wpcf7-f172-p6-o1');
    jQuery('#wpcf7-f172-p6-o1').addClass('fade-away');
    console.log('Button Clicked');   

    $(".fade-away").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', 
    function() {
        
        jQuery('form').remove();
        jQuery('.btn').remove();
        jQuery('.success-message').removeClass('hidden');
        setTimeout(function(){ jQuery('.success-message').addClass('showSuccess');}, 1);
       
        
    });
}