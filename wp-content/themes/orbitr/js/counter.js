/**
 *	jQuery Document Ready
 */
jQuery( document ).ready( function($) {




	// Counter Number
	function counterNumber() {
		if( $( '#counter .counter-number' ).length ) {
			$( '#counter .counter-number' ).countTo();
		}
	}

	// Called Functions
	$( function() {

		$( window ).scroll( function() {
			var counterVisible = $( '#counter' ).visible();

			if( counterVisible == true ) {
				counterNumber();
			}
		});
	});
});