<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Dorian" /> 
	<meta name="description" content="La balise <table> permet de représenter un tableau de données, c'est-à-dire des informations exprimées sur un tableau en deux dimensions."> 
	<meta name="twitter:card" content="summary" /> 
	<meta name="twitter:title" content="Balise <table> <td> <tr>"> 
	<meta name="twitter:url" content="#"> 
	<meta name="twitter:description" content="La balise <table> permet de représenter un tableau de données, c'est-à-dire des informations exprimées sur un tableau en deux dimensions."> 
	<meta name="twitter:image" content="http://adresse_url_de_mon_image/monimage.jpg">
	<meta property="og:url" content="#" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Balise <table> <td> <tr>" />
	<meta property="og:description" content="La balise <table> permet de représenter un tableau de données, c'est-à-dire des informations exprimées sur un tableau en deux dimensions." />
	<meta property="og:image" content="http://adresse_url_de_mon_image/monimage.jpg" />
	<title>Définitions des balises &lt;table&gt; &lt;td&gt; &lt;tr&gt;</title>
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
			<h1>Balise &lt;table&gt; &lt;td&gt; &lt;tr&gt;</h1>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container">
			<h2>Définition :</h2>
        	<p>La balise &lt;table&gt; permet de représenter un tableau de données, c'est-à-dire des informations exprimées sur un tableau en deux dimensions.<br />
        	La balise &lt;tr&gt; définit une ligne de cellules dans un tableau. Alors que &lt;td&gt; définit la cellule d'un tableau qui contient des données. </p>
		</div>
	</section>

    <section class="secdark container-fluid">
		<div class="container">
            <h3 class="h3light">Exemple</h3>
           	 	<img class="imgstruc img-fluid" src="images/table.jpg" alt="Image d'exemple d'utilisation de la balise table" />
            
            <p class="plight">Resultat :</p>
	        <table class="elempucelight">
	     		<tr>
			        <td>Jean</td>
			        <td>Biche</td>
				</tr>
			    <tr>
			        <td>Jeanne</td>
			        <td>Biche</td>
		        </tr>
			</table> 
		</div>
    </section>
    
	<section id="arrow">
		<div id="flecheNavigation">
	        <a href="p.php"><img src="images/left-arrow.png" alt="Flèche gauche pour passer à la définition précédente" width="12" height="12"></a>
	        <span class="text">Page précédente</span>
	        <span id="separate">|</span>
	        <span class="text">Page suivante</span>
	        <a href="textarea.php"><img src="images/right-arrow.png" alt="Flèche droit pour passer à la définition suivante" width="12" height="12"></a>
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