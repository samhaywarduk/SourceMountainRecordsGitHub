<?php
$selectedSection = "gallery";
?>

<?php 
	include('inc/header.php');
	include('inc/gallery-data.php')
?>
	
	<?php include('inc/partials/back-home.html.php'); ?>

	<h2>Lorizzle ipsizzle dolor check out this amizzle, consectetuer adipiscing elit. That's the shizzle that's the shizzle velit, for sure volutpizzle.</h2>

	<section class="oFloAuto">

		<ul class="image-gallery clear">

			<?php foreach($gallery_data as $gallery_item){ ?>

			<li class="oFloAuto">
				<a href="<?php echo $gallery_item['source']; ?>">
					<img src="<?php echo $gallery_item['source']; ?>">
					<p><?php echo $gallery_item['caption']; ?> </p>
				</a>
			</li>

			<?php } ?>

		</ul>

	</section>
<?php include('inc/footer.php'); ?>