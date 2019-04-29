<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Dorian" /> 
	<meta name="description" content="La balise <img> permet de lier une image à un document HTML en spécifiant sa source via l'attribut..." /> 
	<meta name="twitter:card" content="summary" /> 
	<meta name="twitter:title" content="Definition Balise <img>">
	<meta name="twitter:url" content="#"> 
	<meta name="twitter:description" content="La balise <img> permet de lier une image à un document HTML en spécifiant sa source via l'attribut..."> 
	<meta name="twitter:image" content="http://adresse_url_de_mon_image/monimage.jpg">
	<meta property="og:url" content="#" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Definition Balise <img>" />
	<meta property="og:description" content="La balise <img> permet de lier une image à un document HTML en spécifiant sa source via l'attribut..." />
	<meta property="og:image" content="http://adresse_url_de_mon_image/monimage.jpg" />
	<title>Définition de la balise &lt;img&gt;</title>
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
			<h1>Balise &lt;img&gt;</h1>
		</div>
	</section>

	<section class="container-fluid">
        <div class="container">
		    <h2>Définition :</h2>
            <p>La balise &lt;img&gt; permet de lier une image à un document HTML en spécifiant sa source via l'attribut "src". L’attribut alt est un champ de codage HTML lié à la balise image qui permet de spécifier un texte devant s’afficher si l’affichage des images est désactivé par l’utilisateur.</p>
        </div>
    </section>

    <section class="secdark container-fluid">    
        <div class="container">
            <h3 class="h3light">Exemple avec l'attribut src</h3>
            <p class="plight textmarge">Cet attribut est obligatoire pour la balise &lt;img&gt;. Il contient donc l'adresse à laquelle on va chercher l'image</p>
            <img class="imgstruc img-fluid" src="images/img-1.jpg" alt="Image d'exemple d'utilisation de la balise img" />
        </div>
    </section>

    <section class="container-fluid">
        <div class="container">
            <h3>Exemple avec l'ajout d'un lien dans une image</h3>
            <p class="textmarge">Cet autre exemple viens rajouter en plus une image qui en cliquant dessus redirige vers la page d'accueil de MDN.</p>
            <img class="imgstruc img-fluid" src="images/img-2.jpg" alt="Image d'exemple d'utilisation de la balise img avec lien" />
        </div>
    </section>

    <section class="secdark container-fluid">    
        <div class="container">
            <h3 class="h3light">Attribut height et width</h3>
            <div class=listepuce> 
               <ul class="elempucelight">
        		<li>Height : la hauteur de l'image exprimée en pixels</li>
        		<li>Width : la largeur de l'image, exprimée en pixels.</li>
    	    	</ul>
            </div>
        </div>
    </section>

    <section class="container-fluid">    
        <div class="container">
            <h3>Format pris en charge par firefox (cela peut différer selon les navigateurs)</h3>
            <div class="listepuce" >
                <ul class="elempuce">
                    <li>JPEG</li>
                    <li>GIF</li>
                    <li>PNG</li>
                    <li>APNG</li>
                    <li>SVG</li>
                    <li>BMP</li>
                    <li>ICO (bitmap)</li>
                    <li>ICO (PNG)</li>
    		    </ul>
            </div>    
        </div>     
    </section>
   
	<section id="arrow">
        <div id="flecheNavigation">
            <a href="h1.php"><img src="images/left-arrow.png" alt="Flèche gauche pour passer à la définition précédente" width="12" height="12"></a>
            <span class="text">Page précédente</span>
            <span id="separate">|</span>
            <span class="text">Page suivante</span>
            <a href="input.php"><img src="images/right-arrow.png" alt="Flèche droit pour passer à la définition suivante" width="12" height="12"></a>
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