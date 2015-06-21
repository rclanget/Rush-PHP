<?php
	include('base.php');
	include('functions/get_art.php');
	include('functions/add_cmd.php');
	if (isset($_GET['d']))
	{
		unset($_SESSION['pannier'][$_GET['d']]);
		$_SESSION['pannier'] = array_values($_SESSION['pannier']);
		header('Location: pannier.php');
	}
	if ($_POST)
	{
		add_cmd($_SESSION['logged'], $_SESSION['pannier']);
		unset($_SESSION['pannier']);
		header('Location: pannier.php?success=Votre commande a été validé.');
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
						<?php
							foreach ($_SESSION['pannier'] as $key => $value) {
								$j = 1;
								$tab = get_art($value);
						?>
						<tr>
							<td><?php echo $tab[1]; ?></td>
							<td><?php echo $tab[3]; ?> €</td>
							<td>1</td>
							<td><?php echo $tab[3]; ?> €</td>
							<td><a href="pannier.php?d=<?php echo $key; ?>"><button class="pannier_details__content___table____btnsuppr">X</button></a></td>
						</tr>
						<?php
							$total += $tab[3];
						}
						?>
						<tr>
							<td></td>
							<td></td>
							<td><strong>Total</strong></td>
							<td><strong><?php echo $total; ?> €</strong></td>
							<td></td>
						</tr>
					</table>
					<?php 
						if ($_SESSION['logged'] && ($j == 1))
						{
					?>
					<form method="post" action="pannier.php">
						<input type="hidden" name="cmd">
						<button type="submit" class="pannier_details__content___table____btnvalid">Valider</button>
					</form>
					<?php
						}
						else
						{
							echo "<p style=\"text-align: right; color: red;\">Vous devez être connecté et ajouter des articles pour commander.</p>";
						}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>