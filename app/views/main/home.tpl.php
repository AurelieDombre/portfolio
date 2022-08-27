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
                    <a class="info" href="#"> Voir</a>
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


    <!-- A voir si je le mets ou pas
    <div class="icon--contact menu--contact">
        <img class="icon--contact--btn" src="assets/pictures/mail.png" alt="mail">
        <button class="menu--contact" type="button" > ME CONTACTEZ</button> 
            
    </div> -->

    <section class="formulaire ">
    
        <div class="posts">
            
            <form action="" method="post" class="all__form__contact">
            <img class="form__close" src="assets/pictures/close.png" alt="bouton fermé" aria-label="Fermer" type="button">
                <fieldset class="form__contact">
                    <label class="form_lastname" for="lastname"> Nom</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Prénom" require>
                    <label class="form_firstname" for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Prénom" require> 
                    <label class="form_email" for="email"> E-mail</label>
                    <input type="email" name="email" id="email" placeholder="@ E-mail" require>
                </fieldset>

                <fieldset class="form__text">
                    <label class="form_message" for="message">Laissez votre message</label> 
                    <textarea name="message" id="message" placeholder="Votre message"></textarea>
                    <button type="submit"> Envoyer</button>
                </fieldset>

            </form>

            <?php
            if (isset($_POST['message'])) {
                //MIME (Multipurpose Internet Mail Extensions).
                $entete  = 'MIME-Version: 1.0' . "\r\n";
                $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                //Fausse adresse pour envoyer le mail via notre serveur, il faut qu'il soit cohérent avec la serveur sur lequel est déployé le site 
                //(sinon ça part dans les spam)
                $entete .= 'From: contact@gmail.com' . "\r\n";
                //Pour pouvoir répondre par mail à l'expéditeur
                $entete .= 'Reply-to: ' . $_POST['email'];

                $message = '<h1>Message envoyé depuis la page Contact du portfolio</h1>
					<p><b>Nom : </b>' . $_POST['lastname'] . '<br>
					<p><b>Prénom : </b>' . $_POST['firstname'] . '<br>
					<p><b>Email : </b>' . $_POST['email'] . '<br>
					<b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';
                // dd($message);
                $retour = mail('au.dombre@gmail.com', 'Envoi depuis page Contact', $message, "");
                if ($retour)
                    echo '<p>Votre message a bien été envoyé.</p>';
            }

            ?>
        </div>
    </section>

    <section class="contact">
        <p> Pour plus d'information, je suis disponible par e-mail à l'adresse suivante : <a href="mailto:au.dombre@gmail.com">au.dombre@gmail.com </a> <br>
            ou par téléphone au : <a href="tel:+330786804399">07.86.80.43.99</a> </p>
    </section>