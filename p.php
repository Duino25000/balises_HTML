<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="UTF-8"> <!--Encodage pour les accents-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Sébastien" /> <!--Auteur-->
	<meta name="description" content="Les balises <p> servent de conteneur à un paragraphe"> <!--Description du site-->	
	<meta name="twitter:card" content="summary" /> <!--Indique le type de carte-->
	<meta name="twitter:title" content="Balises <p> <ul> <li> <br> <hr>"> <!--Son nom-->
	<meta name="twitter:url" content="#"> <!--URL de mon site-->
	<meta name="twitter:description" content="Les balises <p> servent de conteneur à un paragraphe"> <!--La description de mon site-->
	<meta name="twitter:image" content="http://adresse_url_de_mon_image/monimage.jpg">
	<meta property="og:url" content="#" /><!--URL de mon site-->
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Balises <p> <ul> <li> <br> <hr>" />
	<meta property="og:description" content="Les balises <p> servent de conteneur à un paragraphe." /><!--Description de mon site-->
	<meta property="og:image" content="http://adresse_url_de_mon_image/monimage.jpg" />
	<title>Définitions des balises &lt;p&gt; &lt;ul&gt; &lt;li&gt; &lt;br&gt; &lt;hr&gt;</title><!--Titre de la page-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<header class="container-fluid">
		<nav class="test container">
        	<?php include('menu.php'); ?>
		</nav>
	</header>
	
	<section class="container-fluid">
		<div class="container">
			<h1>Balises &lt;p&gt; &lt;ul&gt; &lt;li&gt; &lt;br&gt; &lt;hr&gt;</h1>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container">
			<h2>Définition balise &lt;p&gt; :</h2>
			<p class="textmarge">Les balises &lt;p&gt; servent de conteneur à un paragraphe.Son utilisation entraine l'apparition d'un saut de ligne avant et après son contenu.</p>
		</div>
	</section>

	<section class="secdark container-fluid">	
    <div class="container">
     	<h3 class="h3light">Exemple</h3>
			<img class="imgstruc img-fluid" src="images/p.jpg" alt="Image d'exemple d'utilisation de la balise p" />
		</div>
	</section>
		
	<section class="container-fluid">
		<div class="container">
			<h2>Définition balise &lt;ul&gt; et &lt;li&gt; : </h2>
			<p>Les balises &lt;ul&gt; &lt;li&gt; servent à créer un liste à puces ou liste non ordonnée. La balise &lt;ul&gt; servent à contenir toutes les balises &lt;li&gt; qui contiennent elles mêmes les différents choix de la liste. Celle-ci peux être contenue dans une balise &lt;nav&gt; pour structurer le code mais il n'y a aucune obligation.</p>
		</div>	
	</section>

  <section class="secdark container-fluid">
		<div class="container">
			<h3 class="h3light">Exemple</h3>
			<img class="imgstruc img-fluid" src="images/li.jpg" alt="Image d'exemple d'utilisation de la balise li" />
		</div>	
	</section>    

  <section class="container-fluid">
		<div class="container">
			<h2>Définition balise &lt;br&gt; : </h2>
			<p>Les balises &lt;br&gt; servent à insérer un saut à la ligne.</p>
		</div>	
	</section>

  <section class="secdark container-fluid">
		<div class="container">
			<h3 class="h3light">Exemple</h3>
			<img class="imgstruc img-fluid" class="imgstruc" src="images/br.jpg" alt="Image d'exemple d'utilisation de la balise br" />
		</div>
	</section>

  <section class="container-fluid">
		<div class="container">
			<h2>Définition balise &lt;hr&gt; : </h2>
			<p>Les balises &lt;hr&gt; servent à tracer un trait pour crée une sépartion. Celle-ci peux être modifiée avec des propirité CSS.</p>
		</div>
	</section>

  <section class="secdark container-fluid">
    <div class="container">
      <h3 class="h3light">Exemple</h3>
			<img class="imgstruc img-fluid" src="images/hr.jpg" alt="Image d'exemple d'utilisation de la balise hr" />	
		</div>
	</section>
	
	<section id="arrow">
		<div id="flecheNavigation">
	        <a href="link.php"><img src="images/left-arrow.png" alt="Flèche gauche pour passer à la définition précédente" width="12" height="12"></a>
	        <span class="text">Page précédente</span>
	        <span id="separate">|</span>
	        <span class="text">Page suivante</span>
	        <a href="table.php"><img src="images/right-arrow.png" alt="Flèche droit pour passer à la définition suivante" width="12" height="12"></a>
	    </div>
    </section>
    
	<footer>
		<?php include('footer.php'); ?>
	</footer>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>