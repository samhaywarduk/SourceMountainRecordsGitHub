
<?php
$selectedSection = "home";

include('inc/header.php');
include('inc/news-data.php')

 
?>

	<div class="latest">
		<h2>Check out our latest!</h2>
		<div class="video-container">
			<iframe width="360" height="203" src="http://www.youtube.com/embed/tsEYEYplVjc" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<section class="news">
		<h2>News!</h2>
			<div class = "news-item">
				<h3><?php echo $news_data[108]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[108]["text"]; ?></p>
				<a href="news-item.php?id=108" class="see_full"> &raquo; See full</a>
				
			</div>
			<div class = "news-item">
				<h3><?php echo $news_data[107]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[107]["text"]; ?></p>
				<a href="news-item.php?id=107" class="see_full"> &raquo; See full</a>
				
			</div>
			<div class = "news-item">
				<h3><?php echo $news_data[106]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[106]["text"]; ?></p>
				<a href="news-item.php?id=106" class="see_full"> &raquo; See full</a>
				
			</div>
	</section>


				
<?php include('inc/footer.php'); ?>