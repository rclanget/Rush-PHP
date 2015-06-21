<?php
	include('base.php');
	if (!isset($_GET))
		header("location: index.php?error=Page non trouvée.");
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Titre de la page</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="script.js"></script>
</head>
<body>
	<?php 
	include('functions/get_art.php');
	$details = get_art($_GET['p']);
	include('header.php'); 
	?>
	<div class="products_details__header" style="background-image: url(<?php echo $details[4]; ?>)">
	</div>
	<div class="center">
		<div class="products_details">
			<div class="products_details__content">
				<div class="products_details__content___title">
					<h1><?php echo $details[1]; ?></h1>
				</div>
				<div class="products_details__content___center">
					<div class="products_details__content___description">
						<p><?php echo $details[2]; ?></p>
					</div>
				</div>
				<div class="products_details__content___aside">
					<div class="products_details__content___aside____price">
						<p>€ <?php echo $details[3]; ?></p>
					</div>
					<div class="products_details__content___aside____add">
						<a href="#">ADD TO PANIER</a>
					</div>
					<div class="products_details__content___aside____categorie">
						<h3>Categories</h3>
						<ul>
							<a href=""><li>#1 cat</li></a>
							<a href=""><li>#2 cat</li></a>
							<a href=""><li>#3 cat</li></a>
							<a href=""><li>#4 cat</li></a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>