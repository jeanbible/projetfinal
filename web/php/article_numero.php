<?php
	setlocale (LC_TIME, 'fr_FR.utf8','fra');
	require_once("../db/connexion.inc.php");
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Triplex a Interior Category Flat Bootstrap responsive Website Template  | Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Triplex Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="../css/styleAjoute.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:300,400,500,600" rel="stylesheet">
<!-- //font -->
<script src="../js/jquery-1.11.1.min.js"></script>
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
							<ul>
								<li><a href="../login.html">Login</a></li>
								<li><a href="../signup.html">Sign up</a></li>
							</ul>
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
					<h1><a href="../index.html"><img src="../images/logo.jpg" alt="" /></a></h1>
				</div>
				<div class="top-nav wow fadeInRight animated" data-wow-delay=".5s">
					<nav class="navbar navbar-default">
						<div class="container">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="../index.html" class="active">Home</a></li>
								<li><a href="../about.html">About</a></li>
								<li><a href="../codes.html">Codes</a></li>
								<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="hvr-bounce-to-bottom" href="../gallery1.html">Gallery1</a></li>
										<li><a class="hvr-bounce-to-bottom" href="../gallery2.html">Gallery2</a></li>
										<li><a class="hvr-bounce-to-bottom" href="../icons.html">Font Icons</a></li>
									</ul>
								</li>
								<li><a href="../blog.html">Blog</a></li>
								<li><a href="../contact.html">Contact</a></li>
							</ul>
							<div class="clearfix"> </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->

		<!-- blog -->
		<div class="blog w3layouts">
				<!-- container -->
				<div class="container">
					<div class="col-md-8 blog-top-left-grid">
						<div class="left-blog left-single">
							<!-- PROCESSUS D'AFFICHAGE D'ARTICLE -->
							<?php
								try{
									//Première requête, obtenir tous les infos de l'article
									$idarticle = $_GET['id'];
									$req_article = "SELECT * FROM tabarticles WHERE idarticle='$idarticle'";
									$stmt = $connexion->prepare($req_article);
									$stmt->execute();
									$ligne=$stmt->fetch(PDO::FETCH_OBJ);
									//SI L'ARTICLE N'EXISTE PAS
									if ($ligne == null) {
										echo "Ça existe pas";
									}
									//SI L'ARTICLE EXISTE
									else {
										//Deuxième requête, obtenir les infos du membre qui a posté l'article
		                $postdate = strtotime(($ligne->postdate));
		                $req_articlemem = "SELECT * FROM tabmembres WHERE idmem=($ligne->idmem)";
		                $stmt2 = $connexion->prepare($req_articlemem);
		                $stmt2->execute();
		                $ligne2=$stmt2->fetch(PDO::FETCH_OBJ);

										//Troisième requête, obtenir les infos des commentaires
										$req_articlecomments = "SELECT * FROM tabcommentaires WHERE idarticle=($ligne->idarticle) ORDER BY postdate DESC";
										$stmt3 = $connexion->prepare($req_articlecomments);
										$stmt3->execute();
										$comments_count = $stmt3->rowCount(); ?>
										<!-- AFFICHAGE DE L'ARTICLE -->
										<div class="blog-left">
											<div class="single-left-left">
												<p>Écrit par <a href="#"><?php echo ($ligne2->prenom)." ".($ligne2->nom); ?></a> le <?php echo strftime('%d %B %Y à %H:%M', $postdate); ?> <a href="#">Commentaires (<?php echo $comments_count; ?>)</a></p>
												<a href="../single.html"><img src="../uploads/<?php echo ($ligne->photo); ?>" alt="" /></a>
											</div>
											<h1 class="titre-article"><?php echo ($ligne->titre); ?></h1>
											<div class="blog-left-bottom">
												<?php echo ($ligne->content); ?>
											</div>
										</div>
										<!-- /AFFICHAGE DE L'ARTICLE -->
						<?php
										// SI AUCUN COMMENTAIRE, NE PAS AFFICHER LA BOITE COMMENTAIRE
										if ($comments_count == 0) { ?>
										<div class="response wow fadeInUp animated" data-wow-delay=".5s">
											<h3>Aucun commentaire</h3>
										</div>

							<?php }
										// SI L'ARTICLE A DES COMMENTAIRES, AFFICHER LA BOITE COMMENTAIRE
										else { ?>
											<div class="response wow fadeInUp animated" data-wow-delay=".5s">
											<h3>Commentaires</h3>
							<?php	while($ligne3=$stmt3->fetch(PDO::FETCH_OBJ)){
											$req_commentmem = "SELECT * FROM tabmembres WHERE idmem =($ligne3->idmem)";
											$stmt4 = $connexion->prepare($req_commentmem);
			                $stmt4->execute();
			                $ligne4=$stmt4->fetch(PDO::FETCH_OBJ);
											$comment_postdate = strtotime(($ligne3->postdate)); ?>
													<!-- CONTENU DU COMMENTAIRE -->
													<div class="media response-info">
														<div class="media-left response-text-left">
															<a href="#">
																<img class="media-object" src="../images/t1.jpg" alt="">
															</a>
															<h5><a href="#"><?php echo ($ligne4->prenom); ?></a></h5>
														</div>
														<div class="media-body response-text-right">
															<?php echo ($ligne3->content); ?>
															<ul>
																<li><?php echo strftime('%d %B %Y à %H:%M', $comment_postdate); ?></li>
																<li><a href="single.html">Reply</a></li>
															</ul>
														</div>
														<div class="clearfix"> </div>
													</div>
													<!-- /CONTENU DU COMMENTAIRE -->
								<?php } ?>
											</div>
								<!-- BOITE POUR LAISSER LES COMMENTAIRES -->
								<div class="opinion">
									<h2 class="wow fadeInUp animated" data-wow-delay=".5s">Écrivez un commentaire</h2>
									<form action="#" method="post">
										<!-- <input class="wow fadeInLeft animated" data-wow-delay=".5s" type="text" placeholder="Name" required="">
										<input class="wow fadeInRight animated" data-wow-delay=".5s" type="text" placeholder="Email" required=""> -->
										<textarea class="wow fadeInLeft animated" data-wow-delay=".5s" placeholder="Message" required=""></textarea>
										<input class="wow fadeInRight animated" data-wow-delay=".5s" type="submit" value="ENVOYER">
									</form>
								</div>
								<!-- /BOITE POUR LAISSER LES COMMENTAIRES -->
							<?php	}
						 		}
							}catch (Exception $e){
								echo "Problème pour lister.";
							 }finally {
								 unset($connexion);
								 unset($stmt);
								 unset($stmt2);
								 unset($stmt3);
							 }
							?>
							<!-- /PROCESSUS D'AFFICHAGE D'ARTICLE -->

						</div>
					</div>
					<div class="col-md-4 blog-top-right-grid">
						<div class="Categories wow fadeInUp animated" data-wow-delay=".5s">
							<h3>Categories</h3>
							<ul>
								<li><a href="#">Phasellus sem leo, interdum quis risus</a></li>
								<li><a href="#">Nullam egestas nisi id malesuada aliquet </a></li>
								<li><a href="#"> Donec condimentum purus urna venenatis</a></li>
								<li><a href="#">Ut congue, nisl id tincidunt lobor mollis</a></li>
								<li><a href="#">Cum sociis natoque penatibus et magnis</a></li>
								<li><a href="#">Suspendisse nec magna id ex pretium</a></li>
							</ul>
						</div>
						<div class="Categories wow fadeInUp animated" data-wow-delay=".5s">
							<h3>Archive</h3>
							<ul class="marked-list offs1">
								<li><a href="#">May 2016 (7)</a></li>
								<li><a href="#">April 2016 (11)</a></li>
								<li><a href="#">March 2016 (12)</a></li>
								<li><a href="#">February 2016 (14)</a> </li>
								<li><a href="#">January 2016 (10)</a></li>
								<li><a href="#">December 2016 (12)</a></li>
								<li><a href="#">November 2016 (8)</a></li>
								<li><a href="#">October 2016 (7)</a> </li>
								<li><a href="#">September 2016 (8)</a></li>
								<li><a href="#">August 2016 (6)</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
		</div>
		<!-- //blog -->
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
