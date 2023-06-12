<?php

require_once 'connection.php';
$id = $_POST['id'];
$dados = [];
mysqli_select_db($con,$dbname);

$sql = "DELETE FROM comentario WHERE idCojmentario = $id";

if ($con->query($sql) === TRUE){
    $dados["status"] = "deletado";
}else{
    $dados["status"] = "error";
}

echo json_encode($dados);

mysqli_close($con);
?>