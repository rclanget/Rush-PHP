<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Titre de la page</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="script.js"></script>
</head>
<body>
	<?php include('header.php'); ?>
	<section class="products_content">
		<div class="center">
			<div class="filter_products">
				<h4>Filtre</h4>
				<div class="filter_products__search">
					<input type="text" placeholder="Search by Keyword">
				</div>
				<div class="filter_products__category">
					<h5>Category</h5>
					<input type="checkbox"><label>Choix #1</label>
					<input type="checkbox"><label>Choix #2</label>
					<input type="checkbox"><label>Choix #3</label>
					<input type="checkbox"><label>Choix #4</label>
					<input type="checkbox"><label>Choix #5</label>
					<input type="checkbox"><label>Choix #6</label>
				</div>
			</div>
			<div class="results_products">
				<section class="results_products__group">
					<h3>Burger</h3>
					<article class="results_products__group___elem">
						<a href="details.php">
						<img src="http://themes.goodlayers2.com/delicieux/wp-content/uploads/2012/11/3168342551_1bdce9613a_b.jpg">
						<div class="results_products__group___elem____infos">
							<h4>Title</h4>
							<p>5 tiger shrimps, garlic, butter, lemon, herbs, 5 tiger shrimps, garlic, butter, lemon, herbs</p>
						</div>
						</a>
						<div class="results_products__group___elem____price">
							<p>9.95</p>
							<div class="results_products__group___elem____price____options">
								<a href="#">Options</a>
							</div>
						</div>
						<div class="results_products__group___elem____add">
							<!-- <div class="results_products__group___elem____add_____confirmbtn"> -->
								<a href="#">ADD TO PANNIER</a>
							<!-- </div> -->
						</div>
					</article>
				</section>
			</div>
		</div>
	</section>
	<?php incude('footer.php'); ?>
</body>
</html>