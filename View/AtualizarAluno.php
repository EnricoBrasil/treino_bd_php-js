<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Cadastro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../Controller/transition.js"></script> 
</head>
<body>
	<h1>Cadastro de Aluno</h1>
	<form id=upAluno>

		<label for="cpf">Digite o CPF do aluno:</label>
		<input type="text" name="cpf" id="cpf">
        <button type="button" id="pesqAluno">Selecionar</button><br><br>

		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nomeAt"><br><br>
		
		<label for="email">E-mail:</label>
		<input type="email" name="email" id="emailAt"><br><br>
		
		<button type="button" id="atuAluno">Atualizar</button>
	</form>
</body>
</html>