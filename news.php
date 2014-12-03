<?php
$selectedSection = "news";
?>

<?php 
include('inc/header.php');
include('inc/news-data.php');
?>

<?php include('inc/partials/back-home.html.php'); ?>

<section class="news">
		<h2>News!</h2>

		<?php foreach ($news_data as $news_id => $news_item) { ?>

			<div class = "news-item">
				<h3><?php echo $news_item["title"]; ?></h3>
				<p class = "excerpt"><?php echo $news_item["text"]; ?></p>
				<a href="news-item.php?id=<?php echo $news_id; ?>" class="see_full"> &raquo; See full</a>
			</div>
			
		<?php } ?>

			
	</section>
				
<?php include('inc/footer.php'); ?>