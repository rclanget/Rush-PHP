<?php
	include('base.php');
	if ($_GET['b'] == 1)
	{
		$_SESSION['pannier'][] = $_GET['p'];
	}
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
	if (!$_GET || get_art($_GET['p']) == NULL)
		header('Location: index.php?error=Page non trouvée.');
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
						<a href="details.php?p=<?php echo $_GET['p']; ?>&b=1">ADD TO PANIER</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>