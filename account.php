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
					<form method="post" action="#" class="inscription_details__content___form_f">
						<label>Nom</label>
						<input type="text" required>

						<label>Prenom</label>
						<input type="text" required>

						<label>E-Mail</label>
						<input type="email" required>

						<label>Mot de passe</label>
						<input type="password" required>

						<label>Confirmation du mot de passe</label>
						<input type="password" required>

						<button>Valider les modifications</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php incude('footer.php'); ?>
</body>
</html>