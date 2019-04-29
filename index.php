<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="UTF-8"> <!--Encodage pour les accents-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Sébastien, Dorian et Bryan" /> <!--Auteur-->
	<meta name="description" content="Les Machistadors vous explique l'utilité des balises du language HTML"> <!--la description du site-->
	<meta name="twitter:card" content="summary" /> <!--Indique le type de carte-->
	<meta name="twitter:title" content="Les balises HTML"> <!--Son nom-->
	<meta name="twitter:url" content="#"> <!--URL de mon site-->
	<meta name="twitter:description" content="Les Machistadors vous explique l'utilité des balises du language HTML"> <!--La description de mon site-->
	<meta name="twitter:image" content="images/image.jpg">
	<meta property="og:url" content="#" /><!--URL de mon site-->
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Les balises HTML" />
	<meta property="og:description" content="Les Machistadors vous explique l'utilité des balises du language HTML" /><!--la description de mon site-->
	<meta property="og:image" content="images/image.jpg" />
	<title>Les balises en language HTML</title><!--Titre de la page-->
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
			<h1>Définitions des balises HTML</h1>
		</div>
	</section>

	<section class="seclight container-fluid">
		<div class="container">
			<h2 class="h2dark">Introduction au HTML</h2>
			
			<p class="textmarge">L’HyperText Markup Language, généralement abrégé HTML, est le langage de balisage conçu pour représenter les pages web. C’est un langage permettant d’écrire de l’hypertexte, d’où son nom. HTML permet également de structurer sémantiquement et logiquement et de mettre en forme le contenu des pages, d’inclure des ressources multimédias dont des images, des formulaires de saisie et des programmes informatiques.</p>

			<div class="row"> 
				<div class="embed-responsive embed-responsive-16by9">
					<iframe id="video" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/U4nbKMJRVaw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
		
        
        <section class="secdark container-fluid">
			<div class="container">
				<h3 class="h3light">La structure de nos pages :</h3>
				
				<img class="imgstruc img-fluid" src="images/exemple-structure.jpg" alt="Exemple de structuration de nos pages" />
			</div>		
        </section>
    
        <section class="seclight container-fluid">
       		<div class="container">
				<h3 class="h3dark">A savoir :</h3>
				<ul>
					<li>Nous avons utilisé des images au format Jpeg, et non PNG car le format d'image Jpeg est moins volumineux et va favoriser la vitesse de chargement du site. Nous aurions par contre pas eu le choix d'utiliser le format PNG si nous aurions eu besoin de garder de la transparence sur une image.</li>
				</ul>
				<ul>
					<li>Toutes nos pages sont structurés de la même manière, afin que ce soit cohérent pour l'utilisateur</li>
				</ul>
			</div>
	   </section>

	   <section id="arrow">
		<div id="flecheNavigation">
	        <span class="text">Page suivante</span>
	        <a href="a.php"><img src="images/right-arrow.png" alt="Flèche droit pour passer à la définition suivante" width="12" height="12"></a>
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