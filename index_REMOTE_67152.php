<!DOCTYPE html>
<html>
<!--
---------

LIER LES CSS

---------

-->
<head>
	<title>Immotrott</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="trotinette.css">

	<link rel="stylesheet" type="text/css" href="prez.css">


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
			<a target="_blank" href="https://www.linkedin.com/in/murielframery2629/"><i class="fa fa-linkedin header-linkedin" ></i></a>
		</div>
	</header>


<!--
---------

NAVBAR

---------

-->



	<nav class="navbar">
		<img src="img/logo.jpg" alt="" width="13%">
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

	<!-- 	<div class="carousel">
		<div class="img_defil">
			<div class="container"></div>
			<h3>Acheter un bien Immobillier avec <br>
				Bienveillance et Sérénité </h3>
		</div>
	</div> -->

	<div class="slideshow-container">

		<div class="mySlides fade">
			<figure><img src="img/img1.jpg"></figure>
		</div>

		<div class="mySlides fade">
			<figure><img src="img/img2.jpg"></figure>
		</div>

		<div class="mySlides fade">
			<figure><img src="img/img3.jpg"></figure>
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

	<div class="cont_lien" id="services">
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

		<a target="_blank" href="https://ags-immobilier.com/">
			<div class="lien bloc_card" id="ags">
				<div class="anim">
					<p>Cliquer ici</p>
				</div>
			</div>
		</a>


		<div class="lien bloc_card" id="bien_off">
			<div class="anim3">
				<p>Vente à discrétion</p>
			</div>
		</div>


	</div>

	<div class="cont_popup">
		<div class="triangle">
			<div id="triangle-code"></div>
		</div>
		<div class="popup">


			<div class="flex_pop">
				<p>Voici mes offre discrete du moment: </p>
				<ul>Bien Off:
					<li>salut</li>
					<li>salut</li>
					<li>salut</li>
					<li>salut</li>
					<li>salut</li>
				</ul>
				<p><a href="">Cliquez ici pour fermer la fenetre</a></p>
			</div>
		</div>

	</div>

<!--
---------

ANIMATION TROTINETTE
---------

-->

	<div class="anim_trot" id="trotinette">

		<div class="debut">
			<img src="img/trotinette.png" style="width: 97px;"></img>
			<div class="txt">
				Je me deplace a trotinette oui
			</div>

		</div>


	</div>

	<div class="container_shifting">
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

	<section class="section" id="oui">
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
				<img src="img/logo.jpg" alt="">
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