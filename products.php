<?php
	include('base.php');
	include('functions/get_arts.php');
	include('functions/get_types.php');
	if ($_GET['b'] == 1)
	{
		$_SESSION['pannier'][] = $_GET['p'];
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
	<section class="products_content">
		<div class="center">
			<div class="filter_products">
				<h4>Filtre</h4>
				<div class="filter_products__search">
					<input type="text" placeholder="Search by Keyword">
				</div>
				<div class="filter_products__category">
					<h5>Category</h5>
					<?php 
						$categories = get_type();
						$j = 0;
						foreach ($categories as $categorie)
						{
							$tab_cat[$j++] = $categorie;
							if (get_arts_byid($categorie[0]))
							{
						?>
							<div class="vtff"><a href="products.php?c=<?php echo $categorie[0]; ?>"><?php echo $categorie[1]; ?></a></div>
						<?php
							}
						}
						?>
				</div>
			</div>
			<?php
				if ($_GET && $_GET['c'])
				{
			?>
			<div class="results_products">
				<?php
					if ($articles = get_arts_byid($_GET['c'])) {
				?>
				<section class="results_products__group">
					<h3><?php $tabtyp = get_types($_GET['c']); echo $tabtyp[0][0]; ?></h3>
					<?php
						foreach ($articles as $article)
						{ ?>
							<article class="results_products__group___elem">
								<a href="details.php?p=<?php echo $article[0]; ?>">
								<img src="<?php echo $article[4]; ?>">
								<div class="results_products__group___elem____infos">
									<h4><?php echo $article[1]; ?></h4>
									<p><?php echo $article[2]; ?></p>
								</div>
								</a>
								<div class="results_products__group___elem____price">
									<p><?php echo $article[3] ?>    .€</p>
									<div class="results_products__group___elem____price____options">
										<a href="#">Options</a>
									</div>
								</div>
								<div class="results_products__group___elem____add">
									<!-- <div class="results_products__group___elem____add_____confirmbtn"> -->
										<a href="products.php?p=<?php echo $article[0]; ?>&b=1">ADD TO PANNIER</a>
									<!-- </div> -->
								</div>
							</article>
					<?php }
					?>
				</section>
				<?php
					}
				?>
			</div>
			<?php
				}
				else
				{
			?>
			<div class="results_products">
				<?php
					$j = 0;
					while ($tab_cat[$j]) {
						if ($articles = get_arts_byid($tab_cat[$j][0])) {
				?>
				<section class="results_products__group">
					<h3><?php echo $tab_cat[$j][1]; ?></h3>
					<?php
						foreach ($articles as $article)
						{ ?>
							<article class="results_products__group___elem">
								<a href="details.php?p=<?php echo $article[0]; ?>">
								<img src="<?php echo $article[4]; ?>">
								<div class="results_products__group___elem____infos">
									<h4><?php echo $article[1]; ?></h4>
									<p><?php echo $article[2]; ?></p>
								</div>
								</a>
								<div class="results_products__group___elem____price">
									<p><?php echo $article[3] ?>    €</p>
									<div class="results_products__group___elem____price____options">
										<a href="#">Options</a>
									</div>
								</div>
								<div class="results_products__group___elem____add">
									<!-- <div class="results_products__group___elem____add_____confirmbtn"> -->
										<a href="products.php?p=<?php echo $article[0]; ?>&b=1">ADD TO PANNIER</a>
									<!-- </div> -->
								</div>
							</article>
					<?php }
					?>
				</section>
				<?php
					}
					$j++;
				}
				?>
			</div>
			<?php
				}
			?>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>