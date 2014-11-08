			</section>

			<footer>
				<a href="https://www.facebook.com/sourcemountainrecords"><img class="social-icon" src="img/facebook.png" alt="Facebook icon"></a>
				<a href="https://soundcloud.com/source-mountain-records"><img class="social-icon" src="img/soundcloud.png" alt="Soundcloud icon"></a>

				<p> &copy; <?php echo date('Y'); ?> Source Mountain Records </p>
			</footer>
		</div>
	</body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>

	//*******************************
	//			RESPONSIVE YOUTUBE
	//*******************************

		var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};
		var vidDimensionsMobile = {width:"360", height:"203"};
		var vidDimensionsTablet = {width:"560", height:"315"};
		var vidDimensionsDesktop = {width:"853", height:"480"};

		function getWidth() { //browser compatible way of determining browser width
		  if (self.innerHeight) {
		    return self.innerWidth;
		  }

		  if (document.documentElement && document.documentElement.clientHeight) {
		    return document.documentElement.clientWidth;
		  }

		  if (document.body) {
		    return document.body.clientWidth;
		  }
		}

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

		$('.menu-toggle').click(function(){  //show / hide the mobile menu
			$('.mob-nav').slideToggle('slow');
		})
		

		// if(getWidth() >= 768){ //if browser width 768 or more..
		// 		$('iframe').attr(vidDimensionsTablet);  //set the iframe(youtube) height & width attributes
		// 	}
		// if(getWidth() >= 922){
		// 		$('iframe').attr(vidDimensionsDesktop);
		// 	}
		// 	//dont need to check for less than 768 as that's the default 


		// 
		// $(window).resize(function(){  //when the browser resizes
		// 	if(getWidth() >= 768){  //if browser width 768 or more..
		// 		$('iframe').attr(vidDimensionsTablet);  //set the iframe(youtube) height & width attributes
		// 	}
		// 	if(getWidth() >= 922){
		// 		$('iframe').attr(vidDimensionsDesktop);
		// 	}
		// 	if(getWidth() <= 768){
		// 		$('iframe').attr(vidDimensionsMobile);
		// 	}

		// });

		//*******************************
		//			LIGHTBOX
		//*******************************

		var $overlay = $('<div class="overlay"></div>');
		var $image = $("<img>");
		var $caption = $("<p></p>");

		//Add image to overlay
		$overlay.append($image);

		//Add caption to overlay
		$overlay.append($caption);

		//Add overlay
		$("body").append($overlay);

		//Capture the click event on a link to an image
		$(".image-gallery a").click(function(event){
		  event.preventDefault();
		  var imageLocation = $(this).attr("href");
		  //Update overlay with the image linked in the link
		  $image.attr("src", imageLocation);
		  
		  //Show the overlay.
		  $overlay.show();
		  
		  //Get child's alt attribute and set caption
		  var captionText = $(this).children("p").text();
		  $caption.text(captionText);
		});

		//When overlay is clicked
		$overlay.click(function(){
		  //Hide the overlay
		  $overlay.hide();
		});

		//*******************************
		//		 SPEAKER ICON AND SAMPLE
		//*******************************

		$('.soundCloudSample').hide();

		$('.speaker-icon').click(function(){  //when speaker icon is clicked
			var timeOut;
			var $speakerImage;
			var associatedSoundCloud;
			
			event.preventDefault();  //prevent clicking the speaker from folling the link its nested in
			$speakerImage = $(this);  //store a reference to the actual clicked button	
			$speakerImage.attr("src", "img/speaker-sound-invert.png")  // change the image's src attribute to the other speaker image

			timeOut = setTimeout(function(){  //this all changes the image back after 1000 miliseconds
			$speakerImage.attr("src", "img/speaker-sound.png")
			}, 1000);

			$speakerImage.parent().parent().next().slideToggle('slow');

		

		});



		

	</script>
</html>