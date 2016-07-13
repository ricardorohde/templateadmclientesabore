<?php 
    require_once('controller/pedidos_controller.php'); 
    require_once('header.php'); 
?>
<script src="../js/busca.js"></script>
<script>
    $(document).ready(function() {

        $('.atualizar_status').click(function() {

            $("#pedidoID").val($(this).attr('id_pedido'));            
            $("#status option[value="+$(this).attr('id_status')+"]").attr('selected', 'selected');            
        });
    });

    function jsVer(pedido)
    {        
        document.formAtualizarSituacao.action = "ped_detalhes_andamento.php";
        document.getElementById("pedidoID").value = pedido;
        document.getElementById("formAtualizarSituacao").submit();
    }

  function jsSubmitBusca()
  {
    document.formVisualizar.action = "ped_andamento.php";        
    document.getElementById("formularioBusca").submit();   
  }



</script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-clock-o fa-fw"></i> Acompanhe os pedidos</h1>
                </div>
            
    
                <!-- /.col-lg-12 -->
            </div>        
            <!-- /.row -->
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
                </form>
                         

                        <br>
                <div class="col-lg-12">
                <?PHP if($error){ ?>
                    <div class="alert alert-danger">
                            <?PHP echo $mensagem; ?>
                            </div>
                    <?PHP } ?>

                    <?PHP if($success){ ?>
                      <div class="alert alert-success">
                          <?PHP echo $mensagem; ?>
                      </div>
                    <?PHP } ?>
                    <div class="panel panel-default">

                            <div class="table-responsive">
                                <table class="table table-striped">
                                   
                                        <tr  style="background-color: #2c3e50; color: white;">
                                            <th> ID </th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Valor</th>
                                            <th></th>
                                        </tr>
                                         <form id="formAtualizarSituacao" name="formAtualizarSituacao" method="post">
                                        <?php foreach($listaPedidos['dados'] as $pedidos){?>
                                        <tr>
                                            <td align="center"><a href="javascript:void(0);" onclick="jsVer('<?PHP echo $pedidos['Pedido']['id'] ?>');"><?php echo $pedidos['Pedido']['id'];?></a></td>
                                            <td><?php echo $pedidos['Usuario']['nome'];?></td>
                                            <td><?php echo $pedidos['Usuario']['email'];?></td>
                                            <td><?php echo $pedidos['SituacaoPedido']['descricao'];?></td>
                                            <td>R$ <?php echo $pedidos['Pedido']['valor_total'];?></td>
                                            <td><a href="#" data-toggle="modal"  class="atualizar_status"
                                                    id_status="<?PHP echo $pedidos['SituacaoPedido']['id'] ?>" id_pedido="<?PHP echo $pedidos['Pedido']['id']; ?>" data-target="#status">Atualizar Status</a></td>
                                        </tr>
                                        <?php } ?>
                                </table>
                            </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #2c3e50; color: white;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel" align="center">Atualizando Status</h4>
                        </div>
                        <div class="modal-body">
                            <label> Selecione o status atual do pedido</label>
                            <form id="formAtualizarSituacao" name="formAtualizarSituacao" method="post" action="ped_andamento.php">
                             <div class="form-group">
                                <select class="form-control" name="situacao_pedido_id" id="situacao_pedido_id">
                                    <?php foreach($situacao['dados'] as $status){?>

                                        <option value="<?php echo $status['SituacaoPedido']['id'];?>">
                                            
                                        <?php echo $status['SituacaoPedido']['descricao'];?> 
                                        </option>
                                    <?php }?>                                                                                        
                                </select>
                            </div>
                            <div align="right">
                                    <button class="btn btn-success" type="submit" value="btn_btn_situacao" name="btn_btn_situacao" id="btn_btn_situacao" > Atualizar</button>
                            </div>
                            <input type="hidden" name="pedidoID" value="" id="pedidoID">  
                            <input type="hidden" name="AtualizacaoStatus" value="" id="AtualizacaoStatus"> 
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php require_once('footer.php'); ?>