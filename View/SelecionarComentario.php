<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Cadastro de Alunos Legais</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="../Controller/transition.js"></script> 
    
</head>
<body>

    <div class="container" >
        <br><br><br>
		<form id="form-dados">
        <h3>Selecionar Comentários</h3>

        <label>Informe o CPF do aluno</label>
        <input type="text" id="cpf"  name="cpf">
        <button type="button" id="selectCom">Selecionar</button><br>
        <br>
        <label>Aluno: </label><label id=nomeAluno></label>

        <table id="Selcomentario">
            <thead>
                <tr>
                <th>Nº  |</th>  
                <th>Comentario</th>
                </tr>
            </thead>
            <br>
            <tbody>
            </tbody>
        </table>
        
        <br>
		
		</form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>