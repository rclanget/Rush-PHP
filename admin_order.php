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
						<a href="admin.php"><li>Produits</li></a>
						<a href="admin_order.php"><li class="onglet_act">Commandes</li></a>
						<a href="admin_members.php"><li>Membres</li></a>
					</ul>
				</div>
				<div class="pannier_details__content___table">
					<table>
						<tr>
							<th>Membre</th>
							<th>N˚ Commande</th>
							<th>Total</th>
							<th>Supprimer</th>
						</tr>
						<tr>
							<td>Charles J.</td>
							<td>#C1200</td>
							<td>19.98</td>
							<td><button class="pannier_details__content___table____btnsuppr">X</button></td>
						</tr>
						<tr>
							<td>Charles J.</td>
							<td>#C1200</td>
							<td>19.98</td>
							<td><button class="pannier_details__content___table____btnsuppr">X</button></td>
						</tr>
						<tr>
							<td>Charles J.</td>
							<td>#C1200</td>
							<td>19.98</td>
							<td><button class="pannier_details__content___table____btnsuppr">X</button></td>
						</tr>
						<tr>
							<td>Charles J.</td>
							<td>#C1200</td>
							<td>19.98</td>
							<td><button class="pannier_details__content___table____btnsuppr">X</button></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>