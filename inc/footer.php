			</section>

			<footer>
				<a href="https://www.facebook.com/sourcemountainrecords"><img class="social-icon" src="img/facebook.png" alt="Facebook icon"></a>
				<a href="https://soundcloud.com/source-mountain-records"><img class="social-icon" src="img/soundcloud.png" alt="Soundcloud icon"></a>

				<p> &copy; <?php echo date('Y'); ?> Source Mountain Records </p>
			</footer>
		</div>
	</body>
	<noscript>
		<meta http-equiv="refresh" content="0; URL=noscript.php" />
	</noscript>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/scrollme-master/jquery.scrollme.min.js"></script>
	<script>

	//*******************************
	//			RESPONSIVE YOUTUBE
	//*******************************

		
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

		//$('.soundCloudSample').hide();

		// $('.speaker-icon').click(function(){  //when speaker icon is clicked
		// 	var timeOut;
		// 	var $speakerImage;
		// 	var associatedSoundCloud;
			
		// 	event.preventDefault();  //prevent clicking the speaker from folling the link its nested in
		// 	$speakerImage = $(this);  //store a reference to the actual clicked button	
		// 	$speakerImage.attr("src", "img/speaker-sound-invert.png")  // change the image's src attribute to the other speaker image

		// 	timeOut = setTimeout(function(){  //this all changes the image back after 1000 miliseconds
		// 	$speakerImage.attr("src", "img/speaker-sound.png")
		// 	}, 1000);

		// 	$speakerImage.parent().parent().next().slideToggle('slow');
		// });



		// Accept a paragraph and return a formatted paragraph with additional html tags
		function formatWords(sentence, show) {

			// split all the words and store it in an array
			var words = sentence.split(' ');
			var new_sentence = '';

			// loop through each word
			for (i = 0; i < words.length; i++) {

				// process words that will visible to viewer
				if (i <= show) {
					new_sentence += words[i] + ' ';
					
				// process the rest of the words
				} else {
					// add read more link in the very end
					if (words[i+1] == null){ new_sentence += '...';
					}
				} 		
			} 

		return new_sentence;

		}


		$(function () {

			// Grab all the excerpt class
			$('.excerpt').each(function () {
			
				// Run formatWord function and specify the length of words display to viewer
				$(this).html(formatWords($(this).html(), 50));
				
				// Hide the extra words
				$(this).children('span').hide();
			});
		});


		//*******************************
		//		STICKY NAV MENU 
		//*******************************

		//create div that will provide space for the header that's positioned absolute

		  var $headerSpaceHolder = $('<div class ="header-space-holder"></div>');
				$headerSpaceHolder.insertAfter('.header-wrapper-for-animation');
				


			function resizeHeaderSpaceHolder(){
				if(getWidth() >= 768){

							$headerSpaceHolder.css('width', $('header').innerWidth() + 'px');
							$headerSpaceHolder.css('height', $('header').innerHeight() + 'px');
 		
				}
			}

			resizeHeaderSpaceHolder(); //execute on load

			$(window).resize(resizeHeaderSpaceHolder);	//execute on window size change

			setTimeout(resizeHeaderSpaceHolder, 1500);
			setTimeout(resizeHeaderSpaceHolder, 3500);

			

		// media query change function
		// function WidthChange(mQuery768) {

		// 	if (mQuery768.matches) {
		// 		// window width is at least 768px
		// 		$headerSpaceHolder.css('width', $('header').innerWidth() + 'px');
		// 		$headerSpaceHolder.css('height', $('header').innerHeight() + 'px');
		// 	}
		// }

		//  // media query event handler
		// if (matchMedia) {
		// 	var mQuery768 = window.matchMedia("(min-width: 768px)");
		// 	mQuery768.addListener(WidthChange);
		// 	WidthChange(mQuery768);
		// }

		

		// Create a clone of the menu, right next to original.

		  $('.main-nav').addClass('original')

		  $navClone1 = $('.main-nav').clone().removeClass('original');
		  $navClone2 = $('.main-nav').clone().removeClass('original');

		  $navClone1.insertAfter('.main-nav').addClass('cloned')
			.css('position','fixed')
			.css('top','0')
			.css('padding-top','15px')
			.css('padding-bottom','15px')
			.css('margin-top','0')
			.css('z-index','500')
			.css('background-color', '#292929')
			.css('border-bottom-left-radius','10px')
			.css('border-bottom-right-radius','10px')
			.hide();

			$('.cloned').addClass('animateme');

			// $('.cloned').addClass('animateme').data({
			//  						  "when" : "exit",
			//  						  "from" : "0.8",
			//  						  "to" : "1",
			//  						  "opacity" : "0"
			//  						  });


			$navClone2.insertAfter('.cloned').addClass('second-clone')
				.css('position','fixed')
				.css('top','0')
				.css('margin-top','0')
				.css('z-index','600')


		scrollIntervalID = setInterval(stickIt, 10);


		function stickIt() {

			if(getWidth() < 768){

				//$cloned = '$(.mob-clone') 
				//$original = $('.mob-original')
				//$cloned .show()

				$('.cloned').hide(); //hide desktop
				$('.second-clone').hide();

			} else {

			  var orgElementPos = $('.original').offset();
			  orgElementTop = orgElementPos.top;               

			  if ($(window).scrollTop() >= (orgElementTop)) {
			    // scrolled past the original position; now only show the cloned, sticky element.

				   // Cloned element should always have same left position and width as original element.     
				   orgElement = $('.original');
				   coordsOrgElement = orgElement.offset();
				   leftOrgElement = coordsOrgElement.left;  
				   widthOrgElement = orgElement.width();

				   $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',(widthOrgElement + 35) +'px').css('bottom','initial').show();
				   $('.second-clone').css('left',leftOrgElement+'px').css('top',0).css('width',(widthOrgElement + 35) +'px').css('bottom','initial').show();
				   $('.original').css('visibility','hidden');
				} else {
				   // not scrolled past the menu; only show the original menu.
				   $('.cloned').hide();
				   $('.second-clone').hide();
				   $('.original').css('visibility','visible');
				}
			}
		}

		
	</script>
</html>