


<main class="main-container_form">
    <section>
        <h2 class="page__title">Votre demande de contacte a été envoyée</h2>

        <p class="form_message"> Mr/Mme <?= $_POST['firstname'] ?? '' ?> <?= $_POST['lastname'] ?? '' ?>,
            <br> nous vous recontacterons dans les meilleurs délais à l'adresse : <br>
            <?= $_POST['email'] ?? '' ?>


            <br> Merci de votre confiance

        <div id="signature" class="header__subtitle">
            Votre cinéma
        </div>
        <div id="signature" class="header__maintitle">
            Le Rodia
        </div>

        </div>

    </section>
</main>