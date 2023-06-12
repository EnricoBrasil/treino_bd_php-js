<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Cadastro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="Controller/transition.js"></script>
	<link href="View/CSS/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
	
</head>
<body>
	<div class="container">
		<h1>Sistema de Informações Docente</h1>
		<form>
		<div>
					<h3>Aluno</h3>
					
					<a href="View/cadastroAluno.php" ><button class="btnAluno" type="button" id="cadastrar">Cadastrar</button></a>
					
					<a href="View/AtualizarAluno.php" ><button class="btnAluno" type="button" id="cadastrar">Atualizar</button></a>
				</div>
				<br>
				<div>
					<h3>Comentários</h3>
					<a href="View/comentario.php" ><button class="btnComent" type="button" id="cadastrar">Cadastrar</button></a>

					<a href="View/SelecionarComentario.php" ><button class="btnComent" type="button" id="selCom">Selecionar</button></a>
				</div>
				
		</form>
	</div>
</body>
</html>