	

	//*******************************
	//		RESPONSIVE YOUTUBE
	//*******************************

		var vidDimensionsMobile = {width:"360", height:"203"};
		var vidDimensionsTablet = {width:"560", height:"315"};
		var vidDimensionsDesktop = {width:"853", height:"480"};

		function youtubeResponsive(){
			if(getWidth() >= 768){  //if browser width 768 or more..
				$('.video-container iframe').attr(vidDimensionsTablet);  //set the iframe(youtube) height & width attributes
			}
			if(getWidth() >= 922){
				$('.video-container iframe').attr(vidDimensionsDesktop);
			}
			if(getWidth() < 768){  //this isnt needed in the initial page load function call as the smallest setting is the default (see the attributes of the iframe in html)
		 		$('.video-container iframe').attr(vidDimensionsMobile);
		 	}
		}

		youtubeResponsive();  //initial call as the page loads
		$(window).resize(youtubeResponsive);  //calls whenever the browser size changes


		//*** Maybe use this instead - javascript media query 'matchMedia'***


		// media query change function

		// function WidthChange(mQuery768) {

		// 	if (mQuery768.matches) {
		// 		// window width is at least 768px
		// 		***CODE TO EXECUTE ON BROWSER WIDTH THRESHOLD CROSSING OVER***
		// 	}
		// }
		

		//  // media query event handler

		// if (matchMedia) {
		// 	var mQuery768 = window.matchMedia("(min-width: 768px)");
		// 	mQuery768.addListener(WidthChange);
		// 	WidthChange(mQuery768);
		// }