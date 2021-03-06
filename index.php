<?php
	include('base.php');
	include('functions/get_arts.php');
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
	<?php include('header.php') ?>
	<div class="slide">
		<h1>Bienvenue sur le site du Food Truck !</h1>
	</div>
	<section class="content">
		<div class="center">
			<div class="info_box">
				<div class="info_box__ico">
					<img src="http://188.226.173.21/takeaway/img/content/call-to-action-icon1.png">
				</div>
				<div class="info_box__content">
					<div class="info_box__content__text">
						<h2>Purchase TakeAway</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi..</p>
					</div>
					<div class="info_box__content_button">
						<button class="btn_white_red">Read More</button>
						<button class="btn_red_white">Purchase Now!</button>
					</div>
				</div>
			</div>
			<div class="content_menu">
				<a href="">
					<div id="cm1" class="content_menu__elem">
						<div class="content_menu__elem___couv">
							<div class="content_menu__elem___title">
								Menu #1
							</div>
						</div>
					</div>
				</a>
				<a href="">
					<div id="cm2" class="content_menu__elem">
						<div class="content_menu__elem___couv">
							<div class="content_menu__elem___title">
								Menu #2
							</div>
						</div>
					</div>
				</a>
				<a href="">
					<div id="cm3" class="content_menu__elem">
						<div class="content_menu__elem___couv">
							<div class="content_menu__elem___title">
								Menu #3
							</div>
						</div>
					</div>
				</a>
				<a href="">
					<div id="cm4" class="content_menu__elem">
						<div class="content_menu__elem___couv">
							<div class="content_menu__elem___title">
								Menu #4
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<?php 
		if (get_arts() != NULL)
		{
	?>
	<section class="last_products">
		<div class="center">
			<h3>Derniers produits ajoutés</h3>
			<?php
			$tab_lastadd = get_arts();
			$j = 0;
			foreach ($tab_lastadd as $article) {
				if ($j++ > 5)
					break;
			?>
			<a href="details.php?p=<?php echo $article[0]; ?>">
			<article class="last_products__elem">
				<div class="last_products__elem___img">
					<img src="<?php echo $article[4]; ?>">
				</div>
				<div class="last_products__elem___info">
					<h4><?php echo $article[1]; ?></h4>
					<p><?php echo $article[2]; ?></p>
					<button class="btn_ajout_pannier">Ajouter au panier</button>
				</div>
			</article>
			</a>
			<?php
			}
			?>
		</div>
	</section>
	<?php
	}
	?>
	<?php include('footer.php'); ?>
</body>
</html>