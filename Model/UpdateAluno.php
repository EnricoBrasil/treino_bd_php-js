<?php
    require_once 'connection.php';

    //$dados = json_decode($_POST['dados'], true);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf =$_POST['cpf'];


    $usertable = "aluno";

    mysqli_select_db($con,$dbname);
    $query = "SELECT * FROM aluno WHERE cpf = $cpf";
    $resultado = mysqli_query($con,$query);

    if(mysqli_num_rows($resultado) > 0){

    $sql ="UPDATE $usertable SET nome = '$nome' , email = '$email' WHERE cpf = '$cpf' ";

        if ($con->query($sql) === TRUE) {
          $data = array('status' => 'Atualizado com sucesso');
        } else {
          $data = array('status' => 'erro', 'mensagem' => $con->error);
        }

    }else{

      $data = array('status' => 'Aluno não encontrado');
    }

    
  
    header('Content-type: application/json');
    echo json_encode($data);

    $con->close();

?>