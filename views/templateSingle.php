<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Mélanie | blog personnel</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
		<link href="common-css/bootstrap.css" rel="stylesheet">
		<link href="common-css/ionicons.css" rel="stylesheet">
		<link href="single-post-2/css/styles.css" rel="stylesheet">
		<link href="single-post-2/css/responsive.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    	<link rel="manifest" href="favicon/site.webmanifest">
    	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    	<meta name="msapplication-TileColor" content="#da532c">
    	<meta name="theme-color" content="#ffffff">

	</head>
	<body>
		<header>
			<div class="container-fluid position-relative no-side-padding">
				<a href="post&home" class="logo"><img src="images/logo.png" alt="Logo Image"></a>
				<ul class="main-menu visible-on-click">
					<?php if (isset($_SESSION['id'])) { ?>
						<li><a href="user&disconnect">Se déconnecter</a></li>
						<?php if (($_SESSION['role']) == 1) { ?>
							<li><a href="admin&newPost">Nouvel article</a></li>
						<?php } ?>
						<li><a href="user&profile"><?php echo htmlspecialchars($_SESSION['firstName']) ?></a></li>
					<?php } else { ?>
						<li><a href="user&connect">Se connecter</a></li>
						<li><a href="user&register">S’inscrire</a></li>
					<?php } ?>
					<li><a href="service&contact">Contact</a></li>
				</ul>
			</div>
		</header>
		<?=$content?>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="footer-section">
							<a class="logo" href="#"><img src="images/logo.png" alt="Logo Image"></a>
							<p class="copyright">Mélanie @ <?= date("Y") ?> All rights reserved</p>
							<ul class="icons">
								<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
							<div class="footer-section">
							<h4 class="title"><b>CATÉGORIES</b></h4>
							<ul>
								<li><a href="service&contact">CONTACT</a></li>
								<li><a href="#">À PROPOS</a></li>
								<li><a href="#">MENTION LÉGALE</a></li>
							</ul>
							<ul>
								<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 1) { ?>
									<li><a href="admin&userManagement">ADMINISTRATION</a></li>
									<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="footer-section">
							<h4 class="title"><b>S'ABONNER</b></h4>
							<div class="input-area">
								<form>
									<input class="email-input" type="text" placeholder="Entrez votre email">
									<button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- SCIPTS -->
		<script src="common-js/jquery-3.1.1.min.js"></script>
		<script src="common-js/tether.min.js"></script>
		<script src="common-js/bootstrap.js"></script>
		<script src="common-js/scripts.js"></script>
	</body>
</html>