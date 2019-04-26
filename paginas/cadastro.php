<h2>Cadastro</h2>

<form action="paginas/processar.php" method="POST">

	<div class="input-group mb-3">
		<input type="text" class="form-control" required="" placeholder="Email do guerreiro" aria-label="Email do guerreiro" aria-describedby="basic-addon2" name="email">
		<div class="input-group-append">
			<span class="input-group-text" id="basic-addon2">@milico.com</span>
		</div>
	</div>

	<div class="input-group mb-3">
		<select class="custom-select" id="inputGroupSelect02">
			<option selected>Escolha sua cidade</option>
			<option value="1">Campanha</option>
			<option value="2">Lavras</option>
			<option value="3">Cambuquira</option>
		</select>
		<div class="input-group-append">
			<label class="input-group-text" for="inputGroupSelect02">Options</label>
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Enviar</button>
</form>