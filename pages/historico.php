<?php require_once('controller/historico_controller.php'); ?>
<?php require_once('header.php'); ?>
<script src="../js/busca.js"></script>
<script>
    function jsEditar(pedido)
    {           
        document.formPedidoListar.action = "ped_detalhes.php";
        document.getElementById("pedidoID").value = pedido;
        document.getElementById("formPedidoListar").submit();
    }
</script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-history fa-fw"></i>Historico de pedidos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                        <div class="col-lg-3"> 
                             <div class="form-group">
                                <select class="form-control" required="required" id="busca">
                                <option value="" style="display:none">Escolha um Método de busca</option>
                                <option value="nped" id="nped">Nº Pedido</option>
                                <option value="nome" id="nome">Nome</option>
                                <option value="email" id="email">Email</option>
                                <option value="cpf" id="cpf">Cpf</option>
                                <option value="data" id="data">Data (De X até Y)</option>
                                </select>
                             </div> 
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" placeholder="Nº Pedido" id="inputnped" style="display:none">
                            <input class="form-control" placeholder="Nome" id="inputnome" style="display:none">
                            <input class="form-control" placeholder="Email" id="inputemail" style="display:none">
                            <input class="form-control" placeholder="Cpf comprador apenas numeros" id="inputcpf" style="display:none">
                            <input class="form-control" placeholder="Do dia 03:01 até 08/01" id="inputdata" style="display:none">            
                        </div>  

                        <br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                   
                                        <tr  style="background-color: #2c3e50; color: white;">
                                            <th>Nº Ped</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Método</th>
                                            <th>Data Ped.</th>
                                            <th>Valor Total</th>
                                        </tr>
                                   
                                       <form id="formPedidoListar" name="formPedidoListar" action="historico.php" method="post">
                                        <?php foreach($listaPedidos['dados'] as $pedidos){?>
                                        <tr>
                                        	<td>
                                        		<a href="javascript:void(0);" onclick="jsEditar('<?PHP echo $pedidos['Pedido']['id'] ?>');">	<?php echo $pedidos['Pedido']['id']; ?>
                                        		</a>
                                        	</td>
                                        	<td><?php echo $pedidos['Usuario']['nome']; ?></td>
                                        	<td><?php echo $pedidos['Usuario']['email']; ?></td>
                                        	<td><?php echo $pedidos['FormaPagamento']['descricao']; ?></td>
                                        	<td><?php echo $pedidos['Pedido']['data_pedido']; ?></td>
                                        	<td>R$ <?php echo $pedidos['Pedido']['valor_total']; ?></td>
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
         </div>



<?php require_once('footer.php'); ?>