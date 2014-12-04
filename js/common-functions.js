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