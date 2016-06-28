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


    function jsExcluir(cliente)
    {        
        document.formClienteListar.action = "clientes.php";
        document.getElementById("clienteID").value = cliente;
        document.getElementById("formClienteListar").submit();
    }

</script>
<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-group fa-fw"></i> Clientes 
    </h1>
    <div class="row">
        <div class="col-lg-3"> 
           <div class="form-group">
            <select class="form-control" required="required" id="clientes_busca">
                <option value="" style="display:none">Escolha um Método de busca</option>
                <option value="nome" id="nome">Nome</option>
                <option value="email" id="email">Email</option>
                <option value="telefone" id="telefone">Telefone</option>
            </select>
        </div> 
    </div>
    <div class="col-lg-3">
        <input class="form-control" placeholder="Nome" id="inputusername" style="display:none">
        <input class="form-control" placeholder="Email" id="inputemail" style="display:none">
        <input class="form-control" placeholder="Telefone do Cliente (numeros)" id="inputnumber" style="display:none">
    </div>  
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
                            <a href="javascript:void(0);" onclick="jsExcluir('<?PHP echo $cliente['Usuario']['id'] ?>');">
                                <i class="fa fa-trash-o fa-fw"></i>
                            </a>
                            <a href="javascript:void(0);" class="detalhes" data-id="<?PHP echo $cliente['Usuario']['id']; ?>" ><i class="fa fa-search-plus fa-fw"></i></a>

                        </td>
                    </tr>

                    <div class="modal fade" id="myModal_<?PHP echo $cliente['Usuario']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-confirma-add" role="document">
                        <div class="modal-content confirmar-add">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
                          </div>
                          <div class="modal-body">
                            
                          </div>
                          <div class="modal-footer">
                            <?PHP echo $cliente['Usuario']['nome']; ?>
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