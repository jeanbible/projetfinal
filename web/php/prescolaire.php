<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	require_once("../db/connexion.inc.php");
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>yooooo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Triplex Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../css/styleAjoute.css">
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:300,400,500,600" rel="stylesheet">
<!-- //font -->
<script src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../requetes/requetesAdmin.js"></script>
<script type="text/javascript" src="../vues/vues.js"></script>


<script src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--animate-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-info">
					<div class="top-header-left wow fadeInLeft animated" data-wow-delay=".5s">
						<p>MORE THAN 10 NEW DESIGNS FOR YOUR HOME</p>
					</div>
					<div class="top-header-right wow fadeInRight animated" data-wow-delay=".5s">
						<div class="top-header-right-info">
							<?php
									require_once("loginNav.php");
							 ?>
						</div>
						<div class="social-icons">
							<ul>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="twitter facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter google" href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
					<h1><a href="../index.php"><img src="../images/logo.jpg" alt="" /></a></h1>
				</div>
				<div class="top-nav wow fadeInRight animated" data-wow-delay=".5s">
					<nav class="navbar navbar-default">
						<?php
							require_once("../nav.html");
					?>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<!-- <div class="banner"> -->
			<!-- <div class="slider">
				<h2 class="wow shake animated" data-wow-delay=".5s">Triplex</h2>
				<div class="border"></div>
				<script src="../js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: true,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							 });
						});
				</script>
				<div  id="top" class="callbacks_container-wrap">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info">
								<h3 class="wow fadeInRight animated" data-wow-delay=".5s">Elegant Interior Designs </h3></h3>
								<p class="wow fadeInLeft animated" data-wow-delay=".5s">Curabitur eget metus eget erat vehicula semper vitae sed leo</p>
								<div class="more-button wow fadeInRight animated" data-wow-delay=".5s">
									<a href="single.html">Click Here	</a>
								</div>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<h3>Beautiful Interior Designs </h3>
								<p>Quisque nisl risus, egestas in convallis vitae, fringilla cursus magna</p>
								<div class="more-button">
									<a href="single.html">Read More	</a>
								</div>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<h3>Elegant Interior Design 	</h3>
								<p> Suspendisse bibendum dictum metus, at finibus elit dignissim nec	</p>
								<div class="more-button">
									<a href="single.html">Click Here	</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div> -->
	<!-- </div> -->
	<!-- //banner -->
	<!-- banner-bottom -->
	<!-- <div class="banner-bottom w3layouts"> -->
		<!-- <div class="container">
			<div class="banner-bottom-grids agile-info">
				<div class="col-md-6 banner-bottom-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="left-border">
						<div class="left-border-info">
							<p>Make Your Life Good & Feel More</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 banner-bottom-left banner-bottom-right wow fadeInRight animated" data-wow-delay=".5s">
					<div class="left-border">
						<div class="left-border-info right-border-info">

							<p>Make Your Life Beautiful</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> -->
	<!-- </div> -->
	<!-- //banner-bottom -->
	<!-- information -->
	<!-- <div class="information w3lagile"> -->
		<!-- Modal enregistrer cours -->
		<div id="contenu">

		</div>
		<!-- affichage Cours -->
		<?php
		$rep="";
		// $rep="<table border=1>";
		// $rep.="<caption>Liste des films</caption>";
		// $rep.="<tr><th>Id</th><th>Titre</th><th>Description</th><th>Prérequis</th><th>Type</th><th>Logo</th></tr>";
		$requette="SELECT * FROM tabcours";
		try{
			 $stmt = $connexion->prepare($requette);
			 $stmt->execute();
			 while($ligne=$stmt->fetch(PDO::FETCH_OBJ)){
				 $rep.="<div class='prescolaire'>";
		     $rep.="  <div>";
		     $rep.="    <img src='../uploads/".($ligne->logocours)."' width=80 height=80>";
		     $rep.="  </div>";
		     $rep.="  <div >";
		     $rep.="    <h2>".($ligne->titrecours)."</h2>";
		     $rep.="    <p>".($ligne->descriptioncours)."</p>";
		     $rep.="    <p>Prérequis:".($ligne->prerequiscours)."</p>";
		     $rep.="  </div>";
		     $rep.="</div>";
			 }
		 }catch (Exception $e){
			 $rep['erreur']="Probleme pour lister";
		 }finally {
			 $rep.="</table>";
			unset($connexion);
			unset($stmt);
			echo $rep;
		 }
		 ?>
		<button type="button" onclick="requetes('listerCours')" class="btn btn-primary">Lister cours</button>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nouveau Cours</button>



		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Entrez nouveau Cours</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
					<!-- formulaire -->
					<form method="post" action="enregistrerCours.php" id="enregCours" enctype="multipart/form-data">
						<input type="text" name="typecours" value="prescolaire" placeholder="Titre du cours" hidden=""  >
					  <div class="form-group">
					    <label for="titrecours">Titre du cours</label>
					    <input type="text" name="titrecours" class="form-control" id="titrecours" required=""  placeholder="Titre du cours">
					  </div>
						<div class="form-group">
					    <label for="description">Description du cours</label>
					    <textarea class="form-control" name="description" id="description" required="" rows="3"></textarea>
					  </div>
						<div class="form-group">
					    <label for="prerequis">Prérequis</label>
					    <textarea class="form-control" name="prerequis" id="prerequis" required="" rows="3"></textarea>
					  </div>
						<div class="form-group">
					    <label for="exampleFormControlFile1">Choisir logo du cours</label>
					    <input type="file" name="logocours" class="form-control-file" id="exampleFormControlFile1">
					  </div>

					  <button type="button" onclick="requetes('enregistrerCours')" class="btn btn-primary">Enregistrer</button>
					</form>
	      </div>
	    </div>
	  </div>
	</div>

		<!-- <div class="container">
			<div class="information-heading">
				<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Our Services</h3>
				<p class="wow fadeInUp animated" data-wow-delay=".5s">Vivamus efficitur scelerisque nulla nec lobortis. Nullam ornare metus vel dolor feugiat maximus.Aenean nec nunc et metus volutpat dapibus ac vitae ipsum. Pellentesque sed rhoncus nibh</p>
			</div>

			<div class="information-grids agile-info">
				<div class="col-md-4 information-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="information-info">
						<div class="information-grid-img">
							<img src="../images/8.jpg" alt="" />
						</div>
						<div class="information-grid-info">
							<h4>Sollicitudin sit amet </h4>
							<p>Duis dapibus lacinia libero at aliquam. Sed pulvinar, magna vitae consectetur ultricies, augue massa condimentum eros non luctus ipsum lacus interdum odio.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 information-grid wow fadeInUp animated" data-wow-delay=".5s">
					<div class="information-info">
						<div class="information-grid-info">
							<h4>Consectetur ultricies</h4>
							<p>Duis dapibus lacinia libero at aliquam. Sed pulvinar, magna vitae consectetur ultricies, augue massa condimentum eros non luctus ipsum lacus interdum odio.</p>
						</div>
						<div class="information-grid-img">
							<img src="../images/3.jpg" alt="" />
						</div>
					</div>
				</div>
				<div class="col-md-4 information-grid wow fadeInRight animated" data-wow-delay=".5s">
					<div class="information-info">
						<div class="information-grid-img">
							<img src="../images/7.jpg" alt="" />
						</div>
						<div class="information-grid-info">
							<h4>Nullam ornare metus</h4>
							<p>Duis dapibus lacinia libero at aliquam. Sed pulvinar, magna vitae consectetur ultricies, augue massa condimentum eros non luctus ipsum lacus interdum odio.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> -->
	<!-- </div> -->
	<!-- //information -->

	<!-- popular -->
	<div class="popular agile-info">
		<!-- <div class="container">
			<div class="popular-heading information-heading">
				<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Latest Designs</h3>
				<p class="wow fadeInUp animated" data-wow-delay=".5s">Vivamus efficitur scelerisque nulla nec lobortis. Nullam ornare metus vel dolor feugiat maximus.Aenean nec nunc et metus volutpat dapibus ac vitae ipsum. Pellentesque sed rhoncus nibh</p>
			</div>
			<div class="popular-slide">
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
							$("#slider1").responsiveSlides({
								auto: true,
								pager: true,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							 });
						});
				</script>
				<div  id="top" class="callbacks_container-wrap">
					<ul class="rslides" id="slider1">
						<li>
							<div class="popular-slide-info wow bounceIn animated" data-wow-delay=".5s">
								<h4>Office</h4>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas volutpat lacus at enim aliquet, quis iaculis nisi bibendum. Nullam cursus arcu lobortis, pharetra augue et, dignissim nunc. Morbi vestibulum tempus orci at faucibus. Sed ultricies dignissim magna tristique interdum</p>
							</div>
						</li>
						<li>
							<div class="popular-slide-info popular-slide1">
								<h4>Bed Room</h4>
								<p>Habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas volutpat lacus at enim aliquet, quis iaculis nisi bibendum. Nullam cursus arcu lobortis, pharetra augue et, dignissim nunc. Morbi vestibulum tempus orci at faucibus. Sed ultricies dignissim magna tristique interdum Pellentesque</p>
							</div>
						</li>
						<li>
							<div class="popular-slide-info popular-slide2">
								<h4>Kitchen</h4>
								<p>Tristique senectus pellentesque habitant morbi et netus et malesuada fames ac turpis egestas. Maecenas volutpat lacus at enim aliquet, quis iaculis nisi bibendum. Nullam cursus arcu lobortis, pharetra augue et, dignissim nunc. Morbi vestibulum tempus orci at faucibus. dignissim magna tristique interdum Sed ultricies</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="popular-grids wthree">
				<div class="col-md-4 popular-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h5>Nullam convallis sagittis</h5>
					<p>Donec malesuada ultricies metus ac vehicula. Nullam convallis sagittis tellus ut dictum. Proin risus lacus, sollicitudin sit amet ante ac, dapibus convallis ipsum.</p>
				</div>
				<div class="col-md-4 popular-grid wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Proin risus lacus</h5>
					<p>Donec malesuada ultricies metus ac vehicula. Nullam convallis sagittis tellus ut dictum. Proin risus lacus, sollicitudin sit amet ante ac, dapibus convallis ipsum.</p>
				</div>
				<div class="col-md-4 popular-grid wow fadeInRight animated" data-wow-delay=".5s">
					<h5>Sollicitudin sit amet ante</h5>
					<p>Donec malesuada ultricies metus ac vehicula. Nullam convallis sagittis tellus ut dictum. Proin risus lacus, sollicitudin sit amet ante ac, dapibus convallis ipsum.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> -->
	</div>
	<!-- //popular -->

<!-- footer -->
	<div class="footer agileits">
		<div class="container">
			<div class="footer-grids w3l-agile">
				<div class="col-md-3 footer-nav agile-w3layouts wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>Navigation</h4>
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="gallery1.html">Gallery</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-5 footer-nav agile-w3layouts wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Newsletter</h4>
					<p>Nunc non feugiat quam, vitae placerat ipsum. Cras at felis congue, volutpat neque eget</p>
					<form action="#" method="post">
						<input type="email" id="mc4wp_email" name="email" placeholder="Enter your email here" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-4 footer-nav agile-w3layouts wow fadeInRight animated" data-wow-delay=".5s">
					<h4>Latest News</h4>
					<div class="news-grids">
						<div class="news-grid">
							<h6>09/01/2016 : <a href="single.html">Cras at felis congue</a></h6>
							<h6>13/07/2016 : <a href="single.html">Volutpat neque eget</a></h6>
							<h6>13/02/2016 : <a href="single.html">Agittis tellus ut dictum</a></h6>
							<h6>28/11/2016 : <a href="single.html">Habitant morbi et netus</a></h6>
							<h6>19/01/2016 : <a href="single.html">pellentesque habitant morbi</a></h6>
							<h6>23/02/2016 : <a href="single.html">Maecenas volutpat lacus</a></h6>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copyright w3l wow fadeInUp animated" data-wow-delay=".5s">
				<p>© 2017 Triplex . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
</body>
</html>
