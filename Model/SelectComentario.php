<?php
    require_once 'connection.php';
    header("Content-Type: application/json");

    $cpf =$_GET['cpf'];
    $dados =[];

    $usertable = "comentario";

    mysqli_select_db($con,$dbname);


	$query = "SELECT comentario FROM comentario WHERE cpf_aluno = $cpf";
    $resultado = mysqli_query($con,$query);
    
	if(mysqli_num_rows($resultado) > 0){

        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados,$row["comentario"]);
        }

        $queryAluno = "SELECT nome FROM aluno WHERE cpf = $cpf";
        $resultado = mysqli_query($con,$queryAluno );

        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados,$row["nome"]);
        }
        
    }else{
        $dados["comentario"] = "Nenhum registro encontrado.";
    }
	
    echo json_encode($dados);

    mysqli_close($con);

?>