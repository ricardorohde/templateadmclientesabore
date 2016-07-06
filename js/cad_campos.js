$(document).ready(function() {

//Categoria 
$('#borda_categoria').click(function(){
        if($(this).attr("value")=="S"){
            $("#input_valor").show();
        } 
    });
    $('#borda1_categoria').click(function(){
        if($(this).attr("value")=="N"){
            $("#input_valor").hide();
        } 
    });

//Produtos
$('#broto_produto').click(function(){
        if($(this).attr("value")=="S"){
            $("#input_valor_broto_produto").show();
        } 
    });
$('#broto1_produto').click(function(){
        if($(this).attr("value")=="N"){
            $("#input_valor_broto_produto").hide();
        } 
    });



$('#metade_produto').click(function(){
        if($(this).attr("value")=="S"){
            $("#input_valor_metade_produto").show();
        } 
    });
$('#metade1_produto').click(function(){
        if($(this).attr("value")=="N"){
            $("#input_valor_metade_produto").hide();
        } 
    });



// metade broto 
$('#metade_produto').click(function(){
    if($(this).attr("value")=="S"){
        $('#broto_produto').click(function(){
            if($(this).attr("value")=="S"){
                $("#input_valor_metade_broto_produto").show();
            } 
        });
    } 
});
$('#broto_produto').click(function(){
    if($(this).attr("value")=="S"){
        $('#metade_produto').click(function(){
            if($(this).attr("value")=="S"){
                $("#input_valor_metade_broto_produto").show();
            } 
        });
    } 
});
$('#metade1_produto').click(function(){
    if($(this).attr("value")=="N"){
        $("#input_valor_metade_broto_produto").hide();
    } 
});
$('#broto1_produto').click(function(){
    if($(this).attr("value")=="N"){
        $("#input_valor_metade_broto_produto").hide();
    } 
});


//banner







});
