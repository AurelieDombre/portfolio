<main class="main-container_form">
    <section>
        <h2 class="page__title">Votre demande de contacte a été envoyée</h2>

        <p class="form_message"> Mr/Mme <?= $_POST['firstname'] ?? '' ?> <?= $_POST['lastname'] ?? '' ?>,
            <br> Merci de votre message. Je vous répondrais dans les meilleurs délais à l'adresse : <br>
            <?= $_POST['email'] ?? '' ?>


            <br> Merci de votre confiance

        <div id="signature" class="header__subtitle">
            Cordialement
        </div>
        <div id="signature" class="header__maintitle">
            Aurélie Dombre
        </div>

        <a href="<?= $router->generate('main_home') ?>"> Retour</a>
        

    </section>
</main>