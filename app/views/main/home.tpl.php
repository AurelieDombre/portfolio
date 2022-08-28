<!-- Menu -->
<?php
include __DIR__ . '/../partials/nav.tpl.php';
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
                    <a class="info" target="_blank" href="https://github.com/AurelieDombre/Qualiextra"> Voir</a>
                </div>
            </div>
        </div>

        <div class="projets__card">
            <div class="hovereffect">
                <img class="projets__card--img img-responsive" src="assets/pictures/cv.jpg" alt="Image languages Web" href="#">
                <div class="overlay">
                    <h5>Mon curriculum vitae</h5>
                    <a class="info" target="_blank" href="https://aureliedombre.github.io/cv-developpeuse-web"> Voir </a>
                </div>
            </div>
        </div>
    </section>


    <section class="formulaire ">

        <div class="posts">
            <form action="" method="post" class="all__form__contact">
            <img class="form__close" src="assets/pictures/close.png" alt="bouton fermé" aria-label="Fermer" type="button">
                <fieldset class="form__contact">
                    <label class="form_lastname" for="lastname"> Nom</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Nom" value="<?= $_POST['lastname'] ?? '' ?>" require>
                        <?php if (isset($errorsList['lastname'])) : ?>
                            <p><?php $errorsList['lastname'] ?></p>
                        <?php endif ?>
                    <label class="form_firstname" for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Prénom" value="<?= $_POST['firstname'] ?? '' ?>" require>
                        <?php if (isset($errorsList['firstname'])) : ?>
                            <p><?php $errorsList['firstname'] ?></p>
                        <?php endif ?> 
                    <label class="form_email" for="email"> E-mail</label>
                    <input type="email" name="email" id="email" placeholder="@ E-mail" value="<?= $_POST['email'] ?? '' ?>" require>
                        <?php if (isset($errorsList['mail'])) : ?>
                            <p><?php $errorsList['mail'] ?></p> 
                        <?php endif ?>
                </fieldset>

                <fieldset class="form__text">
                    <label class="form_message" for="messageContact">Laissez votre message</label> 
                    <textarea type="texte" name="messageContact" id="message" placeholder="Votre message" value="<?= $_POST['messageContact'] ?? '' ?>"></textarea>
                        <?php if (isset($errorsList['messageContact'])) : ?>
                            <p><?php $errorsList['messageContact'] ?></p>
                        <?php endif ?>
                    <button type="submit" name="submit"> Envoyer</button>
                </fieldset>
            </form>

        </div>
        

    </section>

    <section class="contact">
        <p> Pour plus d'information, je suis disponible par e-mail à l'adresse suivante : <a href="mailto:au.dombre@gmail.com">au.dombre@gmail.com </a> <br>
            ou par téléphone au : <a href="tel:+330786804399">07.86.80.43.99</a> </p>
    </section>