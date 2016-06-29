<?php 
    require_once('controller/pedidos_controller.php'); 
    require_once('header.php'); 
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-clock-o fa-fw"></i> 
                Detalhes do pedido Nº <?php echo $pedidos['dados']['Pedido']['id'];?>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row"> 
        <div class="col-lg-12"> 
            
                
                 <div align="center">
                     Dados do cliente
                    
                    <br>
                    <?php 
                    $situacao = $pedidos['dados']['SituacaoPedido']['id'];

                    if($situacao  == 1){
                        echo '<button class="btn btn-default">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }else if($situacao  == 2){
                        echo '<button class="btn btn-danger">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }else if($situacao  == 3){
                        echo '<button class="btn btn-warning">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }elseif($situacao == 4){
                        echo '<button class="btn btn-info">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }elseif($situacao == 5) {
                        echo '<button class="btn btn-primary">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }else if($situacao == 6){
                        echo '<button class="btn btn-success">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }else{
                        echo '<button class="btn btn-danger">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    } ?>
                    
					<em>Clique para passar para próximo status</em><br><br>
                 </div>


            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                 <tr style="background-color: #2c3e50; color: white;">
                    <th>Tipo</th>
                    <th>Produto</th>
                    <th>Valor</th>
                </tr>
                
                <?PHP foreach($pedidos['dados']['PedidoProduto'] as $row){ ?>
                    <tr>
                        <td>
                            <input type="checkbox" checked disabled>Meia</input><br>
                            <input type="checkbox" checked disabled>Broto</input>
                        </td>
                        <td><?PHP echo $row['dados_produto']['Produto']['nome']; ?></td>
                        <td>R$ <?PHP echo number_format($row['valor'], 2, ',', '.'); ?></td>
                    </tr>
                <?PHP } ?>
                

                <tr style="background-color: #2c3e50; color: white;">
                    <td>
                        <input type="checkbox" checked disabled>Borda recheada</input>
                    </td>
                    <td>Pagamento : <?php echo $pedidos['dados']['FormaPagamento']['descricao'];?></td>
                    <td>Total  : R$ <?php echo $pedidos['dados']['Pedido']['valor_total'];?> <br>  Troco : R$<?php echo $pedidos['dados']['Pedido']['troco'];?></td>
                </tr>
                </table>
            </div>   
             
                   <!--  <div align="center">
                    <form>
                    <textarea class="form-control" rows="3" placeholder="Observações..." name="observacoes" required style="width: 50%;"></textarea>
                    <a href="ped_andamento.php"><br>
                    <button class="btn btn-success" >Cadastrar observação</button>
                     </a><br><br>
                    </form>
                    </div> -->
        </div>
    </div>
    <div align="center">
        <a href="ped_andamento.php">
            <button class="btn btn-success" >Retornar a acompanhamento</button>
        </a>
                    
        <br><br><br>
                   <h4> Botão de status (Cores) </h4><br>
                    <label>Desenvolvimento <button class="btn btn-default"></button></label> <br>
                    <label>Aguardando Confirmação <button class="btn btn-danger"></button></label><br> 
                    <label>Confirmado <button class="btn btn-warning"></button></label> <br>
                    <label>Sendo Feito <button class="btn btn-info"></button></label> <br>
                    <label>Saiu para Entrega <button class="btn btn-primary"></button></label><br> 
                    <label>Entregue <button class="btn btn-success"></button></label> <br>
    </div>  
  
</div>



<?php require_once('footer.php'); ?>