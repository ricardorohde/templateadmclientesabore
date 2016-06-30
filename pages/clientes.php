<?php require_once('controller/clientes_controller.php'); ?>
<?php require_once('header.php'); ?>
<script src="../js/busca.js"></script>
<script>

    $(document).ready(function(){

        $(".detalhes").click(function() {        
            var Modal = '#myModal_' + $(this).attr('data-id');
            $(Modal).modal();  
        });     
    });  

    function jsSubmitBusca()
    {
        document.formClienteListar.action = "clientes.php";        
        document.getElementById("formularioBusca").submit();   
    }
</script>
<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-group fa-fw"></i> Clientes 
    </h1>
    <div class="row">
       <form name="formularioBusca" method="post">
        <div class="col-lg-3">
            <input class="form-control" placeholder="Pesquise Aqui" id="input_busca" name="input_busca" 
            value="<?PHP echo $input_busca; ?>">                    
            <input type="hidden" name="busca" value="true">
        </div>
        <div>
            <button id="buscar" class="btn btn-error" onclick="jsSubmitBusca();">Buscar</button>
        </div>  
    </form><br>
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <tr style="background-color: #2c3e50; color: white;">
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Detalhes</th>
                </tr>
                <form id="formClienteListar" name="formClienteListar" action="clientes.php" method="post">
                    <?php foreach($listaClientes['dados'] as $cliente){?>
                    <tr>
                        <td><?php echo $cliente['Usuario']['nome']; ?></td>
                        <td><?php echo $cliente['Usuario']['email']; ?></td>
                        <td><?php echo $cliente['Usuario']['telefone']; ?></td>
                        <td>
                            <a href="javascript:void(0);" class="detalhes" data-id="<?PHP echo $cliente['Usuario']['id']; ?>" ><i class="fa fa-search-plus fa-fw"></i></a>
                        </td>
                    </tr>

                    <div class="modal fade" id="myModal_<?PHP echo $cliente['Usuario']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-confirma-add" role="document">
                        <div class="modal-content confirmar-add">
                          <div class="modal-header modal-header-admin">
                            <h3 class="title-modal">Detalhes do cliente</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
                          </div>
                          <div class="modal-body">
                            <ul>
                                <li><span>Nome:</span> <?PHP echo $cliente['Usuario']['nome']; ?>&nbsp;<?PHP echo $cliente['Usuario']['sobrenome']; ?></li>
                                <li><span>Email:</span> <?PHP echo $cliente['Usuario']['email']; ?></li>
                                <li><span>Endereço:</span> <?PHP echo $cliente['Usuario']['endereco']; ?>, <?PHP echo $cliente['Usuario']['numero']; ?></li></li>
                                <li><span>Complemento:</span> <?PHP echo $cliente['Usuario']['complemento']; ?></li>
                                <li><span>Bairro:</span> <?PHP echo $cliente['Usuario']['bairro']; ?></li>
                                <li><span>Cidade:</span> <?PHP echo $cliente['Usuario']['cidade']; ?> - <?PHP echo $cliente['Usuario']['estado']; ?></li>
                                <li><span>CEP:</span> <?PHP echo $cliente['Usuario']['cep']; ?></li>
                                <li><span>Telefone:</span> <?PHP echo $cliente['Usuario']['telefone']; ?></li>
                                <li><span>Celular:</span> <?PHP echo $cliente['Usuario']['celular']; ?></li>
                            </ul>
                          </div>
                        
                    </div>
                </div>
            </div>                     
        </div>

        

        <?php } ?>

        <input type="hidden" name="clienteID" value="" id="clienteID">
    </table>
    
</div>
</div>
</div>  


<?php require_once('footer.php'); ?>