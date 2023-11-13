
// 	LEFT OFF: only just began

$(function() {
	
	// 	===========================================	

	function init() {
		console.log( 'Loaded version ' + window.ver );
    
		setTimeout(function(){ 
			$( '.fadein' ).fadeIn( 'fast', function() {
				// Animation complete
			});		
		}, 2000);
		
		return;
	}

	// 	===========================================	
	//	EVENT HANDLERS
	// 	===========================================	

	// 	===========================================
	//	INITIALIZE 
	// 	===========================================
	
	init();
	
});