<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="UTF-8"> <!--Encodage pour les accents-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Bryan" /> <!--Auteur-->
	<meta name="description" content="L'élément HTML <div> qui signifie division du document est un conteneur générique"> <!--Description du site-->
	<meta name="twitter:card" content="summary" /> <!--Indique le type de carte-->
	<meta name="twitter:title" content="Balise <html> - Comment utiliser la balise <div> en HTML5"> <!--Son nom-->
	<meta name="twitter:url" content="#"> <!--URL de mon site-->
	<meta name="twitter:description" content="L'élément HTML div qui signifie division du document est un conteneur générique"> <!--La déscription de mon site-->
	<meta name="twitter:image" content="http://adresse_url_de_mon_image/monimage.jpg">
	<meta property="og:url" content="#" /><!--URL de mon site-->
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Balise <html> - Comment utiliser la balise <div> en HTML5" />
	<meta property="og:description" content="L'élément HTML <div> qui signifie division du document est un conteneur générique" /><!--Description de l'article-->
	<meta property="og:image" content="http://adresse_url_de_mon_image/monimage.jpg " />
	<title>Définition de la balise &lt;div&gt;</title><!--Titre de la page-->
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
			<h1>Balise &lt;div&gt;</h1>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container">
			<h2>Définition :</h2>
			<p>L'élément HTML &lt;div&gt; qui signifie division du document est un conteneur générique qui permet d'organiser le contenu sans représenter rien de particulier. <br /> 
			Il peut être utilisé afin de grouper d'autres éléments pour leur appliquer un style (en utilisant les attributs class ou id) ou parce qu'ils partagent des attributs aux valeurs communes, tel que lang.<br />
			Il doit uniquement être utilisé lorsqu'aucun autre élément sémantique (par exemple &lt;article&gt; ou &lt;nav&gt;) n'est approprié.</p>
			<br />
		</div>
    </section>
        
    <section class="secdark container-fluid">
		<div class="container">
			<h3 class="h3light">Exemple :</h3>
			<img class="imgstruc img-fluid" src="images/div.jpg" alt="Image d'exemple d'utilisation avec la balise div">
		</div>
	</section>
	
	<section id="arrow">
		<div id="flecheNavigation">
	        <a href="body.php"><img src="images/left-arrow.png" alt="Flèche gauche pour passer à la définition précédente" width="12" height="12"></a>
	        <span class="text">Page précédente</span>
	        <span id="separate">|</span>
	        <span class="text">Page suivante</span>
	        <a href="html.php"><img src="images/right-arrow.png" alt="Flèche droit pour passer à la définition suivante" width="12" height="12"></a>
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