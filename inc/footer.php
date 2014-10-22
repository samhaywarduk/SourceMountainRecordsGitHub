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
				$('iframe').attr(vidDimensionsTablet);  //set the iframe(youtube) height & width attributes
			}
			if(getWidth() >= 922){
				$('iframe').attr(vidDimensionsDesktop);
			}
			if(getWidth() < 768){  //this isnt needed in the initial page load function call as the smallest setting is the default (see the attributes of the iframe in html)
		 		$('iframe').attr(vidDimensionsMobile);
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
	</script>
</html>