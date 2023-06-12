<?php
    require_once 'connection.php';
    header("Content-Type: application/json");

    $cpf = $_GET['cpf'];
    $dados =[];

    $usertable = "aluno";

    mysqli_select_db($con,$dbname);


	$query = "SELECT nome, email FROM aluno WHERE cpf = $cpf";
	$resultado = mysqli_query($con,$query);
    
	if(mysqli_num_rows($resultado) > 0){

        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados,$row["nome"]);
            array_push($dados,$row["email"]);
        }

        //$dados = mysqli_fetch_assoc($resultado);
        
    }else{
        $dados["comentario"] = "Nenhum registro encontrado.";
    }
	
    echo json_encode($dados);

    mysqli_close($con);

?>