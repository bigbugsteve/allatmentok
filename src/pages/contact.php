<div class="global-container">
	<div class="card login-form bg-purple text-white">
	<div class="card-body">
		<h3 class="card-title text-center">Üzenet</h3>
		<div class="card-text">
		<form name="kapcsolat" action="?page=messageSent" onsubmit="ellenoriz()" method="post">

				<div class="form-group">
					<label for="contactName">Név</label>
					<input class="form-control form-control-sm" type="text" id="contactName" name="contactName" size="20" maxlength="40">
				</div>

				<div class="form-group">
					<label for="contactEmail">Email</label>
					<input class="form-control form-control-sm" type="email" id="contactEmail" name="contactEmail" size="30" maxlength="40">
				</div>

				<div class="form-group">
					<label for="contactMessage">Üzenet</label>
					<textarea id="contactMessage" name="contactMessage" cols="46" rows="10"></textarea>
				</div>
				<button onclick="ellenoriz()" type="button" class="btn bg-white text-blue btn-block">Ellenőriz</button>
				<input id="kuld" type="submit" value="Küld" class="btn bg-white text-blue btn-block">

			</form>
		</div>
	</div>
</div>
</div>