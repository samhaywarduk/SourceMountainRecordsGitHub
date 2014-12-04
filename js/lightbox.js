
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