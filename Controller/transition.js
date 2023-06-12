$(document).ready(function() {
    $('#enviar').click(function() {
        var comentario = $('#comentario').val();
        var cpf = $('#cpf').val();
        
        
        $.ajax({
            url: '../Model/InsertComentario.php',
            method: 'post',
            dataType: 'json',
            data: {
                comentario: comentario,
                cpf: cpf
            },
            success: function(response) {
                console.log(response);
                alert("Cadastrado com sucesso");
                $('#comentario').val("");
                $('#cpf').val("");
                },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                
            }
        });
    });
});


$(document).ready(function(){
    $('#cadAluno').click(function() {
        console.log("ok");
        var nome = $('#nome').val();
        var cpf = $('#cpf').val();
        var email = $('#email').val();
                        
        $.ajax({
            url: '../Model/InsertCadAluno.php',
            method: 'post',
            dataType: 'json',
            data: {
                nome: nome,
                email: email,
                cpf: cpf
            },
            success: function(response) {
                console.log(response);
                },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                
            }
        });
});
});



$(document).ready(function(){
    $('#selectCom').click(function() {
	var cpf = $("#cpf").val();

	$.ajax({
		url: "../Model/SelectComentario.php",
		data: { cpf: cpf },
        method: 'get',
		dataType: "json",
       success: function(data){

            if(data.comentario != "Nenhum registro encontrado."){

                const table = document.getElementById("Selcomentario"); 

                while(table.rows.length > 1) {
                    document.getElementsByTagName("tr")[1].remove();
                }
                
                //document.getElementById("nomeAluno").innerHTML = data[data.length -1];
                $('#nomeAluno').html(data[data.length -1]);
                preencherTabela(data);

            }else{
                alert (data.comentario);
            }
			
            
		},
         error: function(xhr, status, error) {
            console.log(xhr.responseText);
            console.log(error);
            $("#Selcomentario").val(xhr.responseText);
            
            }
	})
});

});


function preencherTabela(data) {
    var tbody = $('#Selcomentario');
    for (var i = 0; i < data.length - 1; i++) {
      var tr = $('<tr>');
      tr.append ('<td> ' + i + ' </td> ');    
      tr.append('<td> ' + data[i] + ' </td> ');
      tbody.append(tr);
    }
  }



  $(document).ready(function(){
    $('#pesqAluno').click(function() {
	var cpf = $("#cpf").val();
    //alert("Ok");

	$.ajax({
		url: "../Model/SelectAluno.php",
		data: { cpf: cpf },
        method: 'get',
		dataType: "json",
       success: function(data){

            if(data.comentario != "Nenhum registro encontrado."){

                $("#nomeAt").val(data[0]);
                $("#emailAt").val(data[1]);
                //alert("Ok");

            }else{
                alert (data.comentario);
            }
			
            
		},
         error: function(xhr, status, error) {
            console.log(xhr.responseText);
            console.log(error);
            
            
            }
	})
});

});


$(document).ready(function(){
    $('#atuAluno').click(function() {

        var nome = $('#nomeAt').val();
        var cpf = $('#cpf').val();
        var email = $('#emailAt').val();
                        
        $.ajax({
            url: '../Model/UpdateAluno.php',
            method: 'post',
            dataType: 'json',
            data: {
                nome: nome,
                email: email,
                cpf: cpf
            },
            success: function(response) {
                console.log(response);
                alert(response.status)
                $('#nomeAt').val('');
                $('#emailAt').val('');
                },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                
            }
        });
});
});