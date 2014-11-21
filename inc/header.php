<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Source Mountain Records</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link href='http://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="page-wrapper">
			<div class="menu-toggle"> <!-- mobile -->
				<img src="img/toggle-menu.png">
			</div>					  <!-- /mobile -->
			<header>
				<div class="header-content clear">
					<nav class="mob-nav"> <!-- mobile -->
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="artists.php">Artists &amp; Music</a></li>
							<li><a href="news.php">News</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="about-contact.php">About &#47; Contact</a></li>
						</ul>
					</nav>				  <!-- /mobile -->
	
					<div class="logo-container">
						<a href="index.php"><img src="img/logo-neg.png"></a>
					</div>
					
					<nav class="main-nav">
						<ul>
							<li <?php if ($selectedSection == "home") { echo 'class = "selected"';} ?> ><a href="index.php">Home</a></li>
							<li <?php if ($selectedSection == "artists") { echo 'class = "selected"';} ?> ><a href="artists.php">Artists &amp; Music</a></li>
							<li <?php if ($selectedSection == "news") { echo 'class = "selected"';} ?> ><a href="news.php">News</a></li>
							<li <?php if ($selectedSection == "gallery") { echo 'class = "selected"';} ?> ><a href="gallery.php">Gallery</a></li>
							<li <?php if ($selectedSection == "about") { echo 'class = "selected"';} ?> ><a href="about-contact.php">About &#47; Contact</a></li>
						</ul>
					</nav>
					<div class="social-main">
						<p>Join us on <a href="https://www.facebook.com/sourcemountainrecords">Facebook</a> and <a href="https://soundcloud.com/source-mountain-records">SoundCloud!</a></p>
					</div>
				</div>
			</header>

			<section class="main-content clear">