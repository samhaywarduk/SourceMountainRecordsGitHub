
		//*******************************
		//		STICKY NAV MENU 
		//*******************************


		function stickIt() {

			if(getWidth() < 768){

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

		//*********************HEADER SPACE HOLDER************************************


		//create div that will provide space for the header that's positioned absolute

		  var $headerSpaceHolder = $('<div class ="header-space-holder"></div>');  //create empty div with jquery
				$headerSpaceHolder.insertAfter('.header-wrapper-for-animation');  //insert the empty div 
				

			function resizeHeaderSpaceHolder(){
				if(getWidth() >= 768){  //if not in mobile view..

					$headerSpaceHolder.css('width', $('header').innerWidth() + 'px');  //make the empty div have the same dimensions as the header, so it acts as padding behind it to push down the page content
					$headerSpaceHolder.css('height', $('header').innerHeight() + 'px');
 		
				}
			}

			resizeHeaderSpaceHolder(); //execute on load

			$(window).resize(resizeHeaderSpaceHolder);	//execute on window size change

			//due to the resizeHeaderSpaceHolder function executing as the page is loaded, sometimes it happens before the header is fully rendered, causing the $headerSpaceHolder to be the wrong size. The following executes the function after different timing intervals after page load. The different times accomodate for different browser loading speeds. 500ms for the quickest, 3500 for the slowest

			setTimeout(resizeHeaderSpaceHolder, 500);  
			setTimeout(resizeHeaderSpaceHolder, 1500);
			setTimeout(resizeHeaderSpaceHolder, 3500);
			


		//*******************CLONING OF NAV**************************************

		// Create a clone of the menu, right next to original.

		  $('.main-nav').addClass('original')  //first, add 'original' class to the original

		  //create two clones, and remove the 'original' class
		  $navClone1 = $('.main-nav').clone().removeClass('original');  //to give the sticky nav a background
		  $navClone2 = $('.main-nav').clone().removeClass('original');	//additional layer that only shows the text of the nav

		  $navClone1.insertAfter('.main-nav').addClass('cloned')  //insert first clone after the original nav and add class 'cloned'
		    //add css styles to the cloned nav
			.css('position','fixed')  //fixed to the browser viewport
			.css('top','0')  //fixed to the very top of the viewport
			.css('padding-bottom','15px')  //add padding bottom for the background colour to fill
			.css('margin-top','0')  //no top margin
			.css('z-index','500')  //put the nav infront of other elements 
			.css('background-color', '#292929')  //adds a background colour so the nav is clear against the rest of the page
			.css('border-bottom-left-radius','10px')  //standard rounded corners
			.css('border-bottom-right-radius','10px')
			.hide();  //initially hide the nav

			$('.cloned').addClass('animateme');  //add the 'animateme' class to the first clone

			$navClone2.insertAfter('.cloned').addClass('second-clone') //insert second clone after first clone and give it the class 'second-clone'
				.css('position','fixed')  //also position it fixed
				.css('top','0')  //top position 0 and 0 top margin, same as the first clone
				.css('margin-top','0')
				.css('z-index','600')  //make the z index higher than the first clone so that the second clone (the nav text) is on top


		scrollIntervalID = setInterval(stickIt, 10);

	