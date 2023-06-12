<?php
    require_once 'connection.php';

    //$dados = json_decode($_POST['dados'], true);

    $comentario = $_POST['comentario'];
    $cpf_aluno= $_POST['cpf'];


    $usertable = "comentario";

    mysqli_select_db($con,$dbname);
   
    $sql ="insert into $usertable (comentario, cpf_aluno) values ('$comentario', '$cpf_aluno')";

    if ($con->query($sql) === TRUE) {
      $data = array('status' => 'Inserido com sucesso');
    } else {
      $data = array('status' => 'erro', 'mensagem' => $con->error);
    }
  
    header('Content-type: application/json');
    echo json_encode($data);

    $con->close();

?>