

	//**********************************
	//	NEWS EXCERPT 'SEE MORE' MAKER
	//**********************************


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
			$(this).html(formatWords($(this).html(), 50));  //displays 50 words
			
			// Hide the extra words
			$(this).children('span').hide();
		});
	});
