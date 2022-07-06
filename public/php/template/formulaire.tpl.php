
<?php
include "";

$message = '';

if (empty($_POST) === false) {

    //* Etape 1 : On vérifie les données saisies
    if (isset($_POST['email'])) {

        $validEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($validEmail === false) {

            $message = 'vous avez saisi un email invalide, veuillez recommencer la saisie du formulaire';
        }
    }
}

?>


<section class="formulaire">
	<div class="posts">
		

			<form action="valider.php" method="post">

				<fieldset class="form__contact">
                <label class="form_lastname" for="lastname"> Votre nom</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Prénom" require value="<?= $_POST['lastname'] ?? '' ?>">
                        <label class="form_firstname" for="firstname">Votre prénom</label>
                        <input type="text" name="firstname" id="firstname" placeholder="Prénom" require value="<?= $_POST['firstname'] ?? '' ?>"> <br>
                        <label class="form_email" for="email"> Votre e-mail</label>
                        <input type="email" name="email" id="email" require value="<?= $_POST['email'] ?? '' ?>">

                        <?php if ($message != '') : ?>
                            <p class="alert"><?= $message ?></p>
                        <?php endif; ?>

		
				</fieldset>

				<fieldset class="form__text">
					<label class="form_message" for="message">Laissez votre message</label> <br>
					<textarea name="message" id="message" placeholder="Votre message" cols="30" rows="10"></textarea>
					<br> <button type="submit"> Envoyer</button>
				</fieldset>

			</form>

		
	</div>



</section>