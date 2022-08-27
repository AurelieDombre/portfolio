<header>
	<div class="entete--contact">
		<h1>Contact</h1>
	</div>

</header>

<div class="corp">

	<section class="formulaire">
		<div class="posts">
			<h4>Si vous le souhaitez, vous pouvez me laisser un message :</h4>
			<form action="" method="post">

				<fieldset class="form__contact">
					<label class="form_lastname" for="lastname"> Nom</label>
					<input type="text" name="lastname" id="lastname" placeholder="Prénom" require>
					<label class="form_firstname" for="firstname">Prénom</label>
					<input type="text" name="firstname" id="firstname" placeholder="Prénom" require> <br>
					<label class="form_email" for="email"> E-mail</label>
					<input type="email" name="email" id="email" placeholder="@ E-mail" require>
				</fieldset>

				<fieldset class="form__text">
					<label class="form_message" for="message">Laissez votre message</label> <br>
					<textarea name="message" id="message" placeholder="Votre message" cols="30" rows="10"></textarea>
					<br> <button type="submit"> Envoyer</button>
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
					$retour = mail('au.dombre@gmail.com', 'Envoi depuis page Contact', $message,"");
					if($retour)
						echo '<p>Votre message a bien été envoyé.</p>';
				}
				
			?>
		</div>
	</section>

	<section class="contact">
		<h3 id="contact">CONTACT</h3>
		<p> Pour plus d'information, je suis disponible par e-mail à l'adresse suivante : <a href="mailto:au.dombre@gmail.com">au.dombre@gmail.com </a> <br>
			ou par téléphone au : <a href="tel:+330786804399">07.86.80.43.99</a> </p>
	</section>