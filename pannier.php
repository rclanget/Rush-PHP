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
	<div class="inscription_details__header" style="background-image: url(http://themes.goodlayers2.com/delicieux/wp-content/uploads/2012/11/3168342551_1bdce9613a_b.jpg)">
	</div>
	<div class="center">
		<div class="products_details">
			<div class="products_details__content">
				<div class="pannier_details__content___title">
					<h1>Pannier</h1>
				</div>
				<div class="pannier_details__content___table">
					<table>
						<tr>
							<th>Produits</th>
							<th>Prix unitaire</th>
							<th>Quantitée</th>
							<th>Total</th>
							<th>Supprimer</th>
						</tr>
						<tr>
							<td>Produit 1</td>
							<td>9.99</td>
							<td>2</td>
							<td>19.98</td>
							<td><button class="pannier_details__content___table____btnsuppr">X</button></td>
						</tr>
						<tr>
							<td>Produit 1</td>
							<td>9.99</td>
							<td>2</td>
							<td>19.98</td>
							<td><button class="pannier_details__content___table____btnsuppr">X</button></td>
						</tr>
						<tr>
							<td>Produit 1</td>
							<td>9.99</td>
							<td>2</td>
							<td>19.98</td>
							<td><button class="pannier_details__content___table____btnsuppr">X</button></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><strong>Total</strong></td>
							<td><strong>59.94</strong></td>
							<td></td>
						</tr>
					</table>
					<button class="pannier_details__content___table____btnvalid">Valider</button>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>