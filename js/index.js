$(document).ready(function() {


    $("#vendas_habilitar").click(function() 
      {       
        $("#vendas_desabilitado").hide();          
        $("#vendas_habilitado").show();         
      });
    $("#vendas_desabilitar").click(function() 
      {       
        $("#vendas_desabilitado").show();          
        $("#vendas_habilitado").hide();         
      });

});
