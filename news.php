<?php 
include('inc/header.php');
include('inc/news-data.php');
?>

<span class="go-back">
	<a href="index.php">Home</a>
</span>

<section class="news oFloAuto">
		<h2>News!</h2>
			<div class = "news-item">
				<h3><?php echo $news_data[108]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[108]["text"]; ?></p>
				<a href="news-item.php?id=108" class="see_full"> &raquo; See full</a>
				<hr>
			</div>
			<div class = "news-item">
				<h3><?php echo $news_data[107]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[107]["text"]; ?></p>
				<a href="news-item.php?id=107" class="see_full"> &raquo; See full</a>
				<hr>
			</div>
			<div class = "news-item">
				<h3><?php echo $news_data[106]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[106]["text"]; ?></p>
				<a href="news-item.php?id=106" class="see_full"> &raquo; See full</a>
				<hr>
			</div>
			<div class = "news-item">
				<h3><?php echo $news_data[105]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[105]["text"]; ?></p>
				<a href="news-item.php?id=105" class="see_full"> &raquo; See full</a>
				<hr>
			</div>
			<div class = "news-item">
				<h3><?php echo $news_data[104]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[104]["text"]; ?></p>
				<a href="news-item.php?id=104" class="see_full"> &raquo; See full</a>
				<hr>
			</div>
			<div class = "news-item">
				<h3><?php echo $news_data[103]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[103]["text"]; ?></p>
				<a href="news-item.php?id=103" class="see_full"> &raquo; See full</a>
				<hr>
			</div>
			<div class = "news-item">
				<h3><?php echo $news_data[102]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[102]["text"]; ?></p>
				<a href="news-item.php?id=102" class="see_full"> &raquo; See full</a>
				<hr>
			</div>
			<div class = "news-item">
				<h3><?php echo $news_data[101]["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_data[101]["text"]; ?></p>
				<a href="news-item.php?id=101" class="see_full"> &raquo; See full</a>
				<hr>
			</div>
	</section>
				
<?php include('inc/footer.php'); ?>