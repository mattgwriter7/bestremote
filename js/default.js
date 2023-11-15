
// 	LEFT OFF: I added spinner and fetch
//	NEXT: 

$(function() {
	
	// 	===========================================	
	//	MAIN FUNCTIONS
	// 	===========================================		

	function init() {
		console.log( 'Loaded version ' + window.ver );
    
		/*
		setTimeout(function(){ 
			$( '.fadein' ).fadeIn( 'fast', function() {
				// Animation complete
			});		
		}, 2000);
		*/
		
		return;
	}

	// 	===========================================	
	//	EVENT HANDLERS
	// 	===========================================	

	$( 'button' ).click(function(){
		var panel = $(this).attr('data-panel');
		//	update spinner
		$( '#' + panel + ' .spinner' ).addClass('active');
		$( '#' + panel + ' .spinner_mssg' ).text('fetching...');
		//	hide HUD
		$( '#main_show_me' ).fadeOut();
		setTimeout(() => {
			//	load the panel content
			//	WILLFIX: ?? make this full on AJAX so I can
			//	add a slideDown ?? maybe, maybe not...
			$( '#' + panel ).load( './' + panel + '.php',function(data){
				
			});			
		}, 2000);		
	});

	// 	===========================================
	//	INITIALIZE 
	// 	===========================================
	
	init();
	
});