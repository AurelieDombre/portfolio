<main class="corp">

	<section class="formulaire">
		<div class="posts">
			<h4>Si vous le souhaitez, vous pouvez me laisser un message :</h4>
			<form action="valider.php" method="post">

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
		</div>
	</section>


</main>