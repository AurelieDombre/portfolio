
    <nav>
        <a href="<?= $router->generate('main_home') ?>" title="Accueil général">
            <!-- this anchor text for link your home to another page -->
            <div class="icon">
                <img src="assets/pictures/home.png" alt="home" >
            </div>
            <div class="name"><span data-text="Home">Accueil</span></div>
            <!-- we are create first menu item name home -->
        </a>

        <a href="<?= $router->generate('main_contactForm') ?>">
            <!-- this anchor text for link your home to another page -->
            <div class="icon">
                <img src="assets/pictures/mail.png" alt="home" >
            </div>
            <div class="name"><span data-text="Contact">Contact</span></div>
            <!-- we create first menu item name home -->
        </a>
    </nav>
</html>