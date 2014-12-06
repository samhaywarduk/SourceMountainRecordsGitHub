
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

			setTimeout(resizeHeaderSpaceHolder, 500);
			setTimeout(resizeHeaderSpaceHolder, 1500);
			setTimeout(resizeHeaderSpaceHolder, 3500);
			


		//*******************CLONING OF NAV**************************************

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

			$navClone2.insertAfter('.cloned').addClass('second-clone')
				.css('position','fixed')
				.css('top','0')
				.css('margin-top','0')
				.css('z-index','600')


		scrollIntervalID = setInterval(stickIt, 10);

	