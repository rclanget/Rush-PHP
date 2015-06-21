<?php
	include('base.php');
	include('functions/get_cmd.php');
	include('functions/get_user.php');
	include('functions/get_art.php');
	include('functions/get_arts.php');
	include('functions/del_cmd.php');
	include('functions/get_types.php');
	include('functions/add_art.php');
	if ($_SESSION['admin'] != 1)
		header('Location: index.php?error=Vous ne disposez pas des droits pour accéder à cette page.');
	if ($_GET['d'])
	{
		del_art($_GET['d']);
		header('Location: admin.php');
	}
	if ($_POST)
	{	
		$tab[] = $_POST['titre'];
		$tab[] = $_POST['description'];
		$tab[] = $_POST['prix'];
		$tab[] = $_POST['url'];
		if ($_POST['categorie1'])
			$tab[] = $_POST['categorie1'];
		if ($_POST['categorie2'])
			$tab[] = $_POST['categorie2'];
		if ($_POST['categorie3'])
			$tab[] = $_POST['categorie3'];
		add_art($tab);
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
						<?php 
							$art = get_arts(); 
							foreach ($art as $value) {
						?>
						<tr>
							<td><?php echo $value[0]; ?></td>
							<td><?php echo $value[1]; ?></td>
							<td><?php echo $value[3]; ?></td>
							<td><button class="admin_details__content___table____btnmodif">Modifier</button></td>
							<td><a href="admin.php?d=<?php echo $value[0]; ?>"><button class="pannier_details__content___table____btnsuppr">X</button></a></td>
						</tr>
						<?php
							}
						?>
					</table>
				</div>
				<div class="inscription_details__content___form">
					<h4>Ajout d'un article</h4>
					<form method="post" action="admin.php" class="inscription_details__content___form_f">
						<label>Titre</label>
						<input name="titre" type="text" required>

						<label>Description</label>
						<textarea name="description" required></textarea>

						<label>Prix</label>
						<input name="prix" type="text" required>

						<label>URL image</label>
						<input name="url" type="text" required>

						<label>Categories</label>
						<select name="categorie1">
							<option value="0">-</option>
						<?php
							$categories = get_type();
							foreach ($categories as $categorie)
							{
						?>
							<option value="<?php echo $categorie[0]; ?>"><?php echo $categorie[1]; ?></option>
						<?php
							}
						?>
						</select>
						<select name="categorie2">
							<option value="0">-</option>
						<?php
							
							foreach ($categories as $categorie)
							{
						?>
							<option value="<?php echo $categorie[0]; ?>"><?php echo $categorie[1]; ?></option>
						<?php
							}
						?>
						</select>
						<select name="categorie3">
							<option value="0">-</option>
						<?php
							
							foreach ($categories as $categorie)
							{
						?>
							<option value="<?php echo $categorie[0]; ?>"><?php echo $categorie[1]; ?></option>
						<?php
							}
						?>
						</select>

						<button type="submit">Valider</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>