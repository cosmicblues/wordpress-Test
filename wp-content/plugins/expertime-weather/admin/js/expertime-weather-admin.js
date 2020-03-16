(function( $ ) {

	var callBackGetSuccess = function(data) {
		console.log("donnees api", data)
		//alert("Meteo temp  : "  + data.main.temp);
		var element = document.getElementById("zone_meteo");
		element.innerHTML = "La temperature est de " + data.main.temp;
	}


	function buttonClickGET() {
		var queryLoc = document.getElementById("queryLoc").value;

		var url = "https://www.prevision-meteo.ch/services/json/l"+queryLoc;

		$.get(url, callBackGetSuccess).done(function() {
			//alert( "second success" );
		})
			.fail(function() {
				alert( "error" );
			})
			.always(function() {
				//alert( "finished" );
			});
	}
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );
