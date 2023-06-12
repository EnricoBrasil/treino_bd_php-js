<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Cadastro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../Controller/transition.js"></script> 
</head>
<body>
	<h1>Cadastro de Aluno</h1>
	<form>

		<label for="cpf">CPF:</label>
		<input type="text" name="cpf" id="cpf"><br><br>

		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome"><br><br>
		
		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email"><br><br>
		
		<input type="submit" id="cadAluno" value="Cadastrar">
	</form>
</body>
</html>