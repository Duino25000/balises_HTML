<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Dorian" /> 
	<meta name="description" content="Cette balise est utilisée afin de créer des liens vers des lien internes ou externe : une autre page web, un e-mail, une image, une autre section du document, etc.."> 
	<meta name="twitter:card" content="summary" /> 
	<meta name="twitter:title" content="Definition balise <a>" /> 
	<meta name="twitter:url" content="#"> 
	<meta name="twitter:description" content="Cette balise est utilisée afin de créer des liens vers des lien internes ou externe : une autre page web, un e-mail, une image, une autre section du document, etc.."/> 
	<meta name="twitter:image" content="http://adresse_url_de_mon_image/monimage.jpg">
	<meta property="og:url" content="#" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Definition balise <a>" />
	<meta property="og:description" content="Cette balise est utilisée afin de créer des liens vers des lien internes ou externe : une autre page web, un e-mail, une image, une autre section du document, etc.." />
	<meta property="og:image" content="http://adresse_url_de_mon_image/monimage.jpg" />
	<title>Définition de la balise &lt;a&gt;</title>
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
			<h1>Balise &lt;a&gt;</h1>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container">
			<h2>Définition :</h2>
			<p>Cette balise est utilisée afin de créer des liens vers des lien internes ou externe : une autre page web, un e-mail, une image, une autre section du document, etc. Les balises &lt;a> contiennent le texte qui sera utilisé pour le lien, l'attribut href de cet élément est utilisé pour définir l'URL cible</p>
		</div>
	</section>
      
    <section class="secdark container-fluid"> 
		<div class="container">   
			<h3 class="h3light">Exemple pour créer un lien interne ou externe</h3>
			<img class="imgstruc img-fluid" src="images/a-1.jpg" alt="Image d'exemple d'utilisation de la balise lien hypertext" />
		</div>
	</section>

     <section class="container-fluid">
		<div class="container"> 
        	<h3>Exemple pour créer un lien dans une image</h3>
            <p class="textmarge">Ce petit exemple utilise une image qui redirige vers la page d'accueil de MDN. La page d'accueil s'ouvrira dans un nouveau contexte de navigation, c'est une nouvelle page ou un nouvel onglet.</p>
            <img class="imgstruc img-fluid" src="images/a-2.jpg" alt="Image d'exemple d'utilisation de la balise lien hypertext sur image" />
		</div>  
	</section>
	
    <section class="secdark container-fluid"> 
		<div class="container">
       		<h3 class="h3light">Exemple pour créer un lien pour écrire un e-mail</h3>
            <p class="plight textmarge">Il est courant de créer des boutons ou des hyperliens qui vont ouvrir l'application de messagerie de l'utilisateur pour lui permettre d'envoyer un nouveau message. Cela est possible en utilisant un lien mailto.</p>
            <img class="imgstruc img-fluid" src="images/a-3.jpg" alt="Image d'exemple d'utilisation de la balise lien email" />
		</div>
	</section>
   
	<section id="arrow">
        <div id="flecheNavigation">
            <a href="index.php"><img src="images/left-arrow.png" alt="Flèche gauche pour passer à la définition précédente" width="12" height="12"></a>
            <span class="text">Page précédente</span>
            <span id="separate">|</span>
            <span class="text">Page suivante</span>
            <a href="body.php"><img src="images/right-arrow.png" alt="Flèche droit pour passer à la définition suivante" width="12" height="12"></a>
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