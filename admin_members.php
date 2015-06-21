<?php
	include('base.php');
	include('functions/get_user.php');
	include('functions/get_users.php');
	include('functions/del_user.php');
	include('functions/get_admins.php');
	if ($_SESSION['admin'] != 1)
		header('Location: index.php?error=Vous ne disposez pas des droits pour accéder à cette page.');	
	if ($_GET['d'])
	{
		del_user($_GET['d']);
		header('Location: admin_members.php');
	}
	if ($_GET['a'])
	{
		go_admin($_GET['a'], $_GET['bol']);
		header('Location: admin_members.php');
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
						<a href="admin.php"><li>Produits</li></a>
						<a href="admin_order.php"><li>Commandes</li></a>
						<a href="admin_members.php"><li class="onglet_act">Membres</li></a>
					</ul>
				</div>
				<div class="pannier_details__content___table">
					<table>
						<tr>
							<th>Membre ID</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Pseudo</th>
							<th>Admin</th>
							<th>Supprimer</th>
						</tr>
						<?php 
							$users = get_users(); 
							foreach ($users as $user) {
						?>
						<tr>
							<td><?php echo $user[0]; ?></td>
							<td><?php echo $user[2]; ?></td>
							<td><?php echo $user[3]; ?></td>
							<td><?php echo $user[4]; ?></td>
							<td><a href="admin_members.php?a=<?php echo $user[0]; ?>&bol=<?php echo $user[1]; ?>"><button class="admin_details__content___table____btnadmin" style="<?php if ($user[1]) { echo "background-color: green;";} ?>"><?php echo $user[1]; ?></button></a></td>
							<td><a href="admin_members.php?d=<?php echo $user[0]; ?>"><button class="pannier_details__content___table____btnsuppr">X</button></a></td>
						</tr>
						<?php
							}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>