<?php require_once('controller/historico_controller.php'); ?>
<?php require_once('header.php'); ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-clock-o fa-fw"></i> 
                    Detalhes do pedido <?php echo $listaPedidos['dados']['Pedido']['id']; ?>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row"> 
        <div class="col-lg-12">
                
                 <div align="center">
                    <b> <?php echo $listaPedidos['dados']['Pedido']['data_pedido']; ?> </b><br>
                     <?php echo $listaPedidos['dados']['Usuario']['nome']; ?> <br>
                     <?php echo $listaPedidos['dados']['Usuario']['email']; ?><br>
                     <?php echo $listaPedidos['dados']['Usuario']['endereco']; ?>, 
                     <?php echo $listaPedidos['dados']['Usuario']['numero']; ?>, 
                     <?php echo $listaPedidos['dados']['Usuario']['bairro']; ?> <br>
                     <?php echo $listaPedidos['dados']['Usuario']['complemento']; ?><br><br>
                     <h4><b><?php echo $listaPedidos['dados']['SituacaoPedido']['descricao']; ?> </b></h4>
                    <br>

                    

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                 <tr style="background-color: #2c3e50; color: white;">
                    <th>Tipo</th>
                    <th>Produto</th>
                    <th>Valor</th>
                </tr>
                <?PHP foreach($listaPedidos['dados']['PedidoProduto'] as $pedidos){?>                                                           
                <tr>
                    <td>
                        <input type="checkbox"  <?PHP if($pedidos['metade'] == 'S'){ echo "checked"; }?> disabled>Meia</input><br>
                        <input type="checkbox" <?PHP if($pedidos['mini'] == 'S'){ echo "checked"; }?> disabled>Broto</input>
                    </td>
                    <td><?php echo $pedidos['produto_id']; ?></td>
                    <td><?php echo $pedidos['valor']; ?></td>
                </tr>                                       
                <?PHP } ?>

                <tr style="background-color: #2c3e50; color: white;">
                    <td>
                        <input type="checkbox" checked disabled>Borda recheada</input>
                    </td>
                    <td>Pagamento : <?php echo $listaPedidos['dados']['FormaPagamento']['descricao']; ?></td>
                    <td>Total : R$ <?php echo $listaPedidos['dados']['Pedido']['valor_total']; ?> <br>Troco : R$ <?php echo $listaPedidos['dados']['Pedido']['troco']; ?> </td>
                </tr>
                </table>
            </div>   
             
                    
        </div>
    </div>
    <div align="center">
        <a href="historico.php">
            <button class="btn btn-success" >Retornar a Histórico</button><br><br>
        </a>        
    </div>  
        
</div>



<?php require_once('footer.php'); ?>