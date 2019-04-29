<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="UTF-8"> <!--Encodage pour les accents-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Sébastien" /> <!--Auteur-->
	<meta name="description" content="La balise <body> et la 2ème balise obligatoire à la construction d'une page HTML"> <!--Description du site-->
	<meta name="twitter:card" content="summary" /> <!--Indique le type de carte-->
	<meta name="twitter:title" content="Balise <body>"> <!--Son nom-->
	<meta name="twitter:url" content="#"> <!--URL de mon site-->
	<meta name="twitter:description" content="La balise <body> et la 2ème balise obligatoire à la construction d'une page HTML"> <!--La description de mon site-->
	<meta name="twitter:image" content="http://adresse_url_de_mon_image/monimage.jpg">
	<meta property="og:url" content="#" /><!--URL de mon site-->
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Balise <body>" />
	<meta property="og:description" content="La balise <body> et la 2ème balise obligatoire à la construction d'une page HTML" /><!--Description de mon site-->
	<meta property="og:image" content="http://adresse_url_de_mon_image/monimage.jpg" />
	<title>Définition de la balise &lt;body&gt;</title><!--Titre de la page-->
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
			<h1>Balise &lt;body&gt;</h1>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container">
			<h2>Définition :</h2>
			<p>La balise &lt;body&gt; et la 2ème balise obligatoire à la construction d'une page <a href="html.html" target="blank">HTML</a> avec la balise &lt;head&gt;. Ce bloc constitue le corp principal de la page, celui qui contient tout ce que verra l'utilisateur, tout le contenu du site. Celui-ci peux être divisé en plusieurs plusieurs sous bloc pour plus de clarté comme par exemple avec la balise &lt;header&gt;, &lt;nav&gt;, &lt;section&gt; et &lt;footer&gt;. Mais il n'y a aucune obligation.</p>
		</div>
	</section>
	<section class="secdark container-fluid">
		<div class="container">
			<h3 class="h3light">Exemple :</h3>
			<img class="imgstruc img-fluid" src="images/body.jpg" alt="Image d'exemple d'utilisation de la balise body" />	
		</div>	
	</section>
	
	<section id="arrow">
		<div id="flecheNavigation">
	        <a href="a.php"><img src="images/left-arrow.png" alt="Flèche gauche pour passer à la définition précédente" width="12" height="12"></a>
	        <span class="text">Page précédente</span>
	        <span id="separate">|</span>
	        <span class="text">Page suivante</span>
	        <a href="div.php"><img src="images/right-arrow.png" alt="Flèche droit pour passer à la définition suivante" width="12" height="12"></a>
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