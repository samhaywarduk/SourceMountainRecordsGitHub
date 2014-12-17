<?php
$selectedSection = "gallery";
?>

<?php 
	include('inc/header.php');
	include('inc/gallery-data.php')
?>
	
	<?php include('inc/partials/back-home.html.php'); ?>

	<h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et.</h2>

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