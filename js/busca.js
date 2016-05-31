$(document).ready(function() {
  $('#inputnped').hide();
  $('#busca').change(function() {
    if ($('#busca').val() == 'nped') {
      $('#inputnped').show();
    } else {
      $('#inputnped').hide();
    }
  });
    $('#inputnome').hide();
  $('#busca').change(function() {
    if ($('#busca').val() == 'nome') {
      $('#inputnome').show();
    } else {
      $('#inputnome').hide();
    }
  });
    $('#inputcpf').hide();
  $('#busca').change(function() {
    if ($('#busca').val() == 'cpf') {
      $('#inputcpf').show();
    } else {
      $('#inputcpf').hide();
    }
  });
    $('#inputemail').hide();
  $('#busca').change(function() {
    if ($('#busca').val() == 'email') {
      $('#inputemail').show();
    } else {
      $('#inputemail').hide();
    }
  });
    $('#inputdata').hide();
  $('#busca').change(function() {
    if ($('#busca').val() == 'data') {
      $('#inputdata').show();
    } else {
      $('#inputdata').hide();
    }
  });



//Aqui é do usuarios
    $('#inputusername').hide();
  $('#usuarios_busca').change(function() {
    if ($('#usuarios_busca').val() == 'nome') {
      $('#inputusername').show();
    } else {
      $('#inputusername').hide();
    }
  });
      $('#inputcpf').hide();
  $('#usuarios_busca').change(function() {
    if ($('#usuarios_busca').val() == 'cpf') {
      $('#inputcpf').show();
    } else {
      $('#inputcpf').hide();
    }
  });
      $('#inputemail').hide();
  $('#usuarios_busca').change(function() {
    if ($('#usuarios_busca').val() == 'email') {
      $('#inputemail').show();
    } else {
      $('#inputemail').hide();
    }
  });




  //Aqui vai o busca de produtos


      $('#inputcategoria').hide();
  $('#produto_busca').change(function() {
    if ($('#produto_busca').val() == 'categoria') {
      $('#inputcategoria').show();
    } else {
      $('#inputcategoria').hide();
    }
  });
      $('#inputproduto').hide();
  $('#produto_busca').change(function() {
    if ($('#produto_busca').val() == 'produto') {
      $('#inputproduto').show();
    } else {
      $('#inputproduto').hide();
    }
  });
      $('#inputvalor').hide();
  $('#produto_busca').change(function() {
    if ($('#produto_busca').val() == 'valor') {
      $('#inputvalor').show();
    } else {
      $('#inputvalor').hide();
    }
  });
// aqui vai a busca no acompanhamento pedidos
  $('#inputnped').hide();
  $('#acompanhamento').change(function() {
    if ($('#acompanhamento').val() == 'nped') {
      $('#inputnped').show();
    } else {
      $('#inputnped').hide();
    }
  });
    $('#inputnome').hide();
  $('#acompanhamento').change(function() {
    if ($('#acompanhamento').val() == 'nome') {
      $('#inputnome').show();
    } else {
      $('#inputnome').hide();
    }
  });
    $('#inputvalor').hide();
  $('#acompanhamento').change(function() {
    if ($('#acompanhamento').val() == 'valor') {
      $('#inputvalor').show();
    } else {
      $('#inputvalor').hide();
    }
  });
    $('#inputemail').hide();
  $('#acompanhamento').change(function() {
    if ($('#acompanhamento').val() == 'email') {
      $('#inputemail').show();
    } else {
      $('#inputemail').hide();
    }
  });
    $('#inputstatus').hide();
  $('#acompanhamento').change(function() {
    if ($('#acompanhamento').val() == 'status') {
      $('#inputstatus').show();
    } else {
      $('#inputstatus').hide();
    }
  });


//Aqui é do clientes
    $('#inputusername').hide();
  $('#clientes_busca').change(function() {
    if ($('#clientes_busca').val() == 'nome') {
      $('#inputusername').show();
    } else {
      $('#inputusername').hide();
    }
  });
      $('#inputcpf').hide();
  $('#clientes_busca').change(function() {
    if ($('#clientes_busca').val() == 'cpf') {
      $('#inputcpf').show();
    } else {
      $('#inputcpf').hide();
    }
  });
      $('#inputemail').hide();
  $('#clientes_busca').change(function() {
    if ($('#clientes_busca').val() == 'email') {
      $('#inputemail').show();
    } else {
      $('#inputemail').hide();
    }
  });

   $('#inputnumber').hide();
  $('#clientes_busca').change(function() {
    if ($('#clientes_busca').val() == 'telefone') {
      $('#inputnumber').show();
    } else {
      $('#inputnumber').hide();
    }
  });
  $('#input_pedidos').hide();
  $('#clientes_busca').change(function() {
    if ($('#clientes_busca').val() == 'pedidos') {
      $('#n_pedidos').show();
    } else {
      $('#n_pedidos').hide();
    }
  });





});

