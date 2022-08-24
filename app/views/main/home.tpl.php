
<header>
    
    <div class="entete">
        <h1> Aurélie Dombre</h1>
        <h2> Développeuse Web</h2>
    </div>
<!-- Menu -->
<?php 
include __DIR__.'/../partials/nav.tpl.php';
?>

</header>

<div class="corp">
    <section class="Bienvenue">
        <h3>BIENVENUE</h3>

        <p> J'ai le plaisir de vous présenter dans ce portfolio les
            projets que j'ai menez à bien. </p>
    </section>

    <section class="projets">
        <h3>PROJETS</h3>
        <div class="projets__card">
            <img class="projets__card--img" src="/assets/pictures/qualiextra.jpg" alt="Image de création WEB" href="#">
            <span> Qualiextra, expériences épicuriennes</span>
        </div>

        <div class="projets__card">
        <img class="projets__card--img" src="/assets/pictures/image_cv.jpg" alt="Image languages Web" href="#"> 
        <span> Mon curriculum vitae </span>    
    </div>    
    </section>

    <a class="btn_contact" href="<?= $router->generate('main_contactForm') ?>">  </a>
    