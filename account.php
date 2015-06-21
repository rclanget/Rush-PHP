<?php
	include('base.php');
	include('functions/get_user.php');
	include('functions/update_user.php');
	if ($_POST)
	{
		$tab[0] = $_SESSION['logged'];
		$tab[1] = $_POST['nom'];
		$tab[2] = $_POST['prenom'];
		$tab[3] = $_POST['pseudo'];
		if ($_POST['password'])
			$tab[4] = $_POST['password'];
		else
			$tab[4] = NULL;
		update_user($tab);
		header('Location: account.php?success=informations mises à jour.');
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
				<div class="inscription_details__content___title">
					<h1>Modification</h1>
				</div>
				<div class="inscription_details__content___form">
					<form method="post" action="account.php" class="inscription_details__content___form_f">
						<?php $user = get_user($_SESSION['logged']); ?>
						<label>Nom</label>
						<input type="text" name="nom" value="<?php echo $user[2]; ?>" required>

						<label>Prenom</label>
						<input type="text" name="prenom" value="<?php echo $user[3]; ?>" required>

						<label>Pseudo</label>
						<input type="text" name="pseudo" value="<?php echo $user[4]; ?>" required>

						<label>Mot de passe</label>
						<input name="password" type="password">

						<button type="submit">Valider les modifications</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>