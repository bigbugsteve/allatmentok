<div class="global-container">
	<div class="card login-form bg-purple text-white">
	<div class="card-body">
		<h3 class="card-title text-center">Üzenet</h3>
		<div class="card-text">
		<form name="kapcsolat" action="?page=messageSent" method="post">

				<div class="form-group">
					<label for="contactName">Név</label>
					<input class="form-control form-control-sm" type="text" id="contactName" name="contactName" size="20" maxlength="40">
					<div class="contactNameInvalid">Minimum 4 karakter</div>
				</div>

				<div class="form-group">
					<label for="contactEmail">Email</label>
					<input class="form-control form-control-sm" type="email" id="contactEmail" name="contactEmail" size="30" maxlength="40">
					<div class="contactEmailInvalid">Nem megfelelő formátum</div>
				</div>

				<div class="form-group">
					<label for="contactMessage">Üzenet</label>
					<textarea id="contactMessage" name="contactMessage" cols="46" rows="10"></textarea>
				</div>
				<!-- <button  type="button" class="btn bg-white text-blue btn-block">Ellenőriz</button> -->
				<button id="contactSendBtn" type="submit" disabled="true" class="btn bg-white text-blue btn-block">Küldés</button>
				<!-- <button disabled="true" id="kuld" type="submit" class="btn bg-white text-blue btn-block">Küld
					< /button> -->
			</form>
		</div>
	</div>
</div>
</div>