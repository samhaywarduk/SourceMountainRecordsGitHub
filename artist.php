 <?php
 include("inc/artist-data.php");

if (isset($_GET["id"])) {
	$artist_id = $_GET["id"];
	if (isset($artist_data[$artist_id])) {
		$artist = $artist_data[$artist_id];
	}
}
if (!isset($artist)) {
	header("Location: artists.php");
	exit();
}
?>




 <?php include('inc/header.php'); ?>

<section class="artist-profile">
	<h2><?php echo $artist["name"];?></h2>

	<div class="artist-image-container">
		<img src="<?php echo $artist["image"]; ?>">
	</div>
	<p><?php echo $artist["bio"]; ?></p>

	<div class="artist-videos">
		<div class="video-container">
			<iframe width="360" height="203" src="//www.youtube.com/embed/z-DfWk9FlOU" frameborder="0" allowfullscreen></iframe>
		</div>
	
		<div class="video-container">
			<iframe width="360" height="203" src="//www.youtube.com/embed/tsEYEYplVjc" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<div class="artist-soundClouds">
		<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/160983442&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
	
		<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/166979689&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
	
		<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/169526019&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
	</div>
</section>

<pre>
<?php var_dump($artist_data); ?>
</pre>


<?php include('inc/footer.php'); ?>