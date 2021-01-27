<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<title> In's TEM paisible | Galerie </title>

	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
		integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
		crossorigin="" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
	<style>
		#myMap {
			height: 400px;
		}
	</style>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!--===== Header =====-->
			
				<div id="header">

					<!--===== Logo =====-->

					<h1><a href="index.html" id="logo"> In's <em> TEM paisible </em></a></h1>

					<!--===== Nav =====-->

					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html"> Accueil </a></li>
							<li><a href="actuality.html"> Actualité </a></li>
							<li>
								<a href="#"> Boutique </a>
								<ul>
									<li><a href="#"> Huile Essentielle </a></li>
									<li><a href="#"> Relaxation </a></li>
									<li>
										<a href="#"> Massages </a>
										<ul>
											<li><a href="#"> Ayurvédique </a></li>
											<li><a href="#"> Californien </a></li>
											<li><a href="#"> Femme Enceinte | Ayurvéda </a></li>
											<li><a href="#"> Réflexologie Plantaire Thaï </a></li>
											<li><a href="#"> Suédois </a></li>
											<li><a href="#"> Thaï </a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="gallery.html"> Galerie </a></li>
							<li><a href="about.html"> À propos </a></li>
							<li><a href="contact.html"> Contact </a></li>
						</ul>
					</nav>
				</div>

			<!--===== Main =====-->

				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!--===== Sidebar =====-->

										<section>
											<h3> Just a Subheading </h3>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis et nisi etiam.</p>
											<footer>
												<a href="#" class="button"> Continuer de lire </a>
											</footer>
										</section>

										<section>
											<h3> Another Subheading </h3>
											<ul class="links">
												<li><a href="#"> Amet turpis, feugiat et sit amet </a></li>
												<li><a href="#"> Ornare in hendrerit in lectus </a></li>
												<li><a href="#"> Semper mod quis eget mi dolore </a></li>
												<li><a href="#"> Consequat etiam lorem phasellus </a></li>
												<li><a href="#"> Amet turpis, feugiat et sit amet </a></li>
												<li><a href="#"> Semper mod quisturpis nisi </a></li>
											</ul>
											<footer>
												<a href="#" class="button"> More Random Links </a>
											</footer>
										</section>
								</div>
							</div>
							<div class="col-8  col-12-narrower imp-narrower">
								<div id="content">

									<!--===== Content =====-->

										<article>
											<header>
												<h2> Galerie </h2>
												<p> Sidebar on the left, content on the right </p>
											</header>

											<span class="image featured"><img src="images/banner.jpg" alt="" /></span>

											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
											consequat etiam lorem ipsum dolor sit amet nullam.</p>

											<h3>And Yet Another Subheading</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac quam risus, at tempus
											justo. Sed dictum rutrum massa eu volutpat. Quisque vitae hendrerit sem. Pellentesque lorem felis,
											ultricies a bibendum id, bibendum sit amet nisl. Mauris et lorem quam. Maecenas rutrum imperdiet
											vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor.
											Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis
											rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien.
											Donec sagittis massa et leo semper a scelerisque metus faucibus. Morbi congue mattis mi.
											Phasellus sed nisl vitae risus tristique volutpat. Cras rutrum commodo luctus.</p>

											<p>Phasellus odio risus, faucibus et viverra vitae, eleifend ac purus. Praesent mattis, enim
											quis hendrerit porttitor, sapien tortor viverra magna, sit amet rhoncus nisl lacus nec arcu.
											Suspendisse laoreet metus ut metus imperdiet interdum aliquam justo tincidunt. Mauris dolor urna,
											fringilla vel malesuada ac, dignissim eu mi. Praesent mollis massa ac nulla pretium pretium.
											Maecenas tortor mauris, consectetur pellentesque dapibus eget, tincidunt vitae arcu.
											Vestibulum purus augue, tincidunt sit amet iaculis id, porta eu purus.</p>
										</article>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!--===== Footer =====-->

		<div id="footer">
			<div class="container">
				<div class="row">
					<section class="col-6 col-12-narrower">
						<div id="myMap"></div>
					</section>
					<section class="col-6 col-12-narrower">
						<h3> Contactez-nous </h3>
						<form>
							<div class="row gtr-50">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" placeholder="Nom" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="email" name="email" id="email" placeholder="E-mail" />
								</div>
								<div class="col-12">
									<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" class="button alt" value="Envoyer" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
			</div>

			<!--===== Icons =====-->

			<ul class="icons">
				<li><a href="https://twitter.com/home?lang=fr" class="icon brands fa-twitter"><span class="label"> Twitter </span></a></li>
				<li><a href="https://www.facebook.com" class="icon brands fa-facebook-f"><span class="label"> Facebook </span></a></li>
				<li><a href="https://www.linkedin.com/feed/" class="icon brands fa-linkedin-in"><span class="label"> LinkedIn </span></a></li>
				<li><a href="https://www.instagram.com" class="icon brands fa-instagram"><span class="label"> Instagram </span></a></li>
				<li><a href="https://www.google.com/?hl=fr" class="icon brands fa-google-plus-g"><span class="label"> Google+ </span></a></li>
			</ul>

			<!--===== Copyright =====-->

			<div class="copyright">
				<ul class="menu">
					<li>&copy; 2021, In's TEM paisible </li>
					<li> Produit par : <a href="http://html5up.net"> Victor & Alexis </a></li>
				</ul>
			</div>
		</div>
	</div>

	<!--===== Fichier JavaScripts =====-->

	<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
	<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

	<script src="assets/js/openstreetmap.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>