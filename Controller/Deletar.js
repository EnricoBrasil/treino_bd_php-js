function excluiRegistro(id,botao){
    const rowIndex = botao.parentNode.parentNode.rowIndex;

    $.ajax({
        type: "POST",
        url: "../Model/DeleteComentario.php",

        data: { id: id },
        success: function(data) {
            console.log(data);
            if (data.status != "error") {
                document.getElementById('Selcomentario').deleteRow(rowIndex);
                alert("Registro excluido com sucesso!");
            }else{
                alert("Erro ao excluir o registro!");
            }
        }
    });
}