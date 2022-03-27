<div class="global-container">
	<div class="card login-form bg-purple text-white">
	<div class="card-body">
		<h3 class="card-title text-center">Uzenet</h3>
		<div class="card-text">
		<form name="kapcsolat" action="contact.php" onsubmit="return ellenoriz();" method="post">

				<div class="form-group">
					<label for="exampleInputName">Nev</label>
					<input class="form-control form-control-sm" input type="text" id="nev" name="nev" size="20" maxlength="40">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail">Email</label>
					<input class="form-control form-control-sm" input type="text" id="email" name="email" size="30" maxlength="40">
				</div>

				<div class="form-group">
					<label for="exampleInputMessage">Uzenet</label>
					<textarea id="szoveg" name="szoveg" cols="46" rows="10"></textarea>
				</div>
				<button onclick="ellenoriz()" type="button" class="btn bg-white text-blue btn-block">Ellenőriz</button>
				<input id="kuld" type="submit" value="Küld" class="btn bg-white text-blue btn-block">

			</form>
		</div>
	</div>
</div>
</div>