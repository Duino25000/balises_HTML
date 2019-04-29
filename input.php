<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Dorian" />
	<meta name="description" content="La balise <input> est utilisé pour créer une interaction qui permet à l'utilisateur de saisir des données. La façon dont la balise"/> 
	<meta name="twitter:card" content="summary" /> 
	<meta name="twitter:title" content="Definition balise <input>"> 
	<meta name="twitter:url" content="#"> 
	<meta name="twitter:description" content="La balise <input> est utilisé pour créer une interaction qui permet à l'utilisateur de saisir des données. La façon dont la balise"/> 
	<meta name="twitter:image" content="http://adresse_url_de_mon_image/monimage.jpg"/>
	<meta property="og:url" content="#" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Definition balise <input>" />
	<meta property="og:description" content="La balise <input> est utilisé pour créer une interaction qui permet à l'utilisateur de saisir des données. La façon dont la balise" />
	<meta property="og:image" content="http://adresse_url_de_mon_image/monimage.jpg" />
	<title>Définition de la balise &lt;input&gt;</title>
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
			<h1>Balise &lt;input&gt;</h1>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container">
			<h2>Définition :</h2>
            <p>La balise &lt;input&gt; est utilisé dans un formulaire web pour créer une interaction qui permet à l'utilisateur de saisir des données. La façon dont la balise &lt;input&gt; fonctionne dépend grandement de la valeur de son attribut type.</p>
			<p>Il existe plus d'une dizaine de valeurs, en voici quelques unes :</p>
		</div>
	</section>
	
     <section class="secdark container-fluid">   
		 <div class="container">
            <h3 class="h3light">Exemple avec la saisie d'un texte simple</h3>
            <p class="plight textmarge">Un élément de saisie simple.</p>
           	<img class="imgstruc img-fluid" src="images/input-1.jpg" alt="Image 1er exemple d'utilisation de la balise input" />
          	<p class="plight resultat">Résultat :</p>
			<input class="elemsaisie" type="text" value="Saisir un texte ici">
		</div>
	</section>
	
    <section class="container-fluid">  
		<div class="container">
         	<h3>Exemple avec la saisie d'une couleur</h3>
           		<p class="textmarge">Il est possible de créer un sélecteur de couleur qui emploie une valeur par défaut.</p>
            	<img class="imgstruc img-fluid" src="images/input-2.jpg" alt="Image 2ème exemple d'utilisation de la balise input" />
            	<p class="resultat">Résultat :</p>
				<input class="elemsaisie" type="color" value="#ff0000">
		</div>
	</section>
	
    <section class="secdark container-fluid">  
		<div class="container">
      	 	<h3 class="h3light">Exemple avec la saisie d'un mot de passe</h3>
	        <p class="plight textmarge">Un champ texte sur une seule ligne dont la valeur est masquée.</p>
	        <img class="imgstruc img-fluid" src="images/input-3.jpg" alt="Image 3ème exemple d'utilisation de la balise input" />
	        <p class="plight resultat">Résultat :</p>
			
			<div class="elemsaisie">
		    	<label for="userPassword">Mot de passe :</label>
		    	<input id="userPassword" type="password">
			</div>
		</div>
    </section>
    
	<section id="arrow">
		<div id="flecheNavigation">
			<a href="img.php"><img src="images/left-arrow.png" alt="Flèche gauche pour passer à la définition précédente" width="12" height="12"></a>
			<span class="text">Page précédente</span>
			<span id="separate">|</span>
			<span class="text">Page suivante</span>
			<a href="link.php"><img src="images/right-arrow.png" alt="Flèche droit pour passer à la définition suivante" width="12" height="12"></a>
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