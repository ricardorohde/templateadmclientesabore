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
            <form name="formularioBusca" method="post">
                <div class="col-lg-3">
                    <input class="form-control" placeholder="Pesquise Aqui" id="input_busca" name="input_busca">                    
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