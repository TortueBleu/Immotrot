<!DOCTYPE html>
<html>
<!--
---------

LIER LES CSS

---------

-->

<head>
	<title>Immotrott</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="trotinette.css">

	<link rel="stylesheet" type="text/css" href="prez.css">

	<link rel="stylesheet" type="text/css" href="responsive.css">

	<link rel="stylesheet" type="text/css" href="axel.css">

</head>

<!--
---------

HEADER

---------

-->


<body>

	<header class="header">
		<div>
			<p><a href="#oui">Muriel FRAMERY</a></p>
		</div>
		<div>
			<a target="_blank" href="https://www.linkedin.com/in/murielframery2629/"><i class="fa fa-linkedin header-linkedin"></i></a>
		</div>
	</header>


	<!--
---------

NAVBAR

---------

-->



	<nav class="navbar">
		<img src="img/logo.png" alt="" width="13%">
		<p class="title_website">ImmoTrott</p>
		<ul class="content-navbar-right">
			<li>
				<a href="#services">Mes services</a>
			</li>
			<li>
				<a href="#trotinette">Mode de déplacement </a>
			</li>
			<li>
				<a href="#contact">Contactez-moi</a>
			</li>
		</ul>
	</nav>

	<div class="slideshow-container">

		<div class="mySlides fade">
			<figure><img src="img/carousel/carou_2.png"></figure>
			<div class="text">Accompagnement,<br /> Bienveillance & Confiance</div>
		</div>

		<div class="mySlides fade">
			<figure><img src="img/carousel/carou_3.png"></figure>
			<div class="text">Indépendance & Transparence</div>
		</div>

		<div class="mySlides fade">
			<figure><img src="img/carousel/carou_5.png"></figure>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>
	<br>

	<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
	</div>



	<!--
---------

SERVICES

---------

-->

	<div class="group_cards" id="services">
		<div class="card">
			<div style="position:relative">
				<img class="img_card" src="img/illu_1.png" width="100%" alt="">
				<div class="anim_card">
					<ul>
						<li>Vente</li>
						<li>Location</li>
						<li>Gestion locataire</li>
						<li>Rénovation</li>
					</ul>
				</div>
			</div>
			<div class="section_cards">
				<p>Services</p>
			</div>
		</div>

		<div class="card">
			<div style="position:relative">
				<img class="img_card" src="img/illu_2.png" width="100%" alt="">
				<div class="anim_card">
					<ul>
						<li>Ile saint Louis Paris IV</li>
						<li>AGS IMMO – Ternes Champs Elysées<br />PARIS XVII</li>
					</ul>
				</div>
			</div>
			<a href="#section_presentation">
				<div class="section_cards">
					<p>Agence Immo</p>
				</div>
			</a>
		</div>

		<div class="card" id="bien_off">
			<div>
				<img class="img_card" src="img/carousel/carou_1.png" width="100%" alt="">
			</div>
			<div class="section_cards">
				<p>Vente à discrétion</p>
			</div>
		</div>
	</div>

	<!-- 	<div class="cont_lien" id="services">
		<div class="lien bloc_card" id="service">
			<div class="anim2">
				<ul>Services proposés :
					<li>Vente</li>
					<li>Location</li>
					<li>Gestion locataire</li>
					<li>Rénovation</li>
				</ul>
			</div>
		</div>

		<a class="link_services" target="_blank" href="https://ags-immobilier.com/">
			<div class="lien bloc_card" id="ags">
				<div class="anim">
				<ul>Services proposés :
					<li>Ile saint Louis Paris IV</li>
					<li>AGS IMMO – Ternes Champs Elysées<br/>PARIS XVII</li>
				</ul>
				</div>
			</div>
		</a>


		<div class="lien bloc_card" id="bien_off">
			<div class="anim3">
				<p>Vente à discrétion</p>
			</div>
		</div>


	</div> -->

	<div class="cont_popup">
		<div class="triangle">
			<div id="triangle-code"></div>
		</div>
		<div class="popup">


			<div class="flex_pop">
				<p>Voici mes offre discrete du moment: </p>
				<ul>Bien Off:
					<?php

					/* include 'BDD.php'; */

					?>

				</ul>
				<p><a href="">Cliquez ici pour fermer la fenetre</a></p>
			</div>
		</div>

	</div>




	<!--
---------

TROTINETTE
---------

-->

	<div class="container_shifting" id="trotinette">
		<img src="img/scooter.gif" alt="" width="30%">
		<div class="content_shifting">
			<h2>Mes déplacements sont effectués 100%<br />en trottinette</h2>
		</div>
	</div>

	<!--
---------

INFOS MURIEL

---------

-->

	<section class="section" id="section_presentation">
		<div class="container_section">
			<img class="img_muriel_framery" src="img/trop_beau.jpg" alt="" width="30%">
			<div class="content_contact">
				<p class="title_prez">Présentation</p>
				<p class="subtitle_prez">À propos de moi</p>
				<p class="content_prez">Muriel Framery</br></br>Consultant immobilier bienveillant dans l'île saint louis, entre le marais et le quartier latin, depuis bientôt 7 ans après les Antilles et l'Irlande. Le goût des autres & le sens du service depuis toujours. Dans l'immobilier parisien, d'abord agent et à mon compte désormais.</p>
				<p class="subtitle_prez">À propos de l'entreprise</p>
				<div class="container_about_enterprise">
					<div class="bloc_about_enterprise">Transaction vente</div>
					<div class="bloc_about_enterprise">Transaction location</div>
					<div class="bloc_about_enterprise">Chasse immobilière location & vente</div>
				</div>
				<p class="subtitle_prez" style="margin-top:30px">Mes partenaires</p>
				<div class="container_about_enterprise">
					<a href="https://www.masteos.com/?gclid=Cj0KCQiAyoeCBhCTARIsAOfpKxgjAErLQZboF4GV5OD0XjxNcj-hKqd9wsCEdmMvEZd1H7WGWrdo6KkaAqaeEALw_wcB"><img src="img/maestos.png" alt="" width="22%" style="margin-right:30px"></a>
					<a href="https://ags-immobilier.com/"><img src="img/ags_immo.png" alt="" width="25%" style="margin-right:25px"></a>
					<a href="https://www.nathalieinfante.com/cinq-saisons-a-paris-visite-exposit"><img class="third_img" src="img/logo_nath.jpg" alt="" width="25%" height="95px"></a>
				</div>
			</div>
		</div>
	</section>

	<iframe class="iframe_maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675.1016222104477!2d2.355370983569609!3d48.85129453994449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671fc9c03c6ab%3A0x2de55441f2d30d25!2s27%20Rue%20Saint-Louis%20en%20l&#39;%C3%8Ele%2C%2075004%20Paris!5e0!3m2!1sfr!2sfr!4v1614848586346!5m2!1sfr!2sfr" style="border:none;" width="100%" height="300" allowfullscreen="" loading="lazy"></iframe>


	<!--
---------

FOOTER CONTACT

---------

-->

	<footer>
		<div class="container_footer">
			<div>
				<img src="img/logo.png">
			</div>
			<div id="contact">
				<h2>Contact</h2>
				<ul>
					<li style="text-transform: uppercase;">Immotrot</li>
					<li><i class="fa fa-phone"></i> - 06 99 933 233 </li>
					<li><i class="fa fa-envelope"></i> - contact@murielframery.fr</li>
					<li><i class="fa fa-map-marker"></i> - 27 RUE ST LOUIS EN L'ILE 75004 PARIS</li>
				</ul>
			</div>
			<div>
				<h2>Suivez-moi</h2>
				<ul>
					<a href="https://www.linkedin.com/in/murielframery2629/" target="_blank">
						<li style="margin-top:5px"><a href="https://www.linkedin.com/in/murielframery2629/"><i class="fa fa-linkedin footer-linkedin"></i></a></li>
					</a>
				</ul>
			</div>
		</div>
	</footer>

</body>

<!--
---------

CAROUSSEL FONCTION

---------

-->

<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		if (n > slides.length) {
			slideIndex = 1
		}
		if (n < 1) {
			slideIndex = slides.length
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active";
	}
</script>

<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="carousel.js"></script>

</html>