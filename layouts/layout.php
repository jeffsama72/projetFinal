<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">


	<title>Institut IMIE Le Mans</title>
</head>
<body>
	<div class="container">

		<header>
			
			<div class="row">
				<div class="col-lg-7">
					<img class="logo" src="web/img/logo-imie_1.png">
				</div>
				<div class="col-lg-3 icon">
					<a href="https://fr-fr.facebook.com/">
					 <img src="web/img/facebook.png"></a>
					<a href="https://twitter.com/">
					 <img src="web/img/twitter.png"></a>
					<a href="https://fr.linkedin.com/">
					 <img src="web/img/linkedin.png"></a>
				</div>
				<div class="col-lg-2 telHeader">
					<span><i class="fa fa-phone fa-custom" aria-hidden="true"></i>02 28 01 37 54</span>		
				</div>			
			</div>
			<div class="row">
				<div class="col-lg-12">	
					<ul class="menuVille">
						<li class="color00b6de"><span>Nantes</span></li>
						<li class="colorfdb515"><span>Angers</span></li>
						<li class="colored3126"><span>Rennes</span></li>
						<li class="coloref7a35"><span>Laval</span></li>
						<li class="color58bf94"><span>Le Mans</span></li>
						<li class="color00b6de"><span>Caen</span></li>
						<li class="colorfdb515"><span>Paris</span></li>
					</ul>	
				</div>																		
			</div>	

		</header>
					<!-- la vue à afficher dépend de comment on appelle la variable qui affiche les 
					vues qui sera géré plus tard dans le controleur index.php -->
		<div class="content">
		 <?php 
		 include($vueAAfficher); 	
		 ?> 										
		</div>


		<footer>
			<!--<div class="row">
				<div class="content">
    <a class="lien-accroche" href="https://imie-ecole-informatique.fr/dates-de-rentrees.html" title=""><img alt="" class="img-accroche" longdesc="https://imie-ecole-informatique.fr/www.imie-ecole-informatique.fr/dates-de-rentrees.html" src="https://imie-ecole-informatique.fr/sites/default/files/imce/accroches/dates_de_rentrees.png" style="height: 260px; width: 380px;"></a>
<p class="styleh1 red">prochaines rentrées de NOS campus :</p>
<p>LE DÉTAIL DES PROCHAINES DATES DE RENTRÉES DES FORMATIONS DISPENSÉES À L'IMIE SONT DISPONIBLES</p>
<br><a class="btn" href="https://imie-ecole-informatique.fr/dates-de-rentrees.html">En savoir plus</a><br>  </div>
			</div>-->
		</footer>

	</div>

	
</body>
</html>