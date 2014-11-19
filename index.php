
<?php
 include('inc/header.php');
 include('inc/news-items.php')
 ?>

	<h1>Source Mountain Records</h1>
	<h2>Check out our latest!</h2>
	<div class="video-container">
		<iframe width="360" height="203" src="http://www.youtube.com/embed/nm2ZX7xH_jk" frameborder="0" allowfullscreen></iframe>
	</div>

	<section class="news oFloAuto">
		<h2>News!</h2>
			<div class = "news-item">
				<h3><?php echo $news_items[108]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_items[108]["text"]; ?></p>
				<hr>
			</div>
			<div class = "news-item">
				<h3><?php echo $news_items[107]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_items[107]["text"]; ?></p>
				<hr>
			</div>
			<div class = "news-item">
				<h3><?php echo $news_items[106]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_items[106]["text"]; ?></p>
				<hr>
			</div>
	</section>


				
<?php include('inc/footer.php'); ?>