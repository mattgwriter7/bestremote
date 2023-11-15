
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

	//	click Stickies to hide
	$( '.sticky' ).click(function(){
		$( this ).fadeOut();
	});
	
	//	click button to show a Panel
	//	WILLFIX: If there is a need for more than
	//		one type of button this will need refactoring...
	$( 'button' ).click(function(){
		var panel = $(this).attr('data-panel'),
				sticky = $(this).attr('data-sticky');
		//	update spinner
		$( '#' + panel + ' .spinner' ).addClass('active');
		$( '#' + panel + ' .spinner_mssg' ).text('fetching...');
		if( sticky != undefined ) {
			//	hide the sticky ( not all buttons will do this )
			$( '#' + sticky ).fadeOut();
		}

		setTimeout(() => {
			//	load the panel content
			//	WILLFIX: ?? make this full on AJAX so I can
			//	add a slideDown ?? maybe, maybe not...
			$( '#' + panel ).load( './' + panel + '.htm',function(data){
				
			});			
		}, 2000);		
	});

	// 	===========================================
	//	INITIALIZE 
	// 	===========================================
	
	init();
	
});