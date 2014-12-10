<?php
$selectedSection = "news";
?>


<?php
include('inc/header.php');
include('inc/news-data.php');

if (isset($_GET["id"])) {
	$news_id = $_GET["id"];
	if (isset($news_data[$news_id])) {
		$news_item = $news_data[$news_id];
	}
}
if (!isset($news_item)) {
	header("Location: news.php");
	exit();
}

?>


<span class="go-back">
	<a href="news.php">Back to news</a>
</span>


<section class="news">
	<div class = "news-item full">
		<h3><?php echo $news_item["title"]; ?></h3>
		<p><?php echo $news_item["text"]; ?></p>
		  <!-- videos generated by php using $artist-data array -->
		<?php 

		if (isset($news_item["video"])){  //if there are any videos in this news item
			foreach($news_item["video"] as $video){ ?> <!-- // loop through them and display them -->
				<div class="artist-videos">
					<div class="video-container">
						<?php echo $video; ?>
					</div>
				</div>
	  <?php } 
		} ?>

	  <?php
		if (isset($news_item["soundCloud"])){
			foreach($news_item["soundCloud"] as $soundCloud){ ?>  <!-- // loop through them and display them -->
				<div class="artist-soundClouds">
					<?php echo $soundCloud; ?>
				</div>
	  <?php }
		} ?>
			
	</div>
</section>

<?php include('inc/footer.php'); ?>