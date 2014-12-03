<?php
$selectedSection = "artists";
?>

<?php
	include('inc/header.php');
	include('inc/artist-data.php');
?>

<?php include('inc/partials/back-home.html.php'); ?>

<section class="oFloAuto">

	<ul class="artists clear">

		<?php foreach ($artist_data as $artist_id => $artist) { ?>

		<li class="oFloAuto">
			<div class="artist-image">
				<a href="artist.php?id=<?php echo $artist_id; ?>">
					<h2><?php echo $artist['name']; ?></h2>
					<img src="<?php echo $artist['artistsPageImage']; ?>">
				</a>
			</div>
			<div class="soundCloudSample">
				<?php echo $artist['soundCloud'][0]; ?>
			</div>
		</li>
			
		<?php } ?>

	</ul>

</section>

<?php include('inc/footer.php'); ?>