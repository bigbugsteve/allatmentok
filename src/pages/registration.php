<div class="global-container">
	<div class="card registration-form bg-purple text-white">
		<div class="card-body">
			<h3 class="card-title text-center">Regisztráció</h3>
			<div class="card-text">
				<form action="?page=regSuccess" method="POST">
					<div class="form-group">
						<label for="firstName">Vezetéknév</label>
						<input type="text" class="form-control form-control-sm" id="firstName" name="firstName">
						<div class="firstNameInvalid">Minimum 3 karakter</div>
					</div>
					<div class="form-group">
						<label for="lastName">Keresztnév</label>
						<input type="text" class="form-control form-control-sm" id="lastName" name="lastName">
						<div class="lastNameInvalid">Minimum 3 karakter</div>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control form-control-sm" id="registrationEmail" name="email">
						<div class="registrationEmailInvalid">Nem megfelelő formátum</div>
					</div>
					<div class="form-group">
						<label for="password">Jelszó</label>
						<!-- <a href="#" style="float:right;font-size:12px;">Forgot password?</a> -->
						<input type="password" class="form-control form-control-sm" id="registrationPassword" name="password">
						<div class="registrationPasswordInvalid">Minimum 6 karakter</div>
					</div>
					<button disabled="true" type="submit" id="registrationButton" class="btn bg-white text-blue btn-block">Regisztráció</button>
				</form>
			</div>
		</div>
	</div>
</div>