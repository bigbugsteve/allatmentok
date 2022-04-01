<div class="global-container">
	<div class="card login-form bg-purple text-white">
	<div class="card-body">
		<h3 class="card-title text-center">Bejelentkezés</h3>
		<div class="card-text">
			<form action="?page=loggedIn" method="post">
				<div class="form-group">
					<label for="email">Email</label> // TODO hivatkozások és nevek átnevezése -> loginName
					<input type="email" name="email" class="form-control form-control-sm" id="email" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="password">Jelszó</label>
					<!-- <a href="#" style="float:right;font-size:12px;">Forgot password?</a> -->
					<input type="password"  name="password" class="form-control form-control-sm" id="password">
				</div>
				<button type="submit" class="btn bg-white text-blue btn-block">Bejelentkezés</button>
				
				<div class="sign-up d-flex justify-content-between align-items-center mt-3">
					Nincs még fiókja? <a href="?page=registration" class="bg-white btn p-1">Regisztráció</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
