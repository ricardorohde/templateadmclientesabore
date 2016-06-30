<?php 
    require_once('controller/pedidos_controller.php'); 
    require_once('header.php');
?>
<script src="../js/busca.js"></script>
<script>
    function jsVer(pedido)
    {        
        document.formVisualizar.action = "ped_detalhes_andamento.php";
        document.getElementById("pedidoID").value = pedido;
        document.getElementById("formVisualizar").submit();
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
                    <div class="panel panel-default">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                   
                                        <tr  style="background-color: #2c3e50; color: white;">
                                            <th></th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Valor</th>
                                            <th></th>
                                        </tr>
                                         <form id="formVisualizar" name="formVisualizar" action="ped_detalhes_andamento.php" method="post">
                                        <?php foreach($listaPedidos['dados'] as $pedidos){?>
                                        <tr>
                                            <td align="center"><a href="javascript:void(0);" onclick="jsVer('<?PHP echo $pedidos['Pedido']['id'] ?>');">Ver detalhes</a></td>
                                            <td><?php echo $pedidos['Usuario']['nome'];?></td>
                                            <td><?php echo $pedidos['Usuario']['email'];?></td>
                                            <td><?php echo $pedidos['SituacaoPedido']['descricao'];?></td>
                                            <td>R$ <?php echo $pedidos['Pedido']['valor_total'];?></td>
                                            <td><a href="#" data-toggle="modal" data-target="#status">Atualizar Status</a></td>
                                        </tr>
                                        <?php } ?>
                                        <input type="hidden" name="pedidoID" value="" id="pedidoID">  
        
                                    
                                </table>
                            </div>
                    </div>
                    <div align="right">
                        <button class="btn btn-success" >Exibir mais</button>
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
                            <form method="post" action="">
                             <div class="form-group">
                                <select class="form-control" name="status">
                                <?php foreach($situacao['dados'] as $status){?>
                                    <option value="<?php echo $status['SituacaoPedido']['id'];?>" <?php if ($status['SituacaoPedido']['id'] == 2){ echo "selected";}?>>
                                    <?php echo $status['SituacaoPedido']['descricao'];?>                                                
                                    </option>
                                    <?php echo $status['SituacaoPedido']['descricao'];?>
                                <?php }?>
                                </select>
                            </div>
                            <div align="right"><button class="btn btn-success"> Atualizar </button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php require_once('footer.php'); ?>