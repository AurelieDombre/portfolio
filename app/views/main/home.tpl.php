<!-- Menu -->
<?php 
include __DIR__.'/../partials/nav.tpl.php';
?>

<header>
    <div class="entete">
        <h1> Aurélie Dombre</h1>
        <h2> Développeuse Web</h2>
    </div>
</header>

<div class="corp">
    <section class="Bienvenue">
        <h3>BIENVENUE</h3>

        <p> J'ai le plaisir de vous présenter dans ce portfolio les
            projets que j'ai réalisé. </p>
    </section>

    <section class="projets">
        <h3>PROJETS</h3>
        <div class="projets__card">
            <div class="hovereffect">
                <img class="projets__card--img img-responsive" src="assets/pictures/qualiextra.jpg" alt="Image de création WEB" href="#">
                <div class="overlay">
                    <h5>Qualiextra, expériences épicuriennes</h5>
                    <a class="info" href="#" > Voir</a>
                </div>
            </div>
        </div>

        <div class="projets__card">
            <div class="hovereffect">
                <img class="projets__card--img img-responsive" src="assets/pictures/cv.jpg" alt="Image languages Web" href="#"> 
                <div class="overlay">  
                <h5>Mon curriculum vitae</h5>
                    <a class="info" href="#"> Voir </a>  
                </div>
            </div>
        </div>    
    </section>

    <a class="btn_contact" href="<?= $router->generate('main_contactForm') ?>">  </a>
    