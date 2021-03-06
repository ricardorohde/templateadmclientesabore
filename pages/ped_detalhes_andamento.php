<?php 
    require_once('controller/pedidos_controller.php'); 
    require_once('header.php'); 
    $success1 = $_GET['success']; 
    $pedidoID = $_GET['pedidoID'];
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


    <?PHP if($error){ ?>
    <div class="alert alert-danger"> 
        <?PHP echo $mensagem; ?>
    </div>
    <?PHP } ?>

    <?PHP if($success1==true){ ?>
    <div class="alert alert-success">
      <?PHP echo 'Situação atualizada com sucesso no seu site!'; ?>
  </div>
  <?PHP } ?>

    <!-- /.row -->
    <div class="row"> 
        <div class="col-lg-12"> 
            
                
                 <div align="center">
                 <h4> <b>   Dados do cliente </b></h4>
            <?php echo $pedidos['dados']['Usuario']['nome']; ?> <br>
            <?php echo $pedidos['dados']['Usuario']['email']; ?><br>
            <?php echo $pedidos['dados']['Usuario']['endereco']; ?>, 
            <?php echo $pedidos['dados']['Usuario']['numero']; ?>, 
            <?php echo $pedidos['dados']['Usuario']['bairro']; ?> <br>
            <?php echo $pedidos['dados']['Usuario']['complemento']; ?><br>
                    <form method="post" action="ped_detalhes_andamento.php">
                    <?php 
                    $situacao = $pedidos['dados']['SituacaoPedido']['id'];
                    ###se abrir form aqui, e dar um action, da pau em tudo. e como vai passar os values ?
                    if($situacao  == 1){
                        echo '<button type="submit" value="2" name="situacao_pedido" id="situacao_pedido" class="btn btn-default">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }else if($situacao  == 2){
                        echo '<button type="submit" value="3" name="situacao_pedido" id="situacao_pedido" class="btn btn-danger">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }else if($situacao  == 3){
                        echo '<button type="submit" value="4" name="situacao_pedido" id="situacao_pedido" class="btn btn-warning">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }elseif($situacao == 4){
                        echo '<button type="submit" value="5" name="situacao_pedido" id="situacao_pedido" class="btn btn-info">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }elseif($situacao == 5) {
                        echo '<button type="submit" value="6" name="situacao_pedido" id="situacao_pedido" class="btn btn-primary">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }else if($situacao == 6){
                        echo '<button type="submit" class="btn btn-success" value="7" name="situacao_pedido" id="situacao_pedido">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    }else{
                        echo '<button class="btn btn-danger">'.$pedidos['dados']['SituacaoPedido']['descricao'].'</button><br>';
                    } ?>
                    <?php if (empty($_POST['pedidoID'])){ ?> 
                        <input type="hidden" name="pedidoID" value="<?php echo $_GET['pedidoID']?>">
                    <?php }?>
                    <?php if (empty($_GET['pedidoID'])){ ?> 
                        <input type="hidden" name="pedidoID" value="<?php echo $_POST['pedidoID']?>">
                    <?php }?>
                    
                    </form>
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
                            <input type="checkbox" <?php if ($row['metade'] == 'S')  
                               echo 'checked';
                             ?> disabled>Meia</input><br>
                            <input type="checkbox" <?php if ($row['mini'] == 'S')  
                               echo 'checked';
                             ?> disabled>Broto</input>
                        </td>
                        <td><?PHP echo $row['dados_produto']['Produto']['nome']; ?></td>
                        <td>R$ <?PHP echo number_format($row['valor'], 2, ',', '.'); ?></td>
                    </tr>
                <?PHP } ?>
                
                <tr style="background-color: #2c3e50; color: white;">
                    <td>
                        <input type="checkbox" <?php if ($pedidos['dados']['Pedido']['valor_borda'] <> '0.00') {
                            echo 'checked';
                        }?> disabled>Borda recheada</input>
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
    </div><br><br>
    <div align="center">
        <h3>Cores do botão</h3><br>
        <button class="btn btn-default"></button> <label> Em desenvolvimento.</label><br>
        <button class="btn btn-danger"></button> <label> Aguardando confirmação da pizzaria.</label><br>
        <button class="btn btn-warning"></button> <label> Pedido confirmado.</label><br>
        <button class="btn btn-info"></button> <label> Pedido sendo construido.</label><br>
        <button class="btn btn-primary"></button> <label> Pedido em entrega.</label><br>
        <button class="btn btn-success"></button> <label> Pedido entregue.</label><br>
    </div>
</div>



<?php require_once('footer.php'); ?>