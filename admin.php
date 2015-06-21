<?php
	include('base.php');
	if ($_SESSION['admin'] != 1)
		header('Location: index.php?error=Vous ne disposez pas des droits pour accéder à cette page.');
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
	<?php include('header.php'); ?>
	<div class="admin_details__header" style="background-image: url(http://themes.goodlayers2.com/delicieux/wp-content/uploads/2012/11/3168342551_1bdce9613a_b.jpg)">
	</div>
	<div class="center">
		<div class="products_details">
			<div class="products_details__content">
				<div class="pannier_details__content___title">
					<h1>Administration</h1>
					<ul>
						<a href="admin.php"><li class="onglet_act">Produits</li></a>
						<a href="admin_order.php"><li>Commandes</li></a>
						<a href="admin_members.php"><li>Membres</li></a>
					</ul>
				</div>
				<div class="pannier_details__content___table">
					<table>
						<tr>
							<th>Produit ID</th>
							<th>Nom</th>
							<th>Prix</th>
							<th>Modifier</th>
							<th>Supprimer</th>
						</tr>
						<tr>
							<td>#01</td>
							<td>Burger</td>
							<td>9.99</td>
							<td><button class="admin_details__content___table____btnmodif">Modifier</button></td>
							<td><button class="pannier_details__content___table____btnsuppr">X</button></td>
						</tr>
					</table>
					<button class="pannier_details__content___table____btnvalid">Ajouter un produit</button>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>