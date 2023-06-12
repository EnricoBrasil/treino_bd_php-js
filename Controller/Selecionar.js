function preencherTabela(data){
    var tbody = $('#Selcomentario');
    var n=0;
    for (var i = 0; i < data.lenght - 1; i+=2) {
        var tr = $('<tr>');
        n++;
        tr.append (' <td> ' + n + ' </td> ');
        tr.append(' <td> ' + data[i +1] + ' </td> ');
        tr.append('<td> <button type="button" class="btn-DeleteComment" onclick = "excluiRegistro('+ data[i]+', this)"></button> </td>');
        tbody.append(tr);
    }
}