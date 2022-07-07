<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title> Aurélie Dombre | Portfolio</title>

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Goldman:wght@700&family=Passion+One:wght@700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/style.css">
	<!-- <link rel="stylesheet" href="assets/css/style-contact.css"> -->

	<script defer src="assets/js/script.js"></script>
</head>

<body>
	<header>
		
		<div class="entete">
			<h1> Aurélie Dombre</h1>
			<h2> Développeuse Web</h2>
		</div>
		<!-- Menu -->
		<nav>
			<a class="nav_accueil" href="<?= $router->generate('main_home') ?>" title="Accueil général">Accueil</a>
			<a class="nav_projets" href="<?= $router->generate('main_projects') ?>">Projets</a>
			<a class="nav_contact" href="<?= $router->generate('main_contactForm') ?>">Contact</a>
		</nav>
	</header>