<?php
    require_once 'connection.php';

    //$dados = json_decode($_POST['dados'], true);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf =$_POST['cpf'];


    $usertable = "aluno";

    mysqli_select_db($con,$dbname);
   
    $sql ="insert into $usertable (cpf, nome, email) values ('$cpf' , '$nome' , '$email')";

    if ($con->query($sql) === TRUE) {
      $data = array('status' => 'Inserido com sucesso');
    } else {
      $data = array('status' => 'erro', 'mensagem' => $con->error);
    }
  
    header('Content-type: application/json');
    echo json_encode($data);

    $con->close();

?>