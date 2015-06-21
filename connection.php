<?php
	include('base.php');
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
					<h1>Connexion</h1>
				</div>
				<div class="inscription_details__content___form">
					<form method="post" action="login.php" class="inscription_details__content___form_f">
						<label>Pseudo</label>
						<input name="pseudo" type="text" required>

						<label>Mot de passe</label>
						<input name="password" type="password" required>

						<button type="submit">Connexion</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>